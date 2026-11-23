<?php

namespace App\Console\Commands;

use App\Models\Beasiswa;
use App\Services\Beasiswa\ApiIndonesiaService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Throwable;
use RuntimeException;

class SyncBeasiswaApiIndonesia extends Command
{
    protected $signature = 'beasiswa:sync-api {--dry-run : Simulasi tanpa menyimpan perubahan}';

    protected $description = 'Sinkronisasi data beasiswa dari API Indonesia';

    public function handle(ApiIndonesiaService $api): int
    {
        $this->info('Memulai sinkronisasi beasiswa...');

        try {
            // Ambil seluruh halaman API
            $firstResponse = $api->getScholarships([
                'page' => 1,
                'per_page' => 100,
            ]);

            if (!isset($firstResponse['data']) ||
                !is_array($firstResponse['data'])) {
                throw new RuntimeException('Format data API tidak sesuai.');
            }

            $allData = $firstResponse['data'];
            $totalPages = (int) ($firstResponse['meta']['total_pages'] ?? 1);

            for ($page = 2; $page <= $totalPages; $page++) {
                $this->info("Mengambil halaman {$page}...");

                $response = $api->getScholarships([
                    'page' => $page,
                    'per_page' => 100,
                ]);

                if (!isset($response['data']) ||
                    !is_array($response['data'])) {
                    throw new RuntimeException(
                        "Data halaman {$page} tidak valid."
                    );
                }

                $allData = array_merge($allData, $response['data']);
            }

            $baru = 0;
            $diperbarui = 0;
            $dilewati = 0;
 if ($this->option('dry-run')) {
    $this->info('MODE SIMULASI: database tidak akan diubah.');

    $this->info('Jumlah data dari API: ' . count($allData));

    $slugs = collect($allData)
        ->pluck('slug')
        ->filter();

    $this->info(
        'Jumlah slug unik: ' . $slugs->unique()->count()
    );

    $this->info('Simulasi selesai. Tidak ada perubahan database.');

    return self::SUCCESS;
}
            DB::transaction(function () use (
                $allData,
                &$baru,
                &$diperbarui,
                &$dilewati
            ) {
                foreach ($allData as $item) {
                    $slug = $item['slug'] ?? null;
                    $nama = $item['nama'] ?? null;
                    $penyelenggara = $item['penyelenggara'] ?? null;
                    $url = $item['url_resmi'] ?? null;

                    // Periksa identitas dan URL resmi
                    if (
                        !$slug ||
                        !$nama ||
                        !$penyelenggara ||
                        !$url ||
                        !filter_var($url, FILTER_VALIDATE_URL) ||
                        parse_url($url, PHP_URL_SCHEME) !== 'https'
                    ) {
                        $dilewati++;
                        continue;
                    }

                    $identifier = Str::limit($slug, 64, '');

                    // Cari data lama berdasarkan slug
                    $beasiswa = Beasiswa::where(
                        'source_identifier',
                        $identifier
                    )->first();

                    // Jika belum ditemukan, cocokkan URL resmi
                    if (!$beasiswa) {
                        $beasiswa = Beasiswa::where(
                            'source_url',
                            $url
                        )->first();
                    }

                    // Tentukan kategori
                    $jenis = Str::lower(
                        (string) ($item['jenis_penyelenggara'] ?? '')
                    );

                    $negara = $item['negara_tujuan'] ?? [];

                    if (
                        Str::contains($jenis, ['internasional', 'asing']) ||
                        (is_array($negara) && !empty($negara))
                    ) {
                        $kategori = 'Internasional';
                    } elseif (Str::contains($jenis, 'yayasan')) {
                        $kategori = 'Yayasan';
                    } elseif (
                        Str::contains($jenis, [
                            'pemerintah',
                            'kementerian',
                            'negara',
                        ])
                    ) {
                        $kategori = 'Pemerintah';
                    } elseif (Str::contains($jenis, 'swasta')) {
                        $kategori = 'Swasta';
                    } else {
                        // Pertahankan kategori lama jika jenis belum dikenal
                        $kategori = $beasiswa?->category;

                        if (!in_array($kategori, [
                            'Swasta',
                            'Pemerintah',
                            'Internasional',
                            'Yayasan',
                        ], true)) {
                            $dilewati++;
                            continue;
                        }
                    }

                    // Jenjang pendidikan
                    $jenjang = $item['jenjang'] ?? [];

                    $educationLevel = is_array($jenjang)
                        ? implode(', ', $jenjang)
                        : (string) $jenjang;

                    // Lokasi studi
                    $location = (string) (
                        $item['lokasi_studi'] ?? ''
                    );

                    if (is_array($negara) && !empty($negara)) {
                        $location .= ' - ' . implode(', ', $negara);
                    }

                    // Deadline dari periode aktif
                    $deadline = null;
                    $tanggalTutup = data_get(
                        $item,
                        'periode_aktif.tutup'
                    );

                    if ($tanggalTutup) {
                        try {
                            $deadline = Carbon::parse(
                                $tanggalTutup
                            )->toDateString();
                        } catch (Throwable $e) {
                            $deadline = null;
                        }
                    }

                    // Tentukan status
                   
$statusPendaftaran = Str::lower(
    (string) ($item['status_pendaftaran'] ?? '')
);

$status = match ($statusPendaftaran) {
    'dibuka' => 'active',
    'segera_dibuka' => 'upcoming',
    'belum_diumumkan' => 'unannounced',
    'ditutup' => 'closed',
    default => 'unannounced',
};

// Jika program tidak aktif, tandai sebagai ditutup.
if (($item['aktif'] ?? true) !== true) {
    $status = 'closed';
}

// Jika tanggal pendaftaran sudah lewat, tandai sebagai ditutup.
if (
    $status === 'active' &&
    $deadline &&
    $deadline < today()->toDateString()
) {
    $status = 'closed';
}

                    // Susun deskripsi
                    $description = $item['ringkasan'] ?? '';

                    $bagian = [
                        'Cakupan Beasiswa' => $item['cakupan'] ?? [],
                        'Persyaratan Utama' => $item['syarat_utama'] ?? [],
                    ];

                    foreach ($bagian as $judul => $isi) {
                        if (is_array($isi) && !empty($isi)) {
                            $description .= "\n\n{$judul}:\n- "
                                . implode("\n- ", $isi);
                        }
                    }

                    if (!empty($item['pola_jadwal'])) {
                        $description .= "\n\nPola Jadwal:\n"
                            . $item['pola_jadwal'];
                    }

                    if (!empty($item['catatan'])) {
                        $description .= "\n\nCatatan Sumber:\n"
                            . $item['catatan'];
                    }

                    // Simpan data
                    $isNew = !$beasiswa;

                    if (!$beasiswa) {
                        $beasiswa = new Beasiswa();
                    }

                    $beasiswa->fill([
                        'title' => Str::limit($nama, 255, ''),
                        'institution' => Str::limit(
                            $penyelenggara,
                            255,
                            ''
                        ),
                        'source_identifier' => $identifier,
                        'source_domain' => parse_url($url, PHP_URL_HOST),
                        'source_url' => $url,
                        'category' => $kategori,
                        'description' => $description ?: null,
                        'deadline' => $deadline,
                        'education_level' => Str::limit(
                            $educationLevel,
                            255,
                            ''
                        ),
                        'funding_type' => $item['skema_dana'] ?? null,
                        'location' => Str::limit(
                            trim($location),
                            255,
                            ''
                        ),
                        'status' => $status,
                    ]);

                    $beasiswa->save();

                    if ($isNew) {
                        $baru++;
                    } else {
                        $diperbarui++;
                    }
                }
            });

            $this->newLine();
            $this->info('Sinkronisasi berhasil!');
            $this->info("Data baru: {$baru}");
            $this->info("Data diperbarui: {$diperbarui}");
            $this->info("Data dilewati: {$dilewati}");

            return self::SUCCESS;

        } catch (Throwable $e) {
            $this->error(
                'Sinkronisasi gagal: ' . $e->getMessage()
            );

            return self::FAILURE;
        }
    }
}
