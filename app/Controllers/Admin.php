<?php

namespace App\Controllers;
use App\Models\OrderModel;

class Admin extends BaseController
{
    public function index()
    {
        $model = new OrderModel();
        // Mengambil semua data dari tabel orders
        $data['orders'] = $model->findAll();
        
        return view('list_order', $data);
    }

    // ======================================
    // PRODUCTS MANAGEMENT
    // ======================================

    public function products()
    {
        $model = new \App\Models\ProductModel();
        $data['products'] = $model->findAll();
        return view('admin/products_list', $data);
    }

    public function product_create()
    {
        return view('admin/products_form');
    }

    public function product_store()
    {
        $model = new \App\Models\ProductModel();

        $file = $this->request->getFile('file_media');
        $fileName = '';

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            // Pindahkan file ke folder public/videos/uploads
            $file->move(FCPATH . 'videos/uploads', $fileName);
        }

        // Tangkap array fitur dan gabungkan jadi string pisah koma
        $fiturArray = $this->request->getPost('fitur');
        $fiturString = is_array($fiturArray) ? implode(', ', array_filter($fiturArray)) : '';

        $data = [
            'kategori'   => $this->request->getPost('kategori'),
            'nama_paket' => $this->request->getPost('nama_paket'),
            'harga'      => $this->request->getPost('harga'),
            'fitur'      => $fiturString,
            'link'       => $this->request->getPost('link'),
        ];

        if (!empty($fileName)) {
            $data['file_media'] = $fileName;
        }

        $model->insert($data);

        return redirect()->to('/admin/products')->with('message', 'Produk berhasil ditambahkan');
    }

    public function product_delete($id)
    {
        $model = new \App\Models\ProductModel();
        $product = $model->find($id);

        if ($product) {
            // Hapus file fisik jika ada
            if (!empty($product['file_media'])) {
                $filePath = FCPATH . 'videos/uploads/' . $product['file_media'];
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
            $model->delete($id);
        }

        return redirect()->to('/admin/products')->with('message', 'Produk berhasil dihapus');
    }
}