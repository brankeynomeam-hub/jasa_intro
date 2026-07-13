<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Brankey Store - Premium YouTube Intros' ?></title>
    <meta name="description" content="<?= $metaDesc ?? 'Platform terpercaya untuk jasa edit video, preset Alight Motion, intro YouTube, overlay gratis, dan produk digital premium.' ?>">

    <!-- Preconnect untuk fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Russo+One&display=swap" rel="stylesheet">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

    <!-- Preloader keyframes (harus synchronous agar tidak FOUC) -->
    <style>
        @keyframes spin         { to { transform: rotate(360deg);  } }
        @keyframes spin-reverse { to { transform: rotate(-360deg); } }
        @keyframes pulse        {
            0%, 100% { opacity: 1; text-shadow: 0 0 15px rgba(0,229,255,0.6); }
            50%      { opacity: 0.5; text-shadow: none; }
        }
    </style>
</head>
<body>

    <!-- SCROLL PROGRESS BAR -->
    <div id="scroll-progress"></div>

    <!-- ============================================================
         PRELOADER
    ============================================================ -->
    <div id="brankey-preloader" style="position:fixed;top:0;left:0;width:100vw;height:100vh;background:#0a0a0f;z-index:99999;display:flex;flex-direction:column;align-items:center;justify-content:center;transition:opacity 0.6s ease,visibility 0.6s ease;">
        <div style="position:relative;width:80px;height:80px;margin-bottom:25px;">
            <div style="position:absolute;inset:0;border:4px solid transparent;border-top-color:#00e5ff;border-bottom-color:#7c3aed;border-radius:50%;animation:spin 1s linear infinite;"></div>
            <div style="position:absolute;top:12px;left:12px;width:56px;height:56px;border:4px solid transparent;border-left-color:#00e5ff;border-right-color:#7c3aed;border-radius:50%;animation:spin-reverse 0.8s linear infinite;"></div>
        </div>
        <h2 style="color:#fff;font-family:'Russo One','Poppins',sans-serif;letter-spacing:3px;font-size:1.2rem;margin:0;animation:pulse 1.5s ease-in-out infinite;">
            BRANKEY <span style="color:#00e5ff;">STORE</span>
        </h2>
        <p style="color:#666;font-size:11px;margin-top:10px;letter-spacing:2px;">LOADING EXPERIENCES...</p>
    </div>
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                var pl = document.getElementById('brankey-preloader');
                if (pl) {
                    pl.style.opacity = '0';
                    setTimeout(function() { pl.style.visibility = 'hidden'; }, 600);
                }
            }, 500);
        });
    </script>

    <!-- Particles Background -->
    <div id="particles-js" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:-1;opacity:0.5;pointer-events:none;"></div>

    <!-- ============================================================
         HEADER
    ============================================================ -->
    <header>
        <div class="logo-text d-flex align-center gap-10">
            <video autoplay loop muted playsinline preload="none"
                   src="<?= base_url('videos/logo_header.mp4') ?>"
                   style="height:42px;border-radius:5px;background:#000;">
            </video>
            <span style="color:#fff;">Brankey</span>
            <span class="text-gradient">Store</span>
        </div>
        <nav class="d-flex gap-10 align-center">
            <a href="<?= base_url('ai-tool') ?>" class="btn-primary"
               style="padding:8px 18px;font-size:13px;background:linear-gradient(135deg,#7c3aed,#00e5ff);color:#fff;">
                🤖 Brankey AI BG
            </a>
            <a href="<?= base_url('/') ?>" class="btn-primary" style="padding:8px 18px;font-size:13px;">
                Katalog
            </a>
        </nav>
    </header>

    <!-- ============================================================
         MAIN CONTENT
    ============================================================ -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- ============================================================
         FOMO Notification Toast
    ============================================================ -->
    <div id="fomo-toast">
        <div style="font-size:22px;">🔔</div>
        <div>
            <div style="font-size:11px;color:#00e5ff;font-weight:700;margin-bottom:2px;">ORDER BARU SAJA MASUK!</div>
            <div id="fomo-text" style="font-size:12px;color:#fff;line-height:1.4;">Seseorang memesan Jasa Edit.</div>
            <div id="fomo-time" style="font-size:10px;color:#888;margin-top:2px;">Beberapa detik yang lalu</div>
        </div>
    </div>

    <!-- ============================================================
         SCRIPTS (defer / end of body)
    ============================================================ -->
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <!-- Particles JS -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" defer></script>

    <?= $this->renderSection('scripts') ?>

    <!-- Global UI Scripts -->
    <script>
    // ── Scroll Progress Bar
    window.addEventListener('scroll', function() {
        var scrollTop    = document.documentElement.scrollTop || document.body.scrollTop;
        var scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var progress     = document.getElementById('scroll-progress');
        if (progress && scrollHeight > 0) {
            progress.style.width = ((scrollTop / scrollHeight) * 100) + '%';
        }
    }, { passive: true });

    // ── Particles.js init (reduced count for performance)
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof particlesJS !== 'undefined') {
            var isMobile = window.innerWidth < 768;
            particlesJS('particles-js', {
                particles: {
                    number: { value: isMobile ? 15 : 30, density: { enable: true, value_area: 900 } },
                    color:  { value: ['#00e5ff', '#7c3aed', '#4ae7d1'] },
                    shape:  { type: 'circle' },
                    opacity: { value: 0.4, random: true },
                    size:    { value: 2.5, random: true },
                    line_linked: {
                        enable: !isMobile,
                        distance: 140,
                        color: '#ffffff',
                        opacity: 0.08,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 1.5,
                        direction: 'none',
                        random: true,
                        out_mode: 'out'
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: { enable: !isMobile, mode: 'grab' },
                        onclick: { enable: true, mode: 'push' },
                        resize: true
                    },
                    modes: {
                        grab: { distance: 130, line_linked: { opacity: 0.4 } },
                        push: { particles_nb: 2 }
                    }
                },
                retina_detect: true
            });
        }
    });
    </script>
</body>
</html>
