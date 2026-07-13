<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- ============================================================
     HERO SECTION
============================================================ -->
<div class="hero" data-aos="fade-down" data-aos-duration="900">
    <h1>Price List <span class="text-gradient">Produk Digital</span><br>Brankey Store</h1>
    <p>Tingkatkan kualitas video kamu dengan koleksi Intro, Overlay, dan CC/Efek Premium. Bisa dipakai di semua jenis video!</p>
    <a href="#katalog" class="btn-primary">Lihat Katalog</a>
</div>

<!-- MARQUEE BANNER -->
<div class="marquee-banner">
    <div class="marquee-track">
        🔥 PROSES CEPAT &nbsp;•&nbsp; 🔒 100% AMAN &nbsp;•&nbsp; 💎 KUALITAS HD &nbsp;•&nbsp; 🎨 BEBAS REVISI &nbsp;•&nbsp; 🚀 PELAYANAN RAMAH &nbsp;•&nbsp;
        🔥 PROSES CEPAT &nbsp;•&nbsp; 🔒 100% AMAN &nbsp;•&nbsp; 💎 KUALITAS HD &nbsp;•&nbsp; 🎨 BEBAS REVISI &nbsp;•&nbsp; 🚀 PELAYANAN RAMAH
    </div>
</div>

<!-- ============================================================
     KATALOG SECTION
