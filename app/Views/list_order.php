<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan - Brankey Admin</title>
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
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: rgba(255, 255, 255, 0.02);
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            background: rgba(124, 58, 237, 0.1);
            color: #a78bfa;
            border: 1px solid rgba(124, 58, 237, 0.3);
        }
    </style>
</head>
<body>

    <nav class="admin-navbar">
        <div class="admin-logo">
            <span>🔐</span> Brankey Admin
        </div>
        <div class="nav-actions">
            <a href="<?= base_url('/') ?>" class="btn btn-primary" target="_blank">🌐 Lihat Website</a>
            <a href="<?= base_url('admin/products') ?>" class="btn btn-primary">📦 Kelola Produk</a>
            <a href="<?= base_url('admin/logout') ?>" class="btn btn-danger">🚪 Logout</a>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <h2 class="page-title">Data Pesanan Masuk</h2>
            <p class="page-subtitle">Kelola semua pesanan klien dari Brankey Store</p>
        </div>

        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Klien</th>
                        <th>Email / Kontak</th>
                        <th>Produk Dipesan</th>
                        <th>Catatan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($orders)): ?>
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 40px; color: #6b7280;">Belum ada pesanan masuk.</td>
                    </tr>
                    <?php else: ?>
                        <?php foreach($orders as $o): ?>
                        <tr>
                            <td style="color: #9ca3af;">#<?= $o['id'] ?></td>
                            <td style="font-weight: 500;"><?= esc($o['nama_klien']) ?></td>
                            <td><?= esc($o['email']) ?></td>
                            <td style="color: #00e5ff;"><?= esc($o['nama_intro']) ?></td>
                            <td><span style="opacity: 0.8; font-size: 13px;"><?= esc($o['catatan']) ?></span></td>
                            <td><span class="status-badge"><?= esc($o['status']) ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>