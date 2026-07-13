<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Produk - Brankey Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: #0a0a0f;
            color: #fff;
            min-height: 100vh;
        }

        /* Navbar */
        .admin-navbar {
            background: rgba(255, 255, 255, 0.03);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(10px);
        }
        
        .admin-logo {
            font-size: 1.2rem;
            font-weight: 800;
            background: linear-gradient(135deg, #00e5ff, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-actions {
            display: flex;
            gap: 12px;
        }

        .btn {
            padding: 10px 18px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: rgba(0, 229, 255, 0.1);
            color: #00e5ff;
            border: 1px solid rgba(0, 229, 255, 0.3);
        }
        
        .btn-primary:hover {
            background: rgba(0, 229, 255, 0.2);
            box-shadow: 0 0 15px rgba(0, 229, 255, 0.2);
        }

        .btn-nav {
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-nav:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .btn-danger {
            background: rgba(239, 68, 68, 0.1);
            color: #f87171;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .btn-danger:hover {
            background: rgba(239, 68, 68, 0.2);
            box-shadow: 0 0 15px rgba(239, 68, 68, 0.2);
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .page-header {
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .page-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: #9ca3af;
            font-size: 14px;
        }

        .alert {
            padding: 15px 20px;
            background: rgba(0, 230, 118, 0.1);
            color: #00e676;
            border: 1px solid rgba(0, 230, 118, 0.3);
            border-radius: 12px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
        }

        /* Table Card */
        .table-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: rgba(255, 255, 255, 0.02);
            padding: 16px 20px;
            text-align: left;
            font-size: 12px;
            font-weight: 600;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        td {
            padding: 16px 20px;
            font-size: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
            color: #e5e7eb;
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: rgba(255, 255, 255, 0.02);
        }

        .cat-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            background: rgba(0, 229, 255, 0.1);
            color: #00e5ff;
            border: 1px solid rgba(0, 229, 255, 0.3);
            text-transform: uppercase;
        }

        .media-preview {
            max-width: 150px;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.1);
        }
    </style>
</head>
<body>

    <nav class="admin-navbar">
        <div class="admin-logo">
            <span>🔐</span> Brankey Admin
        </div>
        <div class="nav-actions">
            <a href="<?= base_url('admin') ?>" class="btn btn-nav">📋 Data Pesanan</a>
            <a href="<?= base_url('admin/logout') ?>" class="btn btn-danger">🚪 Logout</a>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <div>
                <h2 class="page-title">Kelola Produk & Aset</h2>
                <p class="page-subtitle">Tambah atau hapus produk digital untuk website utama</p>
            </div>
            <div>
                <a href="<?= base_url('admin/products/create') ?>" class="btn btn-primary" style="font-size: 14px; padding: 12px 24px;">➕ Tambah Produk Baru</a>
            </div>
        </div>

        <?php if(session()->getFlashdata('message')): ?>
            <div class="alert">
                <span>✅</span> <?= session()->getFlashdata('message') ?>
            </div>
        <?php endif; ?>

        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Nama / Judul</th>
                        <th>Harga</th>
                        <th>File Media</th>
                        <th style="text-align: right;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($products)): ?>
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 40px; color: #6b7280;">Belum ada produk yang ditambahkan.</td>
                    </tr>
                    <?php else: ?>
                        <?php foreach($products as $p): ?>
                        <tr>
                            <td style="color: #9ca3af;">#<?= $p['id'] ?></td>
                            <td><span class="cat-badge"><?= esc($p['kategori']) ?></span></td>
                            <td style="font-weight: 500;"><?= esc($p['nama_paket']) ?></td>
                            <td style="color: #00e676; font-weight: 600;">
                                <?= $p['harga'] > 0 ? 'Rp ' . number_format($p['harga'], 0, ',', '.') : 'Gratis' ?>
                            </td>
                            <td>
                                <span style="font-size: 12px; color: #9ca3af; word-break: break-all;">
                                    <?= esc($p['file_media']) ?>
                                </span>
                            </td>
                            <td style="text-align: right;">
                                <a href="<?= base_url('admin/products/delete/' . $p['id']) ?>" class="btn btn-danger" style="display: inline-flex; padding: 6px 12px; font-size: 12px;" onclick="return confirm('Yakin ingin menghapus produk ini? File yang sudah diupload akan ikut terhapus dari server.')">🗑️ Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
