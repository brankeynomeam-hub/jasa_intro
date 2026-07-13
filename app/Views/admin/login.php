<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Brankey Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: #0a0a0f;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Animated background */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background:
                radial-gradient(ellipse at 20% 30%, rgba(0, 229, 255, 0.08) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 70%, rgba(124, 58, 237, 0.08) 0%, transparent 50%);
            pointer-events: none;
        }

        .login-container {
            position: relative;
            width: 100%;
            max-width: 420px;
            padding: 20px;
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(0, 229, 255, 0.15);
            border-radius: 24px;
            padding: 48px 40px;
            backdrop-filter: blur(20px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(255,255,255,0.03);
        }

        .login-logo {
            text-align: center;
            margin-bottom: 32px;
        }

        .login-logo-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #00e5ff, #7c3aed);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin: 0 auto 16px;
            box-shadow: 0 8px 30px rgba(0, 229, 255, 0.3);
        }

        .login-logo h1 {
            font-size: 1.6rem;
            font-weight: 800;
            background: linear-gradient(135deg, #00e5ff, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-logo p {
            color: #6b7280;
            font-size: 13px;
            margin-top: 4px;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #f87171;
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 13px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .alert-success {
            background: rgba(0, 230, 118, 0.1);
            border: 1px solid rgba(0, 230, 118, 0.3);
            color: #00e676;
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 13px;
            margin-bottom: 20px;
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
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px 14px 44px;
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

        .form-control::placeholder { color: #4b5563; }

        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #00e5ff, #7c3aed);
            border: none;
            border-radius: 12px;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 8px;
            transition: all 0.3s;
            letter-spacing: 0.5px;
        }

        .btn-login:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 229, 255, 0.3);
        }

        .btn-login:active { transform: translateY(0); }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #6b7280;
            font-size: 13px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-link a:hover { color: #00e5ff; }

        .lock-badge {
            text-align: center;
            margin-top: 24px;
            color: #374151;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">

            <div class="login-logo">
                <div class="login-logo-icon">🔐</div>
                <h1>Brankey Admin</h1>
                <p>Masuk untuk mengelola website</p>
            </div>

            <?php if(session()->getFlashdata('error')): ?>
            <div class="alert-error">⚠️ <?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <?php if(session()->getFlashdata('message')): ?>
            <div class="alert-success">✅ <?= session()->getFlashdata('message') ?></div>
            <?php endif; ?>

            <form action="<?= base_url('admin/login/proses') ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan username" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="input-wrapper">
                        <span class="input-icon">🔑</span>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                    </div>
                </div>

                <button type="submit" class="btn-login">🚀 Masuk ke Admin Panel</button>
            </form>

            <div class="back-link">
                <a href="<?= base_url('/') ?>">← Kembali ke Website</a>
            </div>

            <div class="lock-badge">🔒 Area Terproteksi</div>

        </div>
    </div>
</body>
</html>
