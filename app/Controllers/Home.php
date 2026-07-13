<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $productModel = new \App\Models\ProductModel();
        
        $data['intros']    = $productModel->where('kategori', 'intro')->findAll();
        $data['overlays']  = $productModel->where('kategori', 'overlay')->findAll();
        $data['ccs']       = $productModel->where('kategori', 'cc')->findAll();
        $data['watermarks']= $productModel->where('kategori', 'watermark')->findAll();
        $data['gratis']    = $productModel->where('kategori', 'gratis')->findAll();

        return view('home', $data);
    }
}
