<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'email', 'nomor_wa', 'nama_channel', 'jenis_konten', 'paket', 'harga', 'catatan', 'status'];
}