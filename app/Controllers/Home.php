<?php

namespace App\Controllers;

use App\Models\ProductModel;

/**
 * Home Controller
 * Menampilkan halaman utama katalog produk.
 */
class Home extends BaseController
{
    protected ProductModel $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index(): string
    {
        // Ambil semua produk sekaligus, lalu kelompokkan per kategori di PHP
        // Lebih efisien daripada 5 query terpisah
        $allProducts = $this->productModel->findAll();

        $data = [
            'intros'     => [],
            'overlays'   => [],
            'ccs'        => [],
            'watermarks' => [],
            'gratis'     => [],
        ];

        $map = [
            'intro'     => 'intros',
            'overlay'   => 'overlays',
            'cc'        => 'ccs',
            'watermark' => 'watermarks',
            'gratis'    => 'gratis',
        ];

        foreach ($allProducts as $product) {
            $kategori = $product['kategori'] ?? '';
            if (isset($map[$kategori])) {
                $data[$map[$kategori]][] = $product;
            }
        }

        return view('home', $data);
    }
}
