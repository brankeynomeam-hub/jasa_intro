<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Brankey Admin</title>
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
            background: linear-gradient(135deg, #00e5ff, #7c3aed);
            color: #fff;
            width: 100%;
            justify-content: center;
            padding: 15px;
            font-size: 15px;
            margin-top: 10px;
        }
        
        .btn-primary:hover {
            box-shadow: 0 5px 20px rgba(0, 229, 255, 0.3);
            transform: translateY(-2px);
        }

        .btn-nav {
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-nav:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        /* Container */
        .container {
            max-width: 650px;
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

        /* Form Card */
        .form-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: 30px;
            backdrop-filter: blur(10px);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #9ca3af;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            outline: none;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: rgba(0, 229, 255, 0.5);
            background: rgba(0, 229, 255, 0.05);
            box-shadow: 0 0 0 3px rgba(0, 229, 255, 0.1);
        }

        .form-control::placeholder {
            color: #4b5563;
        }

        /* File input styling */
        input[type="file"] {
            padding: 10px;
            color: #9ca3af;
        }
        
        input[type="file"]::file-selector-button {
            padding: 8px 16px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            margin-right: 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="file"]::file-selector-button:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        /* Select styling */
        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%239ca3af%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E");
            background-repeat: no-repeat, repeat;
            background-position: right .7em top 50%, 0 0;
            background-size: .65em auto, 100%;
        }
        
        select.form-control option {
            background: #1f2937;
            color: #fff;
        }

        .help-text {
            font-size: 12px;
            color: #6b7280;
            margin-top: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
    </style>
</head>
<body>

    <nav class="admin-navbar">
        <div class="admin-logo">
            <span>🔐</span> Brankey Admin
        </div>
        <div class="nav-actions">
            <a href="<?= base_url('admin/products') ?>" class="btn btn-nav">← Kembali ke Daftar</a>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <div>
                <h2 class="page-title">Tambah Produk Baru</h2>
                <p class="page-subtitle">Upload aset baru ke dalam katalog Brankey Store</p>
            </div>
        </div>

        <div class="form-card">
            <form action="<?= base_url('admin/products/store') ?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label>Kategori Produk</label>
                    <select name="kategori" class="form-control" required>
                        <option value="">-- Pilih Kategori / Tab --</option>
                        <option value="intro">🎬 Tab Intro (Bisa untuk Intro / Logo)</option>
                        <option value="overlay">🎬 Tab Overlay Gratis</option>
                        <option value="cc">🎨 Tab CC / Efek</option>
                        <option value="watermark">💧 Tab Watermark</option>
                        <option value="gratis">🎁 Tab Gratis (Preset AM)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Paket / Judul</label>
                    <input type="text" name="nama_paket" class="form-control" placeholder="Contoh: Intro (KEY) Copy 4V" required>
                </div>

                <div class="form-group">
                    <label>Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" placeholder="Contoh: 35000 (Kosongkan/0 jika gratis)">
                </div>

                <div class="form-group">
                    <label>Link Preset (Opsional)</label>
                    <input type="url" name="link" class="form-control" placeholder="Contoh: https://alightcreative.com/...">
                    <div class="help-text"><span>ℹ️</span> Khusus untuk kategori Tab Gratis (Preset AM)</div>
                </div>

                <div class="form-group">
                    <label>Fitur 1 (Opsional)</label>
                    <input type="text" name="fitur[]" class="form-control" placeholder="Contoh: Dapat Preset Projek">
                </div>

                <div class="form-group">
                    <label>Fitur 2 (Opsional)</label>
                    <input type="text" name="fitur[]" class="form-control" placeholder="Contoh: Cocok Semua Macam Video">
                </div>

                <div class="form-group">
                    <label>File Media (Video MP4 / Gambar)</label>
                    <input type="file" name="file_media" class="form-control" accept="video/mp4,image/*" required>
                    <div class="help-text"><span>⚠️</span> Video preview (.mp4) atau gambar (.jpg/.png). Maks 20MB.</div>
                </div>

                <button type="submit" class="btn-primary">🚀 Simpan Produk ke Katalog</button>
            </form>
        </div>
    </div>

</body>
</html>
