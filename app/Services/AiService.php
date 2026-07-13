<?php

namespace App\Services;

class AiService
{
    /**
     * Remove background using remove.bg API
     *
     * @param string $sourceFilePath
     * @param string $destinationFilePath
     * @return array
     */
    public function removeBackground(string $sourceFilePath, string $destinationFilePath): array
    {
        $apiKey = env('REMOVEBG_API_KEY', '');
        
        if (empty($apiKey)) {
            return [
                'success' => false,
                'message' => 'API Key remove.bg belum dikonfigurasi. Tambahkan REMOVEBG_API_KEY di file .env'
            ];
        }

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => 'https://api.remove.bg/v1.0/removebg',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => [
                'image_file' => new \CURLFile($sourceFilePath),
                'size'       => 'auto',
            ],
            CURLOPT_HTTPHEADER     => [
                'X-Api-Key: ' . $apiKey,
            ],
        ]);

        $response   = curl_exec($ch);
        $httpCode   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError  = curl_error($ch);
        curl_close($ch);

        if ($curlError || $httpCode !== 200) {
            $errMsg = 'Gagal menghapus background.';
            $decoded = json_decode($response, true);
            if (isset($decoded['errors'][0]['title'])) {
                $errMsg .= ' ' . $decoded['errors'][0]['title'];
            }
            return [
                'success' => false,
                'message' => $errMsg . ' (HTTP ' . $httpCode . ')'
            ];
        }

        if (file_put_contents($destinationFilePath, $response) !== false) {
            return [
                'success' => true,
                'message' => 'Berhasil menghapus background.'
            ];
        }

        return [
            'success' => false,
            'message' => 'Gagal menyimpan file hasil proses AI.'
        ];
    }
}
