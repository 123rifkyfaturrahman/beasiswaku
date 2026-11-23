<?php

use App\Models\Beasiswa;
use Illuminate\Console\Command;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

it('imports and updates records from configured official feeds', function () {
    Http::preventStrayRequests();

    $feedUrl = 'https://feed.example.test/scholarships';

    config()->set('beasiswa.sources', json_encode([
        [
            'name' => 'Universitas Contoh',
            'url' => $feedUrl,
            'category' => 'PTN',
            'items_path' => 'data.items',
            'fields' => [
                'id' => 'scholarship_id',
                'title' => 'name',
                'institution' => 'organizer',
                'source_url' => 'link',
                'description' => 'summary',
                'deadline' => 'closing_date',
                'education_level' => 'study_level',
                'funding_type' => 'benefit',
                'location' => 'region',
            ],
        ],
    ], JSON_THROW_ON_ERROR));

    Http::fake([
        $feedUrl => Http::response([
            'data' => [
                'items' => [
                    [
                        'scholarship_id' => 'univ-2027-01',
                        'name' => 'Beasiswa Prestasi 2027',
                        'organizer' => 'Universitas Contoh',
                        'link' => 'https://beasiswa.example.ac.id/program/2027-01',
                        'summary' => 'Bantuan pendidikan untuk mahasiswa berprestasi.',
                        'closing_date' => '2027-01-31',
                        'study_level' => 'S1',
                        'benefit' => 'Biaya pendidikan',
                        'region' => 'Indonesia',
                    ],
                ],
            ],
        ]),
    ]);

    expect(Artisan::call('beasiswa:fetch'))->toBe(Command::SUCCESS);
    expect(Artisan::call('beasiswa:fetch'))->toBe(Command::SUCCESS);

    $this->assertDatabaseCount('beasiswas', 1);
    $this->assertDatabaseHas('beasiswas', [
        'title' => 'Beasiswa Prestasi 2027',
        'institution' => 'Universitas Contoh',
        'education_level' => 'S1',
        'funding_type' => 'Biaya pendidikan',
        'status' => 'active',
    ]);

    Http::assertSent(fn (Request $request): bool => $request->url() === $feedUrl);
});

it('reports a failed feed without inserting invalid scholarship data', function () {
    Http::preventStrayRequests();

    $feedUrl = 'https://feed.example.test/scholarships';

    config()->set('beasiswa.sources', json_encode([
        [
            'name' => 'Universitas Contoh',
            'url' => $feedUrl,
            'category' => 'PTN',
        ],
    ], JSON_THROW_ON_ERROR));

    Http::fake([
        $feedUrl => Http::response(['message' => 'temporarily unavailable'], 503),
    ]);

    expect(Artisan::call('beasiswa:fetch'))->toBe(Command::FAILURE);
    expect(Artisan::output())->toContain('Universitas Contoh gagal disinkronkan');

    $this->assertDatabaseCount('beasiswas', 0);
});

it('does not claim synchronization succeeded when no official feeds are configured', function () {
    config()->set('beasiswa.sources', '[]');

    expect(Artisan::call('beasiswa:fetch'))->toBe(Command::FAILURE);
    expect(Artisan::output())->toContain('Belum ada feed resmi');

    $this->assertDatabaseCount('beasiswas', 0);
});
