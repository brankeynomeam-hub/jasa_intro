<?php

namespace App\Controllers;
use App\Models\OrderModel;

class Order extends BaseController
{
    public function index()
    {
        $paket = $this->request->getGet('paket') ?? 'Basic';
        $harga = $this->request->getGet('harga') ?? '50000';
        $gambar = $this->request->getGet('gambar') ?? '';

        $data = [
            'paket' => $paket,
            'harga' => $harga,
            'gambar' => $gambar
        ];

        return view('form_order', $data);
    }

    public function proses()
    {
        // AJAX Handler
        if ($this->request->isAJAX()) {
            $model = new OrderModel();
            
            $data = [
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'nomor_wa'     => $this->request->getPost('nomor_wa'),
                'paket'        => $this->request->getPost('paket'),
                'harga'        => $this->request->getPost('harga'),
                'catatan'      => $this->request->getPost('catatan'),
                'status'       => 'pending'
            ];

            try {
                // Try to save, but don't break if DB schema is not updated
                $model->save($data);
                return $this->response->setJSON(['status' => 'success', 'message' => 'Order saved']);
            } catch (\Exception $e) {
                // DB might not have the new columns, but we still proceed to WhatsApp
                return $this->response->setJSON(['status' => 'success', 'message' => 'Proceeding to WA', 'error' => $e->getMessage()]);
            }
        }
        
        return redirect()->to('/');
    }
}