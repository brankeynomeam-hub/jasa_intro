<?php

namespace App\Controllers;

class AiTool extends BaseController
{
    /**
     * Halaman utama AI Tool
     */
    public function index()
    {
        return view('ai_tool');
    }

    /**
     * Proses upload gambar, hapus background, generate XML
     */
    public function proses()
    {
        // Hanya terima AJAX POST
        if (!$this->request->isAJAX()) {
            return redirect()->to('/ai-tool');
        }

        // Validasi file upload
        $file = $this->request->getFile('gambar');
        if (!$file || !$file->isValid()) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'File tidak valid. Silakan upload ulang.'
            ]);
        }

        // Cek ekstensi
        $allowedTypes = ['jpg', 'jpeg', 'png', 'webp'];
        if (!in_array(strtolower($file->getExtension()), $allowedTypes)) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Format file tidak didukung. Gunakan JPG, PNG, atau WEBP.'
            ]);
        }

        // Cek ukuran max 10MB
        if ($file->getSize() > 10 * 1024 * 1024) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Ukuran file maksimal 10MB.'
            ]);
        }

        // Simpan file original sementara
        $uploadPath = WRITEPATH . 'uploads/ai_tool/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $fileName   = uniqid('logo_', true);
        $origName   = $fileName . '.' . $file->getExtension();
        $file->move($uploadPath, $origName);

        // Ambil API Key dari .env
        $apiKey = env('REMOVEBG_API_KEY', '');
        if (empty($apiKey)) {
            // Mode demo: tidak ada API key, kembalikan pesan error
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'API Key remove.bg belum dikonfigurasi. Tambahkan REMOVEBG_API_KEY di file .env'
            ]);
        }

        // Pilihan orientasi dari user
        $orientasi = $this->request->getPost('orientasi') ?? 'landscape';
        if ($orientasi === 'portrait') {
            $kompW = 1080;
            $kompH = 1920;
        } else {
            $kompW = 1920;
            $kompH = 1080;
        }

        // ======================================
        // Panggil remove.bg API
        // ======================================
        $origPath  = $uploadPath . $origName;
        $noBgName  = $fileName . '_nobg.png';
        $noBgPath  = $uploadPath . $noBgName;

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => 'https://api.remove.bg/v1.0/removebg',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => [
                'image_file' => new \CURLFile($origPath),
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
            // Decode error message jika JSON
            $errMsg = 'Gagal menghapus background.';
            $decoded = json_decode($response, true);
            if (isset($decoded['errors'][0]['title'])) {
                $errMsg .= ' ' . $decoded['errors'][0]['title'];
            }
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => $errMsg . ' (HTTP ' . $httpCode . ')'
            ]);
        }

        // Simpan hasil PNG tanpa background
        file_put_contents($noBgPath, $response);

        // Copy gambar no-BG ke public agar bisa di-preview
        $publicPreviewPath = FCPATH . 'uploads/ai_tool/';
        if (!is_dir($publicPreviewPath)) {
            mkdir($publicPreviewPath, 0755, true);
        }
        copy($noBgPath, $publicPreviewPath . $noBgName);

        return $this->response->setJSON([
            'status'      => 'success',
            'message'     => 'Berhasil! Background dihapus.',
            'preview_url' => base_url('uploads/ai_tool/' . $noBgName),
            'download_url'=> base_url('uploads/ai_tool/' . $noBgName),
        ]);
    }

    /**
     * Download file by base64 encoded name
     */
    public function download($encodedName)
    {
        $fileName = base64_decode($encodedName);
        if (!$fileName) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Invalid file name');
        }

        $uploadPath = WRITEPATH . 'uploads/ai_tool/';
        $possibleFiles = [
            $fileName,
            $fileName . '.png',
            $fileName . '.jpg',
            $fileName . '.jpeg',
            $fileName . '.webp',
            $fileName . '_nobg.png'
        ];

        $filePath = '';
        foreach ($possibleFiles as $file) {
            $path = $uploadPath . $file;
            if (file_exists($path)) {
                $filePath = $path;
                break;
            }
            // Check public/uploads/ai_tool too
            $publicPath = FCPATH . 'uploads/ai_tool/' . $file;
            if (file_exists($publicPath)) {
                $filePath = $publicPath;
                break;
            }
        }

        if (empty($filePath) || !file_exists($filePath)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('File not found');
        }

        return $this->response->download($filePath, null);
    }
}