============================================================ -->
<div id="katalog" class="catalog-container" data-aos="fade-up" data-aos-duration="900">
    <h2 class="section-title">Katalog <span class="text-gradient">Produk</span></h2>

    <!-- SEARCH BAR -->
    <div style="max-width:500px;margin:0 auto 30px auto;position:relative;">
        <input type="text" id="searchKatalog"
               placeholder="Cari produk (intro, cc, preset...)"
               class="form-control"
               style="padding-left:44px;border-radius:50px;">
        <span style="position:absolute;left:16px;top:50%;transform:translateY(-50%);font-size:15px;pointer-events:none;">🔍</span>
    </div>

    <!-- TAB NAVIGATION -->
    <div class="tab-nav" id="tabNav">
        <button class="tab-btn active" onclick="showTab('intro',this)">🎬 Intro</button>
        <button class="tab-btn" onclick="showTab('transisi',this)">🎬 Overlay Gratis</button>
        <button class="tab-btn" onclick="showTab('cc',this)">🎨 CC / Efek</button>
        <button class="tab-btn" onclick="showTab('am',this)">📱 AM Premium</button>
        <button class="tab-btn" onclick="showTab('watermark',this)">💧 Watermark</button>
        <button class="tab-btn" onclick="showTab('gratis',this)"
                style="background:linear-gradient(135deg,rgba(0,229,255,0.08),rgba(124,58,237,0.08));border-color:var(--primary);">
            🎁 Gratis
        </button>
    </div>

    <!-- ========== TAB: INTRO ========== -->
    <div id="tab-intro" class="tab-content active">
        <div class="grid">

            <!-- JASA EDIT — Full-width card -->
            <div class="package-card glass-panel"
                 style="border-color:#cc0000;grid-column:1/-1;background:linear-gradient(135deg,rgba(25,0,0,0.92),rgba(12,12,18,0.98));position:relative;overflow:hidden;">
                <div style="position:absolute;inset:0;background:radial-gradient(ellipse at top,rgba(200,0,0,0.12) 0%,transparent 55%);pointer-events:none;"></div>

                <!-- Header -->
                <div class="text-center" style="margin-bottom:20px;position:relative;">
                    <div style="font-size:11px;font-weight:700;letter-spacing:3px;color:#ff4444;text-transform:uppercase;margin-bottom:8px;">
                        ⚔️ Keymajor • Profesional &amp; Terpercaya
                    </div>
                    <h3 style="font-size:2rem;font-weight:900;color:#fff;margin-bottom:4px;">
                        JASA <span style="color:#ff2222;">EDIT</span>
                    </h3>
                    <div style="font-size:12px;color:#aaa;letter-spacing:3px;">CEPAT &bull; BERKUALITAS &bull; AMAN &bull; TERPERCAYA</div>
                </div>

                <!-- Poster -->
                <div style="margin-bottom:22px;border-radius:14px;overflow:hidden;border:1px solid rgba(255,0,0,0.2);">
                    <img src="<?= base_url('images/poster_jasa_edit.png') ?>" alt="Jasa Edit Keymajor" loading="lazy" style="width:100%;display:block;">
                </div>

                <!-- Layanan Grid -->
                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:12px;margin-bottom:22px;">
                    <?php
                    $layananJasa = [
                        ['icon'=>'🎬', 'label'=>'INTRO PRIVATE',   'harga'=>'35.000', 'url_paket'=>'Jasa+Edit+Intro+Private&harga=35000'],
                        ['icon'=>'🖼️', 'label'=>'POSTER',          'harga'=>'15.000', 'url_paket'=>'Jasa+Edit+Poster&harga=15000'],
                        ['icon'=>'⚡', 'label'=>'LOGO',            'harga'=>'10.000', 'url_paket'=>'Jasa+Edit+Logo&harga=10000'],
                        ['icon'=>'🎵', 'label'=>'JEDAG JEDUG',     'harga'=>'7.000',  'url_paket'=>'Jasa+Edit+Jedag+Jedug&harga=7000'],
                        ['icon'=>'💧', 'label'=>'WM PRIVATE',      'harga'=>'15.000', 'url_paket'=>'Jasa+Edit+Watermark+Private&harga=15000'],
                    ];
                    foreach ($layananJasa as $l): ?>
                    <div style="background:rgba(255,0,0,0.07);border:1px solid rgba(255,68,68,0.35);border-radius:12px;padding:16px 10px;text-align:center;">
                        <div style="font-size:1.8rem;margin-bottom:7px;"><?= $l['icon'] ?></div>
                        <div style="font-weight:800;font-size:13px;color:#fff;margin-bottom:3px;"><?= $l['label'] ?></div>
                        <div style="font-size:11px;color:#aaa;margin-bottom:8px;">Mulai dari</div>
                        <div style="font-size:1.4rem;font-weight:900;color:#ff4444;"><?= $l['harga'] ?></div>
                        <a href="<?= base_url('order?paket=' . $l['url_paket']) ?>" class="btn-primary"
                           style="display:block;margin-top:10px;padding:7px;font-size:11px;background:linear-gradient(135deg,#cc0000,#660000);color:#fff;">
                            Order
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Badges -->
                <div class="d-flex gap-8" style="flex-wrap:wrap;justify-content:center;">
                    <span class="badge badge-red">🔒 100% PRIVATE</span>
                    <span class="badge badge-gold">⚡ PROSES CEPAT</span>
                    <span class="badge badge-green">✅ GARANSI REVISI</span>
                    <span class="badge badge-cyan">⭐ KUALITAS TERBAIK</span>
                </div>
            </div>

            <!-- INTRO dari database -->
            <?php if (!empty($intros)): foreach ($intros as $item): ?>
            <div class="package-card glass-panel" style="border-color:var(--accent-cyan);">
                <div class="package-header">
                    <h3 class="package-name"><?= esc($item['nama_paket']) ?></h3>
                    <div class="package-price">
                        <?= $item['harga'] > 0 ? 'Rp ' . number_format($item['harga'], 0, ',', '.') : 'Gratis' ?>
                    </div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload" preload="none" loading="lazy">
                        <source src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <?php foreach (array_filter(array_map('trim', explode(',', $item['fitur']))) as $f): ?>
                    <li><?= esc($f) ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= base_url('order?paket=' . urlencode($item['nama_paket']) . '&harga=' . $item['harga']) ?>"
                   class="btn-primary w-100 text-center">
                    Order Sekarang
                </a>
            </div>
            <?php endforeach; endif; ?>

            <!-- INTRO hardcoded -->
            <?php
            $intro_items = [
                ['nama' => 'Intro (KEY) Copy 4V',       'harga' => 35000, 'file' => 'intro/intro_key_copy.mp4'],
                ['nama' => 'Intro (KEY) Nama V10',      'harga' => 35000, 'file' => 'intro/intro_key_nama.mp4',  'featured' => true],
                ['nama' => 'Logo (KEY) Detak Jantung',  'harga' => 25000, 'file' => 'logo_key_detak.mp4'],
                ['nama' => 'Intro (KEY) Nama 2 Huruf',  'harga' => 35000, 'file' => 'intro/intro_key_2huruf.mp4'],
            ];
            foreach ($intro_items as $item): ?>
            <div class="package-card glass-panel" <?= !empty($item['featured']) ? 'style="border-color:var(--primary);"' : '' ?>>
                <div class="package-header">
                    <h3 class="package-name <?= !empty($item['featured']) ? 'text-gradient' : '' ?>">
                        <?= esc($item['nama']) ?>
                    </h3>
                    <div class="package-price">Rp <?= number_format($item['harga'], 0, ',', '.') ?></div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload" preload="none">
                        <source src="<?= base_url('videos/' . $item['file']) ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <li>Dapat Preset Projek</li>
                    <li>Cocok Semua Macam Video</li>
                </ul>
                <a href="<?= base_url('order?paket=' . urlencode($item['nama']) . '&harga=' . $item['harga']) ?>"
                   class="btn-primary w-100 text-center">
                    Order Sekarang
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ========== TAB: OVERLAY GRATIS ========== -->
    <div id="tab-transisi" class="tab-content">
        <div class="text-center" style="margin-bottom:28px;">
            <span class="badge badge-purple" style="margin-bottom:12px;display:inline-block;">🎬 Free Assets</span>
            <h3 style="font-size:1.8rem;font-weight:800;color:#fff;margin:0;">
                Video <span class="text-gradient-purple">Overlay Gratis</span>
            </h3>
            <p class="text-muted" style="font-size:14px;margin-top:8px;">
                Overlay video keren buat konten kamu — 100% Gratis! Wajib follow dulu ya 😊
            </p>
        </div>
        <div class="grid">
            <!-- Overlay dari database -->
            <?php if (!empty($overlays)): foreach ($overlays as $item):
                $fileUrl = base_url('videos/uploads/' . rawurlencode($item['file_media'])); ?>
            <div class="package-card glass-panel" style="border-color:var(--accent-purple);">
                <div class="package-header">
                    <div style="font-size:11px;font-weight:700;color:#a78bfa;letter-spacing:1px;margin-bottom:5px;">🎬 OVERLAY GRATIS</div>
                    <h3 class="package-name" style="text-transform:capitalize;"><?= esc($item['nama_paket']) ?></h3>
                    <div class="package-price text-purple">Gratis 100%</div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload" preload="none">
                        <source src="<?= $fileUrl ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <?php foreach (array_filter(array_map('trim', explode(',', $item['fitur']))) as $f): ?>
                    <li><?= esc($f) ?></li>
                    <?php endforeach; ?>
                </ul>
                <button type="button" class="btn-primary w-100 text-center"
                        style="background:linear-gradient(135deg,#7c3aed,#5b21b6);color:#fff;"
                        onclick="unlockContent('download','<?= $fileUrl ?>','<?= esc($item['file_media']) ?>')">
                    Dapatkan Overlay
                </button>
            </div>
            <?php endforeach; endif; ?>

            <!-- Overlay hardcoded -->
            <?php
            $overlay_files = [
                'overlay_glit_rusak.mp4', 'overlay_bintang_2.mp4', 'overlay_bintang.mp4',
                'overlay_dentuman_asap.mp4', 'overlay_dentuman_titik.mp4', 'overlay_dentuman.mp4',
                'overlay_garisan.mp4', 'overlay_glit_angka.mp4', 'overlay_glit_merah.mp4',
                'overlay_glitch.mp4', 'overlay_gulungan.mp4', 'overlay_kaca_pecah.mp4',
                'overlay_love.mp4', 'overlay_percikan_api.mp4', 'overlay_percikan.mp4',
                'overlay_salju_2.mp4', 'overlay_salju_blur.mp4', 'overlay_salju_kabut.mp4',
                'overlay_salju_orenan.mp4', 'overlay_salju_zoom.mp4', 'overlay_salju.mp4',
            ];
            foreach ($overlay_files as $file):
                $name    = str_replace('_', ' ', pathinfo($file, PATHINFO_FILENAME));
                $fileUrl = base_url('videos/overlay/' . rawurlencode($file)); ?>
            <div class="package-card glass-panel" style="border-color:var(--accent-purple);">
                <div class="package-header">
                    <div style="font-size:11px;font-weight:700;color:#a78bfa;letter-spacing:1px;margin-bottom:5px;">🎬 OVERLAY GRATIS</div>
                    <h3 class="package-name" style="text-transform:capitalize;"><?= esc($name) ?></h3>
                    <div class="package-price text-purple">Gratis 100%</div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload" preload="none">
                        <source src="<?= $fileUrl ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <li>Video Overlay Gratis</li>
                    <li>Syarat: Subscribe &amp; Follow</li>
                </ul>
                <button type="button" class="btn-primary w-100 text-center"
                        style="background:linear-gradient(135deg,#7c3aed,#5b21b6);color:#fff;"
                        onclick="unlockContent('download','<?= $fileUrl ?>','<?= esc($file) ?>')">
                    Dapatkan Overlay
                </button>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ========== TAB: CC / EFEK ========== -->
    <div id="tab-cc" class="tab-content">
        <div class="grid">
            <!-- CC dari database -->
            <?php if (!empty($ccs)): foreach ($ccs as $item):
                $ext = strtolower(pathinfo($item['file_media'], PATHINFO_EXTENSION)); ?>
            <div class="package-card glass-panel" style="border-color:var(--accent-cyan);">
                <div class="package-header">
                    <h3 class="package-name"><?= esc($item['nama_paket']) ?></h3>
                    <div class="package-price">
                        <?= $item['harga'] > 0 ? 'Rp ' . number_format($item['harga'], 0, ',', '.') : 'Gratis' ?>
                    </div>
                </div>
                <div class="package-video" style="aspect-ratio:auto;background:transparent;">
                    <?php if ($ext === 'mp4'): ?>
                    <video controls controlsList="nodownload" preload="none" style="width:100%;border-radius:12px;">
                        <source src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" type="video/mp4">
                    </video>
                    <?php else: ?>
                    <img src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>"
                         alt="<?= esc($item['nama_paket']) ?>"
                         loading="lazy"
                         style="width:100%;border-radius:12px;display:block;">
                    <?php endif; ?>
                </div>
                <ul class="package-features">
                    <?php foreach (array_filter(array_map('trim', explode(',', $item['fitur']))) as $f): ?>
                    <li><?= esc($f) ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= base_url('order?paket=' . urlencode($item['nama_paket']) . '&harga=' . $item['harga']) ?>"
                   class="btn-primary w-100 text-center">
                    Order Sekarang
                </a>
            </div>
            <?php endforeach; endif; ?>

            <!-- CC hardcoded -->
            <?php
            $cc_effects = [
                ['file' => 'cc_key_biru_biasa.jpeg',           'type' => 'img', 'harga' => 12000],
                ['file' => 'cc_key_biru_kuning.jpeg',          'type' => 'img', 'harga' => 12000],
                ['file' => 'cc_key_biru_node.jpeg',            'type' => 'img', 'harga' => 12000],
                ['file' => 'cc_key_kuning_ke_putihan.jpeg',    'type' => 'img', 'harga' => 12000],
                ['file' => 'cc_key_kuning_node.jpeg',          'type' => 'img', 'harga' => 12000],
                ['file' => 'cc_key_kuning_standar.jpeg',       'type' => 'img', 'harga' => 12000],
                ['file' => 'cc_key_pelangi.jpeg',              'type' => 'img', 'harga' => 12000],
                ['file' => 'cc_key_polisi.mp4',                'type' => 'mp4', 'harga' => 12000],
                ['file' => 'cc_key_putih_glow.jpeg',           'type' => 'img', 'harga' => 12000],
                ['file' => 'cc_key_putih_node.jpeg',           'type' => 'img', 'harga' => 12000],
                ['file' => 'cc_key_putih_pertajam_glow.jpeg',  'type' => 'img', 'harga' => 12000],
                ['file' => '7_cc_key_semua_warna.mp4',         'type' => 'mp4', 'harga' => 12000],
            ];
            foreach ($cc_effects as $efx):
                $name = str_replace('_', ' ', pathinfo($efx['file'], PATHINFO_FILENAME)); ?>
            <div class="package-card glass-panel">
                <div class="package-header">
                    <h3 class="package-name" style="text-transform:capitalize;"><?= esc($name) ?></h3>
                    <div class="package-price">Rp <?= number_format($efx['harga'], 0, ',', '.') ?></div>
                </div>
                <div class="package-video" style="aspect-ratio:auto;background:transparent;">
                    <?php if ($efx['type'] === 'mp4'): ?>
                    <video controls controlsList="nodownload" preload="none" style="width:100%;border-radius:12px;">
                        <source src="<?= base_url('videos/cc/' . rawurlencode($efx['file'])) ?>" type="video/mp4">
                    </video>
                    <?php else: ?>
                    <img src="<?= base_url('images/cc/' . rawurlencode($efx['file'])) ?>"
                         alt="<?= esc($name) ?>"
                         loading="lazy"
                         style="width:100%;border-radius:12px;display:block;">
                    <?php endif; ?>
                </div>
                <ul class="package-features">
                    <li>Free Overlay</li>
                    <li>Settingan Node Glow</li>
                    <li>Preset</li>
                </ul>
                <a href="<?= base_url('order?paket=' . urlencode($name) . '&harga=' . $efx['harga']) ?>"
                   class="btn-primary w-100 text-center">
                    Order Sekarang
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ========== TAB: AM PREMIUM ========== -->
    <div id="tab-am" class="tab-content">
        <div class="grid">
            <div class="package-card glass-panel" style="border-color:var(--primary);">
                <div class="package-header">
                    <h3 class="package-name text-gradient">Alight Motion Pro</h3>
                    <div class="package-price">Rp 20.000 <span style="font-size:14px;" class="text-muted">/tahun</span></div>
                </div>
                <div style="margin:18px 0;border-radius:12px;overflow:hidden;">
                    <img src="<?= base_url('images/poster_alight_motion_pro.png') ?>" alt="Alight Motion Pro"
                         loading="lazy" style="width:100%;display:block;border-radius:12px;">
                </div>
                <ul class="package-features">
                    <li>Alight Motion Premium (1 Tahun)</li>
                    <li>Tanpa Watermark</li>
                    <li>Semua Efek Terbuka</li>
                    <li>Update &amp; Support Aman</li>
                </ul>
                <a href="https://wa.me/6285185238351?text=mau+order+am+prem+Brankey"
                   target="_blank" rel="noopener"
                   class="btn-primary w-100 text-center">
                    Order via WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- ========== TAB: WATERMARK ========== -->
    <div id="tab-watermark" class="tab-content">
        <div class="grid">
            <!-- Watermark dari database -->
            <?php if (!empty($watermarks)): foreach ($watermarks as $item):
                $ext = strtolower(pathinfo($item['file_media'], PATHINFO_EXTENSION)); ?>
            <div class="package-card glass-panel" style="border-color:var(--accent-cyan);">
                <div class="package-header">
                    <h3 class="package-name"><?= esc($item['nama_paket']) ?></h3>
                    <div class="package-price">
                        <?= $item['harga'] > 0 ? 'Rp ' . number_format($item['harga'], 0, ',', '.') : 'Gratis' ?>
                    </div>
                </div>
                <div class="package-video" style="aspect-ratio:auto;background:transparent;">
                    <?php if ($ext === 'mp4'): ?>
                    <video controls controlsList="nodownload" preload="none" style="width:100%;border-radius:12px;">
                        <source src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" type="video/mp4">
                    </video>
                    <?php else: ?>
                    <img src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>"
                         alt="<?= esc($item['nama_paket']) ?>"
                         loading="lazy"
                         style="width:100%;border-radius:12px;display:block;">
                    <?php endif; ?>
                </div>
                <ul class="package-features">
                    <?php foreach (array_filter(array_map('trim', explode(',', $item['fitur']))) as $f): ?>
                    <li><?= esc($f) ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= base_url('order?paket=' . urlencode($item['nama_paket']) . '&harga=' . $item['harga']) ?>"
                   class="btn-primary w-100 text-center">
                    Order Sekarang
                </a>
            </div>
            <?php endforeach; endif; ?>

            <!-- Watermark hardcoded — RENAME agar tidak konflik dengan $watermarks DB -->
            <?php
            $watermark_files = [
                'watermark_1.jpg', 'watermark_2.jpg', 'watermark_3.jpg',
                'watermark_4.jpg', 'watermark_5.jpg', 'watermark_6.jpg',
                'watermark_7.jpg', 'watermark_8.jpg', 'watermark_9.jpg',
                'watermark_10.jpg', 'watermark_11.jpg',
            ];
            foreach ($watermark_files as $i => $wm):
                $num = $i + 1; ?>
            <div class="package-card glass-panel">
                <div class="package-header">
                    <h3 class="package-name">Watermark <?= $num ?></h3>
                    <div class="package-price">Rp 12.000</div>
                </div>
                <div class="package-video" style="aspect-ratio:auto;background:transparent;">
                    <img src="<?= base_url('images/watermarks/' . $wm) ?>"
                         alt="Contoh Watermark <?= $num ?>"
                         loading="lazy"
                         style="width:100%;border-radius:12px;display:block;">
                </div>
                <ul class="package-features">
                    <li>Desain Keren &amp; Premium</li>
                    <li>Transparan (PNG) HD</li>
                    <li>Siap Tempel di Video</li>
                </ul>
                <a href="<?= base_url('order?paket=Watermark+' . $num . '&harga=12000&gambar=' . $wm) ?>"
                   class="btn-primary w-100 text-center">
                    Order Sekarang
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ========== TAB: GRATIS ========== -->
    <div id="tab-gratis" class="tab-content">
        <div class="grid">
            <!-- Gratis dari database -->
            <?php if (!empty($gratis)): foreach ($gratis as $item):
                $ext     = strtolower(pathinfo($item['file_media'], PATHINFO_EXTENSION));
                $link    = !empty($item['link']) ? esc($item['link']) : '';
                $onClick = $link
                    ? "unlockContent('preset','{$link}')"
                    : "Swal.fire('Oops!','Link preset belum ditambahkan.','info')"; ?>
            <div class="package-card glass-panel" style="border-color:var(--accent-green);">
                <div class="package-header">
                    <div style="font-size:11px;font-weight:700;color:var(--accent-green);letter-spacing:1px;margin-bottom:5px;">🎁 PRESET GRATIS</div>
                    <h3 class="package-name" style="text-transform:capitalize;"><?= esc($item['nama_paket']) ?></h3>
                    <div class="package-price text-green">Gratis 100%</div>
                </div>
                <div class="package-video">
                    <?php if ($ext === 'mp4'): ?>
                    <video controls controlsList="nodownload" preload="none">
                        <source src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" type="video/mp4">
                    </video>
                    <?php else: ?>
                    <img src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>"
                         alt="<?= esc($item['nama_paket']) ?>"
                         loading="lazy"
                         style="width:100%;border-radius:12px;display:block;">
                    <?php endif; ?>
                </div>
                <ul class="package-features">
                    <?php
                    $fiturs   = array_filter(array_map('trim', explode(',', $item['fitur'])));
                    $hasFitur = !empty($fiturs);
                    foreach ($fiturs as $f): ?>
                    <li><?= esc($f) ?></li>
                    <?php endforeach;
                    if (!$hasFitur): ?>
                    <li>Preset Alight Motion</li>
                    <li>Syarat: Subscribe &amp; Follow</li>
                    <?php endif; ?>
                </ul>
                <button type="button" class="btn-primary w-100 text-center"
                        style="background:linear-gradient(135deg,#00e676,#00b359);color:#000;"
                        onclick="<?= $onClick ?>">
                    Dapatkan Preset
                </button>
            </div>
            <?php endforeach; endif; ?>

            <!-- Gratis hardcoded -->
            <?php
            $gratis_items = [
                ['file' => 'intro_key_brankey_preset.mp4',   'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/Pe0NgTS3gF-da01518947f33545'],
                ['file' => 'intro_key_bucin.mp4',            'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/qwH5NB5OxI-4eb6ccf3aceddb59'],
                ['file' => 'intro_key_celurit.mp4',          'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/kQZItEfyx5-f70b1ebcbd6be05a'],
                ['file' => 'intro_key_gigit.mp4',            'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/2S1JCQlfci-4387bf9fdf241bfd'],
                ['file' => 'intro_key_gigittt.mp4',          'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/AooaP7cT6a-96e1dc19397817af'],
                ['file' => 'intro_key_logo_nama.mp4',        'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/xU0nGyyGj2-bf52e1e532236ccc'],
                ['file' => 'intro_key_mirip_hans.mp4',       'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/SHh7cHMUXT-41fe8a65088b3a4a'],
                ['file' => 'intro_key_nama_gicitq.mp4',      'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/O0jpdZMlFO-fe0310d2019357aa'],
                ['file' => 'intro_key_nama_kece_banget.mp4', 'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/dY3MgIc9tm-e1c20cb63139bf52'],
                ['file' => 'intro_key_nama_meleleh.mp4',     'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/28lGFXbrzp-e960af9daa80f21c'],
                ['file' => 'intro_key_nama_petir.mp4',       'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/hfxbJmEOOL-52bd972e449dddfa'],
                ['file' => 'intro_key_teks_salto.mp4',       'link' => 'https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/BM7O9NBSVz-604d1ca6c01bcf04'],
            ];
            foreach ($gratis_items as $item):
                $name = str_replace('_', ' ', pathinfo($item['file'], PATHINFO_FILENAME)); ?>
            <div class="package-card glass-panel" style="border-color:var(--accent-green);">
                <div class="package-header">
                    <div style="font-size:11px;font-weight:700;color:var(--accent-green);letter-spacing:1px;margin-bottom:5px;">🎁 PRESET GRATIS</div>
                    <h3 class="package-name" style="text-transform:capitalize;"><?= esc($name) ?></h3>
                    <div class="package-price text-green">Gratis 100%</div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload" preload="none">
                        <source src="<?= base_url('videos/intro/' . rawurlencode($item['file'])) ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <li>Preset Alight Motion</li>
                    <li>Syarat: Subscribe &amp; Follow</li>
                </ul>
                <button type="button" class="btn-primary w-100 text-center"
                        style="background:linear-gradient(135deg,#00e676,#00b359);color:#000;"
                        onclick="unlockContent('preset','<?= esc($item['link']) ?>')">
                    Dapatkan Preset
                </button>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- END #katalog -->

