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

        // Gunakan UploadService untuk menangani file
        $file = $this->request->getFile('gambar');
        $uploadService = new \App\Services\UploadService();
        $uploadPath = WRITEPATH . 'uploads/ai_tool/';
        
        $uploadResult = $uploadService->handleUpload(
            $file,
            $uploadPath,
            ['jpg', 'jpeg', 'png', 'webp'],
            10485760, // 10MB
            'logo_' // prefix
        );

        if (!$uploadResult['success']) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => $uploadResult['message']
            ]);
        }

        $origName = $uploadResult['file_name'];
        $origPath = $uploadPath . $origName;
        $noBgName = pathinfo($origName, PATHINFO_FILENAME) . '_nobg.png';
        $noBgPath = $uploadPath . $noBgName;

        // Pilihan orientasi dari user (tidak terpakai secara langsung untuk API ini, tapi disiapkan)
        $orientasi = $this->request->getPost('orientasi') ?? 'landscape';

        // Panggil AiService untuk remove background
        $aiService = new \App\Services\AiService();
        $aiResult = $aiService->removeBackground($origPath, $noBgPath);

        if (!$aiResult['success']) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => $aiResult['message']
            ]);
        }

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

