<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * OrderModel
 * Model untuk tabel `orders` — menyimpan data pesanan pelanggan.
 */
class OrderModel extends Model
{
    protected $table          = 'orders';
    protected $primaryKey     = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields  = [
        'nama_lengkap',
        'nomor_wa',
        'paket',
        'harga',
        'catatan',
        'status',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}