<!-- ============================================================
     STATS SECTION
============================================================ -->
<div class="stats-container" data-aos="zoom-in" data-aos-duration="900">
    <div class="glass-panel" style="padding:40px;display:flex;flex-wrap:wrap;justify-content:space-around;gap:30px;text-align:center;">
        <div>
            <div style="font-size:3rem;font-weight:900;color:var(--accent-cyan);margin-bottom:5px;">
                <span class="counter" data-target="500">0</span>+
            </div>
            <div class="text-dim" style="font-size:13px;letter-spacing:2px;text-transform:uppercase;">Projek Selesai</div>
        </div>
        <div>
            <div style="font-size:3rem;font-weight:900;color:#a78bfa;margin-bottom:5px;">
                <span class="counter" data-target="50">0</span>+
            </div>
            <div class="text-dim" style="font-size:13px;letter-spacing:2px;text-transform:uppercase;">Preset Gratis</div>
        </div>
        <div>
            <div style="font-size:3rem;font-weight:900;color:var(--accent-green);margin-bottom:5px;">
                <span class="counter" data-target="100">0</span>%
            </div>
            <div class="text-dim" style="font-size:13px;letter-spacing:2px;text-transform:uppercase;">Klien Puas</div>
        </div>
    </div>
</div>

<!-- ============================================================
     CARA ORDER
