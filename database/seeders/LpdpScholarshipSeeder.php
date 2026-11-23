<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beasiswa;

class LpdpScholarshipSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [
            [
                'source_identifier' => 'lpdp-tu-braunschweig',
                'title' => 'LPDP - TU Braunschweig',
                'institution' => 'LPDP dan TU Braunschweig',
                'education_level' => 'S3',
                'location' => 'Jerman',
                'source_url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/LPDP-TUBraunschweig/',
            ],
            [
                'source_identifier' => 'lpdp-queensland',
                'title' => 'LPDP - University of Queensland',
                'institution' => 'LPDP dan University of Queensland',
                'education_level' => 'S3',
                'location' => 'Australia',
                'source_url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/Beasiswa_LPDP%E2%80%93The_University_of_Queensland_Program_Doktor/',
            ],
            [
                'source_identifier' => 'lpdp-washington',
                'title' => 'LPDP - Washington University',
                'institution' => 'LPDP dan Washington University in St. Louis',
                'education_level' => 'S3',
                'location' => 'Amerika Serikat',
                'source_url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/lpdp-washingtondoctor/',
            ],
            [
                'source_identifier' => 'lpdp-uc-davis',
                'title' => 'LPDP - UC Davis',
                'institution' => 'LPDP dan University of California Davis',
                'education_level' => 'S3',
                'location' => 'Amerika Serikat',
                'source_url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/lpdp-davisdoktor2026/',
            ],
            [
                'source_identifier' => 'lpdp-sydney',
                'title' => 'LPDP - University of Sydney',
                'institution' => 'LPDP dan University of Sydney',
                'education_level' => 'S3',
                'location' => 'Australia',
                'source_url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/lpdp-usydteknik2026/',
            ],
            [
                'source_identifier' => 'lpdp-ucd',
                'title' => 'LPDP - University College Dublin',
                'institution' => 'LPDP dan University College Dublin',
                'education_level' => 'S2',
                'location' => 'Irlandia',
                'source_url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/lpdp-ucd2026/',
            ],
            [
                'source_identifier' => 'lpdp-naist',
                'title' => 'LPDP - NAIST',
                'institution' => 'LPDP dan Nara Institute of Science and Technology',
                'education_level' => 'S2, S3',
                'location' => 'Jepang',
                'source_url' => 'https://lpdp.kemenkeu.go.id/beasiswa/beasiswa-kemitraan-double-degree-joint-degree/lpdp-naist2026/',
            ],
        ];

        foreach ($programs as $program) {
            Beasiswa::updateOrCreate(
                [
                    'source_identifier' => $program['source_identifier'],
                ],
                [
                    'title' => $program['title'],
                    'institution' => $program['institution'],
                    'source_domain' => 'lpdp.kemenkeu.go.id',
                    'source_url' => $program['source_url'],
                    'category' => 'Internasional',
                    'description' =>
                        'Program beasiswa kerja sama LPDP dengan perguruan tinggi luar negeri melalui skema co-funding. Persyaratan, bidang studi, dan ketentuan setiap program dapat berbeda. Silakan periksa panduan resmi LPDP.',
                    'deadline' => '2026-12-01',
                    'status' => 'active',
                    'education_level' => $program['education_level'],
                    'funding_type' => 'Co-funding',
                    'location' => $program['location'],
                ]
            );
        }
    }
}
