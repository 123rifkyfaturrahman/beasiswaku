<?php

namespace App\Console\Commands;

use App\Models\Beasiswa;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use UnexpectedValueException;

class FetchBeasiswaData extends Command
{
    protected $signature = 'beasiswa:fetch';

    protected $description = 'Synchronize scholarship records from configured official JSON feeds';

    public function handle(): int
    {
        Beasiswa::query()
            ->whereDate('deadline', '<', today())
            ->update(['status' => 'closed']);

        $sources = json_decode((string) config('beasiswa.sources', '[]'), true);

        if (! is_array($sources) || ! array_is_list($sources)) {
            $this->error('BEASISWA_SOURCES harus berisi JSON array sumber feed yang valid.');

            return self::FAILURE;
        }

        if ($sources === []) {
            $this->error('Belum ada feed resmi. Konfigurasikan BEASISWA_SOURCES terlebih dahulu.');

            return self::FAILURE;
        }

        $hasFailures = false;
        $syncedCount = 0;

        foreach ($sources as $index => $source) {
            $sourceName = is_array($source) && is_string($source['name'] ?? null)
                ? $source['name']
                : 'Sumber #'.($index + 1);

            try {
                $count = $this->syncSource($source);
                $syncedCount += $count;
                $this->info("{$sourceName}: {$count} beasiswa disinkronkan.");
            } catch (ConnectionException|RequestException|InvalidArgumentException|UnexpectedValueException $exception) {
                $hasFailures = true;
                $exceptionClass = $exception::class;
                $this->error("{$sourceName} gagal disinkronkan ({$exceptionClass}).");

                Log::error('Scholarship feed synchronization failed.', [
                    'source' => $sourceName,
                    'exception' => $exception::class,
                ]);
            }
        }

        $this->info("Total beasiswa disinkronkan: {$syncedCount}.");

        return $hasFailures ? self::FAILURE : self::SUCCESS;
    }

    private function syncSource(mixed $source): int
    {
        if (! is_array($source)) {
            throw new InvalidArgumentException('Konfigurasi sumber harus berupa object.');
        }

        $sourceValidator = Validator::make($source, [
            'name' => ['required', 'string', 'max:255'],
            'url' => ['required', 'url', 'starts_with:https://'],
            'category' => ['required', 'in:Pusat,PTN,PTS,Luar Negeri'],
            'items_path' => ['nullable', 'string'],
            'fields' => ['nullable', 'array'],
            'fields.*' => ['required', 'string', 'max:255'],
        ]);

        if ($sourceValidator->fails()) {
            throw new InvalidArgumentException('Konfigurasi sumber tidak valid.');
        }

        $fields = array_replace([
            'id' => 'id',
            'title' => 'title',
            'institution' => 'institution',
            'source_url' => 'url',
            'description' => 'description',
            'deadline' => 'deadline',
            'education_level' => 'education_level',
            'funding_type' => 'funding_type',
            'location' => 'location',
        ], $source['fields'] ?? []);

        $response = Http::acceptJson()
            ->connectTimeout(5)
            ->timeout(20)
            ->get($source['url'])
            ->throw();

        $payload = $response->json();
        $items = filled($source['items_path'] ?? null)
            ? data_get($payload, $source['items_path'])
            : $payload;

        if (! is_array($items) || ! array_is_list($items)) {
            throw new UnexpectedValueException('Respons feed harus berupa JSON array.');
        }

        $records = [];

        foreach ($items as $index => $item) {
            if (! is_array($item)) {
                throw new UnexpectedValueException('Item feed ke-'.($index + 1).' bukan object JSON.');
            }

            $attributes = [
                'title' => data_get($item, $fields['title']),
                'institution' => data_get($item, $fields['institution']) ?: $source['name'],
                'source_url' => data_get($item, $fields['source_url']),
                'description' => data_get($item, $fields['description']),
                'deadline' => data_get($item, $fields['deadline']),
                'education_level' => data_get($item, $fields['education_level']),
                'funding_type' => data_get($item, $fields['funding_type']),
                'location' => data_get($item, $fields['location']),
                'category' => $source['category'],
            ];

            $itemValidator = Validator::make($attributes, [
                'title' => ['required', 'string', 'max:255'],
                'institution' => ['required', 'string', 'max:255'],
                'source_url' => ['required', 'url', 'starts_with:https://', 'max:255'],
                'description' => ['nullable', 'string'],
                'deadline' => ['required', 'date'],
                'education_level' => ['nullable', 'string', 'max:255'],
                'funding_type' => ['nullable', 'string', 'max:255'],
                'location' => ['nullable', 'string', 'max:255'],
                'category' => ['required', 'in:Pusat,PTN,PTS,Luar Negeri'],
            ]);

            if ($itemValidator->fails()) {
                throw new UnexpectedValueException(
                    'Item feed ke-'.($index + 1).' tidak memiliki data beasiswa yang valid.'
                );
            }

            $externalId = data_get($item, $fields['id']);
            $identity = filled($externalId) ? (string) $externalId : $attributes['source_url'];
            $deadline = Carbon::parse($attributes['deadline'])->toDateString();
            $attributes['source_identifier'] = hash('sha256', $source['url'].'|'.$identity);
            $attributes['source_domain'] = parse_url($attributes['source_url'], PHP_URL_HOST)
                ?: parse_url($source['url'], PHP_URL_HOST);
            $attributes['deadline'] = $deadline;
            $attributes['status'] = $deadline < today()->toDateString() ? 'closed' : 'active';

            $records[] = $attributes;
        }

        foreach ($records as $record) {
            Beasiswa::updateOrCreate(
                ['source_identifier' => $record['source_identifier']],
                $record,
            );
        }

        return count($records);
    }
}