============================================================ -->
<div data-aos="fade-up" style="max-width:1200px;margin:0 auto 80px auto;padding:0 20px;">
    <h2 class="section-title">Cara <span class="text-gradient">Order</span></h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:20px;text-align:center;">
        <?php
        $steps = [
            ['icon' => '🛒', 'title' => '1. Pilih Produk',   'desc' => 'Pilih jasa edit atau preset yang Anda butuhkan di katalog kami.'],
            ['icon' => '💬', 'title' => '2. Hubungi Admin',  'desc' => 'Klik "Order Sekarang" untuk terhubung langsung dengan Admin via WhatsApp.'],
            ['icon' => '💳', 'title' => '3. Pembayaran',     'desc' => 'Lakukan pembayaran melalui DANA, OVO, atau metode lain yang tersedia.'],
            ['icon' => '✨', 'title' => '4. Terima Hasil',   'desc' => 'Tunggu proses pengerjaan selesai dan file HD akan dikirim ke Anda!'],
        ];
        foreach ($steps as $step): ?>
        <div class="glass-panel" style="padding:28px 18px;">
            <div style="font-size:2.8rem;margin-bottom:14px;"><?= $step['icon'] ?></div>
            <h3 style="font-size:17px;color:#fff;margin-bottom:8px;font-weight:700;"><?= $step['title'] ?></h3>
            <p style="font-size:13px;color:#aaa;line-height:1.6;"><?= $step['desc'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- ============================================================
     TESTIMONI
============================================================ -->
<div data-aos="fade-up" style="max-width:1200px;margin:0 auto 80px auto;padding:0 20px;">
    <h2 class="section-title">Review <span class="text-gradient">Pelanggan</span></h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;">
        <?php
        $testimonials = [
            ['inisial' => 'R', 'color' => 'var(--accent-cyan)', 'textColor' => '#000',
             'nama' => 'Reza P.', 'role' => 'Order Jasa Edit Intro',
             'isi' => '"Wah gila intronya kece parah bang! Prosesnya cepet banget dan hasilnya memuaskan. Next order lagi pasti!"'],
            ['inisial' => 'S', 'color' => 'var(--accent-purple)', 'textColor' => '#fff',
             'nama' => 'Sinta W.', 'role' => 'Order AM Premium',
             'isi' => '"Preset AM-nya gampang dipake, ga ribet. Tinggal ganti foto langsung jadi jedag-jedug keren. Makasih admin!"'],
            ['inisial' => 'D', 'color' => 'var(--accent-green)', 'textColor' => '#000',
             'nama' => 'Dimas K.', 'role' => 'Order Jasa Edit Poster',
             'isi' => '"Adminnya ramah parah, minta revisi dikit langsung dikerjain saat itu juga. Terpercaya banget pokoknya."'],
        ];
        $borderColors = ['var(--accent-cyan)', 'var(--accent-purple)', 'var(--accent-green)'];
        foreach ($testimonials as $i => $t): ?>
        <div class="glass-panel" style="padding:25px;border-left:4px solid <?= $borderColors[$i] ?>;">
            <div style="color:#ffcc00;margin-bottom:10px;font-size:18px;">⭐⭐⭐⭐⭐</div>
            <p style="font-size:14px;color:#ddd;margin-bottom:15px;font-style:italic;line-height:1.65;"><?= $t['isi'] ?></p>
            <div class="d-flex align-center gap-10">
                <div style="width:40px;height:40px;border-radius:50%;background:<?= $t['color'] ?>;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:16px;color:<?= $t['textColor'] ?>;flex-shrink:0;">
                    <?= $t['inisial'] ?>
                </div>
                <div>
                    <div class="fw-bold" style="font-size:14px;"><?= $t['nama'] ?></div>
                    <div class="text-dim" style="font-size:11px;"><?= $t['role'] ?></div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- ============================================================
     FAQ
============================================================ -->
<div data-aos="fade-up" style="max-width:800px;margin:0 auto 80px auto;padding:0 20px;">
    <h2 class="section-title">Pertanyaan <span class="text-gradient">Umum</span></h2>
    <div style="display:flex;flex-direction:column;gap:12px;">
        <?php
        $faqs = [
            ['q' => 'Berapa lama proses pengerjaan Jasa Edit?',
             'a' => 'Normalnya pengerjaan memakan waktu 1x24 jam tergantung tingkat kesulitan dan antrean. Kami selalu mengusahakan proses tercepat untuk Anda!'],
            ['q' => 'Apakah ada garansi revisi?',
             'a' => 'Tentu saja! Kami memberikan garansi revisi wajar (minor) sampai Anda benar-benar puas dengan hasilnya.'],
            ['q' => 'Bagaimana cara ordernya?',
             'a' => 'Cukup klik tombol "Order Sekarang" pada produk yang Anda inginkan, Anda akan langsung diarahkan ke WhatsApp Admin untuk detail pembayaran dan pengiriman file.'],
        ];
        foreach ($faqs as $faq): ?>
        <div class="faq-item">
            <div class="faq-header">
                <?= esc($faq['q']) ?>
                <span class="faq-icon">▼</span>
            </div>
            <div class="faq-body"><?= esc($faq['a']) ?></div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- ============================================================
     SOSIAL MEDIA
============================================================ -->
<div class="text-center" style="margin-bottom:50px;padding:0 20px;">
    <h2 class="section-title">Ikuti <span class="text-gradient">Sosial Media</span> Kami</h2>
    <div class="d-flex" style="justify-content:center;gap:14px;flex-wrap:wrap;margin-top:20px;">
        <a href="https://youtube.com/@brankeynomeam?si=eFq8q-J85IEFULSm" target="_blank" rel="noopener"
           class="btn-primary" style="background:linear-gradient(135deg,#ff0000,#990000);color:#fff;">
            ▶ YouTube
        </a>
        <a href="https://tiktok.com/@brankeynomeam" target="_blank" rel="noopener"
           class="btn-primary" style="background:#111;border:1px solid #444;color:#fff;">
            🎵 TikTok
        </a>
        <a href="https://www.instagram.com/mazkey_7?igsh=MWVqaGUwc2VyN3VzZQ==" target="_blank" rel="noopener"
           class="btn-primary" style="background:linear-gradient(135deg,#833ab4,#fd1d1d,#fcb045);color:#fff;">
            📸 Instagram
        </a>
        <a href="https://whatsapp.com/channel/0029Vb6iytg47Xe447PCVp1C" target="_blank" rel="noopener"
           class="btn-primary btn-wa">
            💬 Saluran WhatsApp
        </a>
    </div>
</div>

<!-- ============================================================
     METODE PEMBAYARAN
============================================================ -->
<div class="text-center" style="margin-bottom:60px;padding:0 20px;">
    <p class="text-dim" style="font-size:13px;margin-bottom:14px;letter-spacing:2px;text-transform:uppercase;">
        Metode Pembayaran yang Diterima
    </p>
    <div class="d-flex" style="justify-content:center;gap:12px;flex-wrap:wrap;">
        <div class="glass-panel" style="padding:10px 22px;font-weight:700;border-radius:10px;">📱 E-Wallet</div>
        <div class="glass-panel" style="padding:10px 22px;font-weight:700;border-radius:10px;">🏦 Bank Transfer</div>
        <div class="glass-panel" style="padding:10px 22px;font-weight:700;border-radius:10px;">🔲 QRIS (All Payment)</div>
    </div>
</div>

<!-- ============================================================
     FOOTER CUSTOM (menggantikan footer di layout/main.php)
============================================================ -->
<footer style="background:rgba(8,8,14,0.96);border-top:1px solid rgba(0,229,255,0.15);padding:45px 20px;margin-top:0;">
    <h3 style="font-size:1.5rem;font-weight:900;color:#fff;margin-bottom:10px;">
        Brankey <span class="text-gradient">Store</span>
    </h3>
    <p class="text-muted" style="font-size:13px;max-width:480px;margin:0 auto 20px auto;line-height:1.7;">
        Platform terpercaya untuk jasa edit video, penyedia preset, dan produk digital premium. Tingkatkan kualitas konten Anda bersama kami.
    </p>
    <div class="d-flex" style="justify-content:center;gap:16px;margin-bottom:18px;flex-wrap:wrap;">
        <a href="#" style="color:var(--accent-cyan);font-size:13px;text-decoration:none;">Syarat &amp; Ketentuan</a>
        <span style="color:#444;">|</span>
        <a href="#" style="color:var(--accent-cyan);font-size:13px;text-decoration:none;">Kebijakan Garansi</a>
        <span style="color:#444;">|</span>
        <a href="https://wa.me/6281361751132" style="color:var(--accent-cyan);font-size:13px;text-decoration:none;">Hubungi Kami</a>
    </div>
    <div class="text-dim" style="font-size:12px;">&copy; <?= date('Y') ?> Brankey Store. All rights reserved.</div>
</footer>

<!-- FLOATING WA BUTTON -->
<a href="https://wa.me/6281361751132?text=Halo+Admin+Brankey+Store,+saya+mau+tanya+dulu..."
   target="_blank" rel="noopener"
   class="floating-wa"
   aria-label="Chat WhatsApp Admin">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964 1.003-3.588c-.608-1.065-.927-2.294-.927-3.533 0-3.921 3.19-7.111 7.112-7.111 3.92 0 7.109 3.19 7.11 7.111.001 3.921-3.189 7.111-7.11 7.111z"/>
    </svg>
</a>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- VanillaTilt JS — hanya untuk desktop -->
<script>
if (window.innerWidth >= 768) {
    var s = document.createElement('script');
    s.src = 'https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js';
    s.onload = function() {
        VanillaTilt.init(document.querySelectorAll('.package-card'), {
            max: 4, speed: 500, glare: true, 'max-glare': 0.15
        });
    };
    document.head.appendChild(s);
}
</script>

<script>
// ============================================================
// TAB NAVIGATION
// ============================================================
function showTab(tab, btn) {
    document.querySelectorAll('.tab-content').forEach(function(el) { el.classList.remove('active'); });
    document.querySelectorAll('.tab-btn').forEach(function(el) { el.classList.remove('active'); });
    document.getElementById('tab-' + tab).classList.add('active');
    if (btn) btn.classList.add('active');
}

// ============================================================
// SEARCH KATALOG
// ============================================================
document.getElementById('searchKatalog').addEventListener('input', function() {
    var filter      = this.value.toLowerCase().trim();
    var tabNav      = document.getElementById('tabNav');
    var tabContents = document.querySelectorAll('.tab-content');
    var allCards    = document.querySelectorAll('.package-card');

    if (filter === '') {
        tabNav.style.display = '';
        tabContents.forEach(function(el) { el.style.display = ''; });
        allCards.forEach(function(c) { c.style.display = ''; });
    } else {
        tabNav.style.display = 'none';
        tabContents.forEach(function(el) { el.style.display = 'block'; });
        allCards.forEach(function(c) {
            c.style.display = c.innerText.toLowerCase().includes(filter) ? '' : 'none';
        });
    }
}, { passive: true });

// ============================================================
// UNLOCK CONTENT — satu fungsi generik untuk preset & download
// type: 'preset' → buka link | 'download' → download file
// ============================================================
var _unlockYt = false;
var _unlockTt = false;
var _unlockType, _unlockUrl, _unlockFilename;

function unlockContent(type, url, filename) {
    _unlockYt       = false;
    _unlockTt       = false;
    _unlockType     = type;
    _unlockUrl      = url;
    _unlockFilename = filename || '';

    var isDownload = (type === 'download');
    var btnLabel   = isDownload ? '🔒 Unduh Video Sekarang' : '🔒 Ambil Preset Sekarang';
    var btnId      = 'btnUnlockFinal';

    Swal.fire({
        title: isDownload ? 'Buka Kunci Unduhan 🎁' : 'Buka Kunci Preset 🎁',
        html: `
            <p style="font-size:14px;margin-bottom:18px;color:#fff;">
                Wajib Follow &amp; Subscribe dulu untuk mendapatkan ${isDownload ? 'overlay' : 'preset'} ini ya!
            </p>
            <div style="display:flex;flex-direction:column;gap:10px;">
                <a href="https://youtube.com/@brankeynomeam?si=eFq8q-J85IEFULSm"
                   target="_blank" onclick="_checkUnlock('yt')"
                   style="display:flex;align-items:center;justify-content:center;gap:10px;padding:12px;border-radius:25px;background:#ff0000;color:#fff;font-weight:700;text-decoration:none;font-size:14px;">
                    ▶ SUBSCRIBE YOUTUBE ADMIN
                </a>
                <a href="https://tiktok.com/@brankeynomeam"
                   target="_blank" onclick="_checkUnlock('tt')"
                   style="display:flex;align-items:center;justify-content:center;gap:10px;padding:12px;border-radius:25px;background:#111;border:1px solid #444;color:#fff;font-weight:700;text-decoration:none;font-size:14px;">
                    🎵 FOLLOW TIKTOK ADMIN
                </a>
                <hr style="border-color:rgba(255,255,255,0.08);margin:4px 0;">
                <a href="${url}" ${isDownload ? 'download="' + (_unlockFilename || 'file') + '"' : 'target="_blank"'}
                   id="${btnId}"
                   style="display:flex;align-items:center;justify-content:center;gap:8px;padding:12px;border-radius:25px;background:#00e676;opacity:0.35;pointer-events:none;color:#000;font-weight:800;text-decoration:none;font-size:14px;transition:all 0.3s;">
                    ${btnLabel}
                </a>
            </div>
        `,
        showConfirmButton: false,
        showCloseButton: true,
        allowOutsideClick: false,
        background: '#13131e',
        color: '#fff'
    });
}

function _checkUnlock(type) {
    if (type === 'yt') _unlockYt = true;
    if (type === 'tt') _unlockTt = true;

    if (_unlockYt && _unlockTt) {
        var btn = document.getElementById('btnUnlockFinal');
        if (btn) {
            btn.style.opacity = '1';
            btn.style.pointerEvents = 'auto';
            btn.innerHTML = (_unlockType === 'download') ? '✅ Unduh Video Sekarang' : '✅ Ambil Preset Sekarang';
        }
    }
}

// ============================================================
// DOM READY
// ============================================================
document.addEventListener('DOMContentLoaded', function() {

    // AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({ once: true, offset: 80, duration: 700 });
    }

    // FAQ Accordion
    document.querySelectorAll('.faq-item').forEach(function(item) {
        item.querySelector('.faq-header').addEventListener('click', function() {
            var body = item.querySelector('.faq-body');
            var icon = item.querySelector('.faq-icon');
            var isOpen = !!body.style.maxHeight;

            // Tutup semua
            document.querySelectorAll('.faq-item').forEach(function(other) {
                other.querySelector('.faq-body').style.maxHeight = null;
                other.querySelector('.faq-body').style.padding = '0 20px';
                other.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
            });

            if (!isOpen) {
                body.style.maxHeight = (body.scrollHeight + 40) + 'px';
                body.style.padding   = '0 20px 20px 20px';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });

    // Counter Animasi
    var countersRan = false;
    var observer = new IntersectionObserver(function(entries) {
        if (entries[0].isIntersecting && !countersRan) {
            countersRan = true;
            observer.disconnect();
            document.querySelectorAll('.counter').forEach(function(counter) {
                var target = +counter.getAttribute('data-target');
                var step   = Math.ceil(target / 80);
                var timer  = setInterval(function() {
                    var current = +counter.innerText;
                    if (current < target) {
                        counter.innerText = Math.min(current + step, target);
                    } else {
                        clearInterval(timer);
                    }
                }, 18);
            });
        }
    }, { threshold: 0.4 });

    var statsEl = document.querySelector('.stats-container');
    if (statsEl) observer.observe(statsEl);

    // FOMO Toast
    var toast = document.getElementById('fomo-toast');
    if (toast) {
        var names    = ['Andi', 'Budi', 'Rizky', 'Siti', 'Dimas', 'Ayu', 'Fajar', 'Kevin', 'Nisa'];
        var cities   = ['Jakarta', 'Bandung', 'Surabaya', 'Medan', 'Bali', 'Yogyakarta', 'Semarang', 'Makassar'];
        var products = ['Jasa Edit Intro', 'Preset AM Premium', 'Jasa Edit Logo', 'Jasa Edit Poster', 'Preset CC/Efek'];
        var times    = ['Beberapa detik lalu', '1 menit lalu', '2 menit lalu', 'Baru saja'];

        function rand(arr) { return arr[Math.floor(Math.random() * arr.length)]; }

        function showFomo() {
            document.getElementById('fomo-text').innerHTML =
                '<strong>' + rand(names) + '</strong> dari ' + rand(cities) +
                ' memesan <strong>' + rand(products) + '</strong>.';
            document.getElementById('fomo-time').innerText = rand(times);
            toast.style.left = '20px';
            setTimeout(function() { toast.style.left = '-380px'; }, 5000);
        }

        setTimeout(function() {
            showFomo();
            setInterval(showFomo, Math.floor(Math.random() * 18000) + 14000);
        }, 3000);
    }

});
</script>
<?= $this->endSection() ?>
