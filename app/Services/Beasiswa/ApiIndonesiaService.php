<?php

namespace App\Services\Beasiswa;

use Illuminate\Support\Facades\Http;
use RuntimeException;

class ApiIndonesiaService
{
    public function getScholarships(array $params = []): array
    {
        $baseUrl = config('services.api_indonesia.base_url');
        $apiKey = config('services.api_indonesia.key');

        if (empty($apiKey)) {
            throw new RuntimeException(
                'API Key Indonesia belum dikonfigurasi.'
            );
        }

        $response = Http::acceptJson()
            ->withHeaders([
                'x-api-key' => $apiKey,
            ])
            ->timeout(30)
            ->get(
                rtrim($baseUrl, '/') . '/api/v1/beasiswa',
                $params
            );

        $response->throw();

        $data = $response->json();

        if (! is_array($data)) {
            throw new RuntimeException(
                'Respons API tidak memiliki format JSON yang valid.'
            );
        }

        return $data;
    }
}
