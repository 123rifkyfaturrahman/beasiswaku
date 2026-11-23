<?php

namespace App\Console\Commands;

use App\Models\Beasiswa;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class SyncLpdpScholarships extends Command
{
    protected $signature = 'beasiswa:sync-lpdp
                            {--dry-run : Simulasi tanpa mengubah database}';

    protected $description = 'Sinkronisasi informasi beasiswa dari halaman resmi LPDP';

    public function handle(): int
    {
        $programs = [
            'lpdp-tu-braunschweig' => [
                'name' => 'TU Braunschweig',
                'url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/LPDP-TUBraunschweig/',
            ],
            'lpdp-queensland' => [
                'name' => 'University of Queensland',
                'url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/Beasiswa_LPDP%E2%80%93The_University_of_Queensland_Program_Doktor/',
            ],
            'lpdp-washington' => [
                'name' => 'Washington University',
                'url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/lpdp-washingtondoctor/',
            ],
            'lpdp-uc-davis' => [
                'name' => 'UC Davis',
                'url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/lpdp-davisdoktor2026/',
            ],
            'lpdp-sydney' => [
                'name' => 'University of Sydney',
                'url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/lpdp-usydteknik2026/',
            ],
            'lpdp-ucd' => [
                'name' => 'University College Dublin',
                'url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/lpdp-ucd2026/',
            ],
            'lpdp-naist' => [
                'name' => 'NAIST',
                'url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/lpdp-naist2026/',
            ],
        ];

        $updated = 0;
        $skipped = 0;
        $failed = 0;

        $this->info('Memulai sinkronisasi LPDP...');
        $this->newLine();

        foreach ($programs as $identifier => $program) {
            try {
                $response = Http::timeout(30)
                    ->withHeaders([
                        'User-Agent' => 'BEASISWAKU Scholarship Information System',
                    ])
                    ->get($program['url']);

                $response->throw();

                $html = $response->body();

                $text = html_entity_decode(
                    strip_tags(
                        preg_replace(
                            '/<\/(td|th)>/i',
                            ' | ',
                            preg_replace('/<\/tr>/i', "\n", $html)
                        )
                    ),
                    ENT_QUOTES | ENT_HTML5,
                    'UTF-8'
                );

                $text = preg_replace('/\s+/u', ' ', $text);
                $lowerText = Str::lower($text);

                // Tentukan status hanya jika ditemukan secara jelas.
                $status = null;

                if (Str::contains($lowerText, 'sedang dibuka')) {
                    $status = 'active';
                } elseif (Str::contains($lowerText, 'pendaftaran ditutup')) {
                    $status = 'closed';
                }

                // Cari tanggal tenggat.
                $deadline = null;

                if (preg_match(
                    '/Pendaftaran(?: Seleksi| Beasiswa)?\s*\|\s*[^|]{0,100}?(\d{1,2}\s+\p{L}+\s+\d{4})/u',
                    $text,
                    $matches
                )) {
                    $tanggal = Str::lower($matches[1]);

                    $bulan = [
                        'januari' => 'January',
                        'februari' => 'February',
                        'maret' => 'March',
                        'april' => 'April',
                        'mei' => 'May',
                        'juni' => 'June',
                        'juli' => 'July',
                        'agustus' => 'August',
                        'september' => 'September',
                        'oktober' => 'October',
                        'november' => 'November',
                        'desember' => 'December',
                    ];

                    foreach ($bulan as $indonesia => $english) {
                        $tanggal = str_replace(
                            $indonesia,
                            $english,
                            $tanggal
                        );
                    }

                    try {
                        $deadline = \Carbon\Carbon::createFromFormat(
                            '!j F Y',
                            $tanggal,
                            'Asia/Jakarta'
                        )?->toDateString();
                    } catch (\Throwable $e) {
                        $deadline = null;
                    }
                }

                $updates = [];

                if ($status !== null) {
                    $updates['status'] = $status;
                }

                if ($deadline !== null) {
                    $updates['deadline'] = $deadline;
                }

                if (empty($updates)) {
                    $this->warn("[DILEWATI] {$program['name']}");
                    $this->line('Informasi status dan tenggat belum dapat dipastikan.');
                    $skipped++;
                    continue;
                }

                if ($this->option('dry-run')) {
                    $this->info("[SIMULASI] {$program['name']}");
                    $this->line('Status: ' . ($status ?? 'Tidak berubah'));
                    $this->line('Tenggat: ' . ($deadline ?? 'Tidak berubah'));
                    $updated++;
                    continue;
                }

                $affected = Beasiswa::where(
                    'source_identifier',
                    $identifier
                )->update($updates);

                if ($affected > 0) {
                    $this->info("[DIPERBARUI] {$program['name']}");
                    $updated++;
                } else {
                    $this->warn("[TIDAK BERUBAH] {$program['name']}");
                    $skipped++;
                }

            } catch (\Throwable $e) {
                $this->error("[GAGAL] {$program['name']}");
                $this->line('Halaman gagal diperiksa: ' . $e->getMessage());
                $failed++;
            }

            $this->newLine();
        }

        $this->info('Ringkasan sinkronisasi:');
        $this->line("Berhasil diproses: {$updated}");
        $this->line("Dilewati: {$skipped}");
        $this->line("Gagal: {$failed}");

        if ($this->option('dry-run')) {
            $this->warn('Mode simulasi: database tidak diubah.');
        }

        return $failed > 0 ? self::FAILURE : self::SUCCESS;
    }
}
