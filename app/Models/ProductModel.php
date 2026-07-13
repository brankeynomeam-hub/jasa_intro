<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'kategori',
        'nama_paket',
        'harga',
        'fitur',
        'link',
        'file_media',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules = [
        'kategori'   => 'required',
        'nama_paket' => 'required|min_length[3]',
        'harga'      => 'required|numeric',
    ];
    protected $validationMessages = [
        'nama_paket' => [
            'required'   => 'Nama paket harus diisi',
            'min_length' => 'Nama paket minimal 3 karakter'
        ],
        'harga' => [
            'required' => 'Harga harus diisi',
            'numeric'  => 'Harga harus berupa angka'
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
