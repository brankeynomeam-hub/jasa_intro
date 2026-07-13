<?php

namespace App\Services;

class UploadService
{
    /**
     * Handle file upload
     *
     * @param \CodeIgniter\HTTP\Files\UploadedFile $file
     * @param string $targetPath
     * @param array $allowedTypes (e.g., ['jpg', 'jpeg', 'png', 'mp4', 'webp'])
     * @param int $maxSize in bytes
     * @param string|null $prefix
     * @return array
     */
    public function handleUpload($file, string $targetPath, array $allowedTypes = [], int $maxSize = 20971520, ?string $prefix = null): array
    {
        if (!$file || !$file->isValid()) {
            return [
                'success' => false,
                'message' => 'File tidak valid atau gagal diupload.'
            ];
        }

        if (!empty($allowedTypes)) {
            $ext = strtolower($file->getExtension());
            if (!in_array($ext, $allowedTypes)) {
                return [
                    'success' => false,
                    'message' => 'Format file tidak didukung. Ekstensi yang diizinkan: ' . implode(', ', $allowedTypes)
                ];
            }
        }

        if ($file->getSize() > $maxSize) {
            return [
                'success' => false,
                'message' => 'Ukuran file melebihi batas maksimal (' . ($maxSize / 1024 / 1024) . 'MB).'
            ];
        }

        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0755, true);
        }

        $fileName = $file->getRandomName();
        if ($prefix) {
            $fileName = $prefix . $fileName; // e.g. logo_... or use uniqid() but getRandomName() gives robust string
        }
        
        try {
            $file->move($targetPath, $fileName);
            return [
                'success' => true,
                'file_name' => $fileName,
                'original_name' => $file->getClientName()
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Gagal memindahkan file: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Delete a physical file
     */
    public function deleteFile(string $filePath): bool
    {
        if (file_exists($filePath) && is_file($filePath)) {
            return unlink($filePath);
        }
        return false;
    }
}
