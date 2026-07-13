<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\ProductModel;
use App\Services\UploadService;

/**
 * Admin Controller
 * Mengelola data pesanan dan produk digital.
 */
class Admin extends BaseController
{
    protected OrderModel   $orderModel;
    protected ProductModel $productModel;

    /** Path upload video/media produk */
    private const UPLOAD_PATH = 'videos/uploads';

    public function __construct()
    {
        $this->orderModel   = new OrderModel();
        $this->productModel = new ProductModel();
    }

    // ======================================
    // ORDERS MANAGEMENT
    // ======================================

    /** Menampilkan semua data pesanan */
    public function index(): string
    {
        $data['orders'] = $this->orderModel->orderBy('id', 'DESC')->findAll();
        return view('list_order', $data);
    }

    // ======================================
    // PRODUCTS MANAGEMENT
    // ======================================

    /** Menampilkan daftar semua produk */
    public function products(): string
    {
        $data['products'] = $this->productModel->orderBy('id', 'DESC')->findAll();
        return view('admin/products_list', $data);
    }

    /** Form tambah produk baru */
    public function product_create(): string
    {
        return view('admin/products_form');
    }

    /** Simpan produk baru ke database */
    public function product_store()
    {
        $rules = [
            'nama_paket' => 'required|min_length[3]',
            'harga'      => 'required|numeric',
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Validasi gagal: ' . implode(' ', $this->validator->getErrors()));
        }

        $fileName = '';
        $file     = $this->request->getFile('file_media');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $uploadService = new UploadService();
            $uploadResult  = $uploadService->handleUpload(
                $file,
                FCPATH . self::UPLOAD_PATH,
                ['mp4', 'jpg', 'jpeg', 'png', 'webp'],
                20971520 // 20 MB
            );

            if (!$uploadResult['success']) {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', $uploadResult['message']);
            }

            $fileName = $uploadResult['file_name'];
        }

        // Gabungkan array fitur menjadi string koma-pisah
        $fiturArray  = $this->request->getPost('fitur') ?? [];
        $fiturString = is_array($fiturArray)
            ? implode(', ', array_filter(array_map('trim', $fiturArray)))
            : '';

        $productData = [
            'kategori'   => $this->request->getPost('kategori'),
            'nama_paket' => $this->request->getPost('nama_paket'),
            'harga'      => $this->request->getPost('harga'),
            'fitur'      => $fiturString,
            'link'       => $this->request->getPost('link'),
        ];

        if (!empty($fileName)) {
            $productData['file_media'] = $fileName;
        }

        $this->productModel->insert($productData);

        return redirect()
            ->to('/admin/products')
            ->with('message', 'Produk berhasil ditambahkan.');
    }

    /** Hapus produk beserta file fisiknya */
    public function product_delete(int $id)
    {
        $product = $this->productModel->find($id);

        if ($product) {
            if (!empty($product['file_media'])) {
                $uploadService = new UploadService();
                $uploadService->deleteFile(FCPATH . self::UPLOAD_PATH . '/' . $product['file_media']);
            }
            $this->productModel->delete($id);
        }

        return redirect()
            ->to('/admin/products')
            ->with('message', 'Produk berhasil dihapus.');
    }
}