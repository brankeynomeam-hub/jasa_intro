<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Brankey Store - Premium YouTube Intros' ?></title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <style>
        /* SCROLL PROGRESS BAR */
        #scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #4ae7d1, #2ab8a5);
            z-index: 999999;
            box-shadow: 0 0 10px #4ae7d1, 0 0 5px #2ab8a5;
            transition: width 0.1s ease;
        }


        
        /* BUTTON SHINE EFFECT */
        .btn-primary {
            position: relative;
            overflow: hidden;
        }
        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%);
            transform: skewX(-25deg);
            transition: all 0.7s ease;
        }
        .btn-primary:hover::after {
            left: 200%;
        }
    </style>
</head>
<body>
    <div id="scroll-progress"></div>

    <!-- PRELOADER -->
    <div id="brankey-preloader" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: #0a0a0f; z-index: 99999; display: flex; flex-direction: column; align-items: center; justify-content: center; transition: opacity 0.6s ease, visibility 0.6s ease;">
        <div style="position: relative; width: 80px; height: 80px; margin-bottom: 25px;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 4px solid transparent; border-top-color: #00e5ff; border-bottom-color: #7c3aed; border-radius: 50%; animation: spin 1s linear infinite;"></div>
            <div style="position: absolute; top: 12px; left: 12px; width: 56px; height: 56px; border: 4px solid transparent; border-left-color: #00e5ff; border-right-color: #7c3aed; border-radius: 50%; animation: spin-reverse 0.8s linear infinite;"></div>
        </div>
        <h2 style="color: #fff; font-family: 'Russo One', 'Poppins', sans-serif; letter-spacing: 3px; font-size: 1.2rem; margin: 0; animation: pulse 1.5s ease-in-out infinite;">BRANKEY <span style="color: #00e5ff;">STORE</span></h2>
        <p style="color: #888; font-size: 11px; margin-top: 10px; letter-spacing: 2px;">LOADING EXPERIENCES...</p>
        <style>
            @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
            @keyframes spin-reverse { 0% { transform: rotate(360deg); } 100% { transform: rotate(0deg); } }
            @keyframes pulse { 0%, 100% { opacity: 1; text-shadow: 0 0 15px rgba(0,229,255,0.6); } 50% { opacity: 0.5; text-shadow: none; } }
        </style>
    </div>
    
    <script>
        // Hapus preloader setelah halaman selesai dimuat (ditambah sedikit delay agar animasi terlihat)
        window.addEventListener('load', function() {
            setTimeout(function() {
                var preloader = document.getElementById('brankey-preloader');
                if(preloader) {
                    preloader.style.opacity = '0';
                    setTimeout(function() { preloader.style.visibility = 'hidden'; }, 600); // sesuaikan dengan transisi CSS
                }
            }, 600); 
        });
    </script>

    <!-- Particles Background -->
    <div id="particles-js" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; opacity: 0.6; pointer-events: none;"></div>

    <header>
        <div class="logo-text" style="display: flex; align-items: center; gap: 10px;">
            <video autoplay loop muted playsinline src="<?= base_url('videos/logo_header.mp4') ?>" style="height: 45px; border-radius: 5px; background: #000;"></video>
            <span style="color:#ffffff; font-family:'Russo One',sans-serif;">Brankey</span> <span style="background: linear-gradient(135deg, #4ae7d1, #2ab8a5); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-family:'Russo One',sans-serif;">Store</span>
        </div>
        <nav style="display: flex; gap: 10px; align-items: center;">
            <a href="<?= base_url('ai-tool') ?>" class="btn-primary" style="padding: 8px 20px; font-size: 14px; background: linear-gradient(135deg, #7c3aed, #00e5ff);">🤖 Brankey AI BG</a>
            <a href="<?= base_url('/') ?>" class="btn-primary" style="padding: 8px 20px; font-size: 14px;">Katalog</a>
        </nav>
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> Brankey Store. All Rights Reserved.</p>
        <p style="font-size: 0.8rem; margin-top: 5px;">Build with CodeIgniter 4</p>
    </footer>

    <!-- FOMO Notification Toast -->
    <div id="fomo-toast" style="position: fixed; bottom: 20px; left: -350px; background: rgba(15, 15, 20, 0.95); border: 1px solid rgba(0, 229, 255, 0.4); border-left: 4px solid #00e5ff; padding: 12px 15px; border-radius: 8px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); z-index: 1000; display: flex; align-items: center; gap: 12px; transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55); width: max-content; max-width: 300px; backdrop-filter: blur(10px);">
        <div style="font-size: 24px;">🔔</div>
        <div>
            <div style="font-size: 11px; color: #00e5ff; font-weight: 700; margin-bottom: 2px;">ORDER BARU SAJA MASUK!</div>
            <div id="fomo-text" style="font-size: 12px; color: #fff; line-height: 1.4;">Seseorang memesan Jasa Edit.</div>
            <div id="fomo-time" style="font-size: 10px; color: #888; margin-top: 2px;">Beberapa detik yang lalu</div>
        </div>
    </div>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Particles JS -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <?= $this->renderSection('scripts') ?>
    <!-- CUSTOM UI SCRIPTS -->
    <script>
        // Scroll Progress
        window.addEventListener('scroll', () => {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (scrollTop / scrollHeight) * 100;
            const progress = document.getElementById('scroll-progress');
            if(progress) progress.style.width = scrolled + '%';
        });


    </script>
</body>
</html>
