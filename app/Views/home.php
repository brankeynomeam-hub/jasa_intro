<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="hero" data-aos="fade-down" data-aos-duration="1000">
    <h1>price list <span class="text-gradient">Produk digital</span><br>Brankey Store</h1>
    <p>Tingkatkan kualitas video kamu dengan koleksi Intro, Overlay, dan CC/Efek Premium. Bisa dipakai di semua jenis video!</p>
    <a href="#katalog" class="btn-primary">Lihat Katalog</a>
</div>

<!-- MARQUEE TEXT -->
<div style="width: 100%; overflow: hidden; background: rgba(124, 58, 237, 0.1); border-top: 1px solid rgba(124, 58, 237, 0.3); border-bottom: 1px solid rgba(124, 58, 237, 0.3); padding: 10px 0; margin-bottom: 40px; white-space: nowrap; box-sizing: border-box;">
    <div style="display: inline-block; animation: scroll-left 20s linear infinite; color: #00e5ff; font-weight: 700; font-size: 14px; letter-spacing: 2px; padding-left: 100%;">
        🔥 PROSES CEPAT &nbsp;&bull;&nbsp; 🔒 100% AMAN &nbsp;&bull;&nbsp; 💎 KUALITAS HD &nbsp;&bull;&nbsp; 🎨 BEBAS REVISI &nbsp;&bull;&nbsp; 🚀 PELAYANAN RAMAH &nbsp;&bull;&nbsp; 🔥 PROSES CEPAT &nbsp;&bull;&nbsp; 🔒 100% AMAN &nbsp;&bull;&nbsp; 💎 KUALITAS HD &nbsp;&bull;&nbsp; 🎨 BEBAS REVISI &nbsp;&bull;&nbsp; 🚀 PELAYANAN RAMAH
    </div>
    <style>
        @keyframes scroll-left {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-100%); }
        }
    </style>
</div>

<div id="katalog" class="catalog-container" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="section-title">Katalog <span class="text-gradient">Produk</span></h2>

    <!-- SEARCH BAR -->
    <div style="max-width: 500px; margin: 0 auto 30px auto; position: relative;">
        <input type="text" id="searchKatalog" placeholder="Cari produk (intro, cc, preset...)" style="width: 100%; padding: 14px 20px 14px 45px; border-radius: 50px; border: 1px solid rgba(0, 229, 255, 0.3); background: rgba(0,0,0,0.4); color: #fff; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; transition: all 0.3s;" onfocus="this.style.borderColor='#00e5ff'; this.style.boxShadow='0 0 15px rgba(0, 229, 255, 0.2)';" onblur="this.style.borderColor='rgba(0, 229, 255, 0.3)'; this.style.boxShadow='none';">
        <span style="position: absolute; left: 18px; top: 50%; transform: translateY(-50%); font-size: 16px;">🔍</span>
    </div>

    <!-- TAB NAVIGATION -->
    <div class="tab-nav">
        <button class="tab-btn active" onclick="showTab('intro')">🎬 Intro</button>
        <button class="tab-btn" onclick="showTab('transisi')">🎬 Overlay Gratis</button>
        <button class="tab-btn" onclick="showTab('cc')">🎨 CC / Efek</button>
        <button class="tab-btn" onclick="showTab('am')">📱 AM Premium</button>
        <button class="tab-btn" onclick="showTab('watermark')">💧 Watermark</button>
        <button class="tab-btn" onclick="showTab('gratis')" style="background: linear-gradient(135deg, rgba(0, 229, 255, 0.1), rgba(124, 58, 237, 0.1)); border-color: var(--primary);">🎁 Gratis</button>
    </div>

    <!-- TAB: INTRO -->
    <div id="tab-intro" class="tab-content active">
        <div class="grid">
        



            <!-- JASA EDIT - SEMUA LAYANAN -->
            <div class="package-card glass-panel" style="border-color: #cc0000; grid-column: 1/-1; background: linear-gradient(135deg, rgba(30,0,0,0.9), rgba(15,15,15,0.98)); position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: radial-gradient(ellipse at top, rgba(200,0,0,0.15) 0%, transparent 60%); pointer-events: none;"></div>

                <!-- Header Label -->
                <div style="text-align: center; margin-bottom: 20px;">
                    <div style="font-size: 11px; font-weight: 700; letter-spacing: 3px; color: #ff4444; text-transform: uppercase; margin-bottom: 8px;">⚔️ Keymajor • Profesional & Terpercaya</div>
                    <h3 style="font-size: 2rem; font-weight: 900; color: #fff; margin-bottom: 4px;">JASA <span style="color: #ff2222;">EDIT</span></h3>
                    <div style="font-size: 12px; color: #aaa; letter-spacing: 3px;">CEPAT &bull; BERKUALITAS &bull; AMAN &bull; TERPERCAYA</div>
                </div>

                <!-- Poster Image -->
                <div style="margin-bottom: 25px; border-radius: 14px; overflow: hidden; border: 1px solid rgba(255,0,0,0.2);">
                    <img src="<?= base_url('imagess/poster%20jasa%20edit.png') ?>" alt="Jasa Edit Keymajor" style="width: 100%; display: block;">
                </div>

                <!-- Layanan Grid -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 15px; margin-bottom: 25px;">

                    <!-- Intro Private -->
                    <div style="background: rgba(255,0,0,0.08); border: 1px solid rgba(255,68,68,0.4); border-radius: 14px; padding: 18px 12px; text-align: center;">
                        <div style="font-size: 2rem; margin-bottom: 8px;">🎬</div>
                        <div style="font-weight: 800; font-size: 14px; color: #fff; margin-bottom: 4px;">INTRO PRIVATE</div>
                        <div style="font-size: 11px; color: #aaa; margin-bottom: 10px;">Mulai dari</div>
                        <div style="font-size: 1.5rem; font-weight: 900; color: #ff4444;">35.000</div>
                        <a href="<?= base_url('order?paket=Jasa+Edit+Intro+Private&harga=35000') ?>" class="btn-primary" style="display: block; margin-top: 12px; padding: 8px; font-size: 12px; background: linear-gradient(135deg, #cc0000, #660000);">Order</a>
                    </div>

                    <!-- Poster -->
                    <div style="background: rgba(255,0,0,0.08); border: 1px solid rgba(255,68,68,0.4); border-radius: 14px; padding: 18px 12px; text-align: center;">
                        <div style="font-size: 2rem; margin-bottom: 8px;">🖼️</div>
                        <div style="font-weight: 800; font-size: 14px; color: #fff; margin-bottom: 4px;">POSTER</div>
                        <div style="font-size: 11px; color: #aaa; margin-bottom: 10px;">Mulai dari</div>
                        <div style="font-size: 1.5rem; font-weight: 900; color: #ff4444;">15.000</div>
                        <a href="<?= base_url('order?paket=Jasa+Edit+Poster&harga=15000') ?>" class="btn-primary" style="display: block; margin-top: 12px; padding: 8px; font-size: 12px; background: linear-gradient(135deg, #cc0000, #660000);">Order</a>
                    </div>

                    <!-- Logo -->
                    <div style="background: rgba(255,0,0,0.08); border: 1px solid rgba(255,68,68,0.4); border-radius: 14px; padding: 18px 12px; text-align: center;">
                        <div style="font-size: 2rem; margin-bottom: 8px;">⚡</div>
                        <div style="font-weight: 800; font-size: 14px; color: #fff; margin-bottom: 4px;">LOGO</div>
                        <div style="font-size: 11px; color: #aaa; margin-bottom: 10px;">Mulai dari</div>
                        <div style="font-size: 1.5rem; font-weight: 900; color: #ff4444;">10.000</div>
                        <a href="<?= base_url('order?paket=Jasa+Edit+Logo&harga=10000') ?>" class="btn-primary" style="display: block; margin-top: 12px; padding: 8px; font-size: 12px; background: linear-gradient(135deg, #cc0000, #660000);">Order</a>
                    </div>

                    <!-- Jedag Jedug -->
                    <div style="background: rgba(255,0,0,0.08); border: 1px solid rgba(255,68,68,0.4); border-radius: 14px; padding: 18px 12px; text-align: center;">
                        <div style="font-size: 2rem; margin-bottom: 8px;">🎵</div>
                        <div style="font-weight: 800; font-size: 14px; color: #fff; margin-bottom: 4px;">JEDAG JEDUG</div>
                        <div style="font-size: 11px; color: #aaa; margin-bottom: 10px;">Mulai dari</div>
                        <div style="font-size: 1.5rem; font-weight: 900; color: #ff4444;">7.000</div>
                        <a href="<?= base_url('order?paket=Jasa+Edit+Jedag+Jedug&harga=7000') ?>" class="btn-primary" style="display: block; margin-top: 12px; padding: 8px; font-size: 12px; background: linear-gradient(135deg, #cc0000, #660000);">Order</a>
                    </div>

                    <!-- WM Private -->
                    <div style="background: rgba(255,0,0,0.08); border: 1px solid rgba(255,68,68,0.4); border-radius: 14px; padding: 18px 12px; text-align: center;">
                        <div style="font-size: 2rem; margin-bottom: 8px;">💧</div>
                        <div style="font-weight: 800; font-size: 14px; color: #fff; margin-bottom: 4px;">WM PRIVATE</div>
                        <div style="font-size: 11px; color: #aaa; margin-bottom: 10px;">Mulai dari</div>
                        <div style="font-size: 1.5rem; font-weight: 900; color: #ff4444;">15.000</div>
                        <a href="<?= base_url('order?paket=Jasa+Edit+Watermark+Private&harga=15000') ?>" class="btn-primary" style="display: block; margin-top: 12px; padding: 8px; font-size: 12px; background: linear-gradient(135deg, #cc0000, #660000);">Order</a>
                    </div>

                </div>

                <!-- Badges -->
                <div style="display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                    <div style="background: rgba(255,0,0,0.1); border: 1px solid #ff4444; border-radius: 50px; padding: 6px 16px; font-size: 12px; font-weight: 700; color: #ff4444;">🔒 100% PRIVATE</div>
                    <div style="background: rgba(255,200,0,0.1); border: 1px solid #ffcc00; border-radius: 50px; padding: 6px 16px; font-size: 12px; font-weight: 700; color: #ffcc00;">⚡ PROSES CEPAT</div>
                    <div style="background: rgba(0,200,100,0.1); border: 1px solid #00e676; border-radius: 50px; padding: 6px 16px; font-size: 12px; font-weight: 700; color: #00e676;">✅ GARANSI REVISI</div>
                    <div style="background: rgba(0,229,255,0.1); border: 1px solid #00e5ff; border-radius: 50px; padding: 6px 16px; font-size: 12px; font-weight: 700; color: #00e5ff;">⭐ KUALITAS TERBAIK</div>
                </div>
            </div>

            <!-- DYNAMIC INTRO FROM DATABASE -->
            <?php if(!empty($intros)): foreach($intros as $item): ?>
            <div class="package-card glass-panel" style="border-color: #00e5ff;">
                <div class="package-header">
                    <h3 class="package-name"><?= esc($item['nama_paket']) ?></h3>
                    <div class="package-price"><?= $item['harga'] > 0 ? 'Rp ' . number_format($item['harga'], 0, ',', '.') : 'Gratis' ?></div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload">
                        <source src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <?php 
                        $fitur = explode(',', $item['fitur']);
                        foreach($fitur as $f):
                            if(trim($f) !== ''):
                    ?>
                    <li><?= esc(trim($f)) ?></li>
                    <?php endif; endforeach; ?>
                </ul>
                <a href="<?= base_url('order?paket='.urlencode($item['nama_paket']).'&harga='.$item['harga']) ?>" class="btn-primary" style="width: 100%; text-align: center;">Order Sekarang</a>
            </div>
            <?php endforeach; endif; ?>



            <!-- Intro 1 -->
            <div class="package-card glass-panel">
                <div class="package-header">
                    <h3 class="package-name">Intro (KEY) Copy 4V</h3>
                    <div class="package-price">Rp 35.000</div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload">
                        <source src="<?= base_url('videos/intro_key_copy.mp4') ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <li>Dapat Preset Projek</li>
                    <li>Cocok Semua Macam Video</li>
                </ul>
                <a href="<?= base_url('order?paket=Intro+(KEY)+Copy+4V&harga=35000') ?>" class="btn-primary" style="width: 100%; text-align: center;">Order Sekarang</a>
            </div>

            <!-- Intro 2 -->
            <div class="package-card glass-panel" style="border-color: var(--primary);">
                <div class="package-header">
                    <h3 class="package-name text-gradient">Intro (KEY) Nama V10</h3>
                    <div class="package-price">Rp 35.000</div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload">
                        <source src="<?= base_url('videos/intro_key_nama.mp4') ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <li>Dapat Preset Projek</li>
                    <li>Cocok Semua Macam Video</li>
                </ul>
                <a href="<?= base_url('order?paket=Intro+(KEY)+Nama+V10&harga=35000') ?>" class="btn-primary" style="width: 100%; text-align: center;">Order Sekarang</a>
            </div>

            <!-- Intro 3 -->
            <div class="package-card glass-panel">
                <div class="package-header">
                    <h3 class="package-name">Logo (KEY) Detak Jantung</h3>
                    <div class="package-price">Rp 25.000</div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload">
                        <source src="<?= base_url('videos/logo_key_detak.mp4') ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <li>Dapat Preset Projek</li>
                    <li>Cocok Semua Macam Video</li>
                </ul>
                <a href="<?= base_url('order?paket=Logo+(KEY)+Detak+Jantung&harga=25000') ?>" class="btn-primary" style="width: 100%; text-align: center;">Order Sekarang</a>
            </div>

            <!-- Intro 4 -->
            <div class="package-card glass-panel">
                <div class="package-header">
                    <h3 class="package-name">Intro (KEY) Nama 2 Huruf</h3>
                    <div class="package-price">Rp 35.000</div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload">
                        <source src="<?= base_url('videos/intro_key_2huruf.mp4') ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <li>Dapat Preset Projek</li>
                    <li>Cocok Semua Macam Video</li>
                </ul>
                <a href="<?= base_url('order?paket=Intro+(KEY)+Nama+2+Huruf&harga=35000') ?>" class="btn-primary" style="width: 100%; text-align: center;">Order Sekarang</a>
            </div>

        </div>
    </div>

    <!-- TAB: OVERLAY GRATIS -->
    <div id="tab-transisi" class="tab-content">
        <div style="text-align: center; margin-bottom: 30px;">
            <div style="display: inline-block; background: linear-gradient(135deg, rgba(124,58,237,0.15), rgba(0,229,255,0.15)); border: 1px solid rgba(124,58,237,0.4); border-radius: 50px; padding: 6px 20px; font-size: 11px; font-weight: 700; color: #7c3aed; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 12px;">🎬 Free Assets</div>
            <h3 style="font-size: 1.8rem; font-weight: 800; color: #fff; margin: 0;">Video <span style="background: linear-gradient(135deg, #7c3aed, #00e5ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Overlay Gratis</span></h3>
            <p style="color: #aaa; font-size: 14px; margin-top: 8px;">Overlay video keren buat konten kamu — 100% Gratis! Wajib follow dulu ya 😊</p>
        </div>
        <div class="grid">
            
            <!-- DYNAMIC OVERLAYS FROM DATABASE -->
            <?php if(!empty($overlays)): foreach($overlays as $item): 
                $fileUrl = base_url('videos/uploads/' . rawurlencode($item['file_media']));
                $onClick = "unlockDownload('{$fileUrl}', '{$item['file_media']}')";
            ?>
            <div class="package-card glass-panel" style="border-color: #7c3aed;">
                <div class="package-header">
                    <div style="font-size: 11px; font-weight: 700; color: #7c3aed; letter-spacing: 1px; margin-bottom: 5px;">🎬 OVERLAY GRATIS</div>
                    <h3 class="package-name" style="text-transform: capitalize;"><?= esc($item['nama_paket']) ?></h3>
                    <div class="package-price" style="color: #7c3aed;">Gratis 100%</div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload">
                        <source src="<?= $fileUrl ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <?php 
                        $fitur = explode(',', $item['fitur']);
                        foreach($fitur as $f):
                            if(trim($f) !== ''):
                    ?>
                    <li><?= esc(trim($f)) ?></li>
                    <?php endif; endforeach; ?>
                </ul>
                <button type="button" class="btn-primary" style="width: 100%; text-align: center; background: linear-gradient(135deg, #7c3aed, #5b21b6);" onclick="<?= $onClick ?>">
                    Dapatkan Overlay
                </button>
            </div>
            <?php endforeach; endif; ?>

        <?php
        $overlay_items = [
            ["file" => "overlay glit rusak.mp4"],
            ["file" => "overlay bintang 2.mp4"],
            ["file" => "overlay bintang.mp4"],
            ["file" => "overlay dentuman asap.mp4"],
            ["file" => "overlay dentuman titik.mp4"],
            ["file" => "overlay dentuman.mp4"],
            ["file" => "overlay garisan.mp4"],
            ["file" => "overlay glit angka.mp4"],
            ["file" => "overlay glit merah.mp4"],
            ["file" => "overlay glitch.mp4"],
            ["file" => "overlay gulungan.mp4"],
            ["file" => "overlay kaca pecah.mp4"],
            ["file" => "overlay love.mp4"],
            ["file" => "overlay percikan api.mp4"],
            ["file" => "overlay percikan.mp4"],
            ["file" => "overlay salju 2.mp4"],
            ["file" => "overlay salju blur.mp4"],
            ["file" => "overlay salju kabut.mp4"],
            ["file" => "overlay salju orenan.mp4"],
            ["file" => "overlay salju zoom.mp4"],
            ["file" => "overlay salju.mp4"],
        ];

        if (empty($overlay_items)): ?>
            <div class="package-card glass-panel" style="grid-column: 1/-1; text-align: center; padding: 60px 20px;">
                <div style="font-size: 4rem; margin-bottom: 15px;">🎬</div>
                <h3 class="package-name" style="margin-bottom: 10px;">Video Overlay Segera Hadir!</h3>
                <p style="color: var(--text-muted);">Koleksi overlay gratis sedang disiapkan. Pantau terus ya!</p>
            </div>
        <?php else: ?>
            <?php foreach ($overlay_items as $item):
                $name = pathinfo($item['file'], PATHINFO_FILENAME);
                $fileUrl = base_url('videos/overlay/' . rawurlencode($item['file']));
                $onClick = "unlockDownload('{$fileUrl}', '{$item['file']}')";
            ?>
            <div class="package-card glass-panel" style="border-color: #7c3aed;">
                <div class="package-header">
                    <div style="font-size: 11px; font-weight: 700; color: #7c3aed; letter-spacing: 1px; margin-bottom: 5px;">🎬 OVERLAY GRATIS</div>
                    <h3 class="package-name" style="text-transform: capitalize;"><?= $name ?></h3>
                    <div class="package-price" style="color: #7c3aed;">Gratis 100%</div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload">
                        <source src="<?= base_url('videos/overlay/' . rawurlencode($item['file'])) ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <li>Video Overlay Gratis</li>
                    <li>Syarat: Subscribe &amp; Follow</li>
                </ul>
                <button type="button" class="btn-primary" style="width: 100%; text-align: center; background: linear-gradient(135deg, #7c3aed, #5b21b6);" onclick="<?= $onClick ?>">
                    Dapatkan Overlay
                </button>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>

    <!-- TAB: CC / EFEK -->
    <div id="tab-cc" class="tab-content">
        <div class="grid">
            <!-- DYNAMIC CC FROM DATABASE -->
            <?php if(!empty($ccs)): foreach($ccs as $item): 
                $ext = pathinfo($item['file_media'], PATHINFO_EXTENSION);
            ?>
            <div class="package-card glass-panel" style="border-color: #00e5ff;">
                <div class="package-header">
                    <h3 class="package-name"><?= esc($item['nama_paket']) ?></h3>
                    <div class="package-price"><?= $item['harga'] > 0 ? 'Rp ' . number_format($item['harga'], 0, ',', '.') : 'Gratis' ?></div>
                </div>
                <div class="package-video" style="aspect-ratio: auto; margin-bottom: 20px; background: transparent;">
                    <?php if (strtolower($ext) === 'mp4'): ?>
                    <video controls controlsList="nodownload" style="width: 100%; border-radius: 12px; display: block;">
                        <source src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" type="video/mp4">
                    </video>
                    <?php else: ?>
                    <img src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" alt="<?= esc($item['nama_paket']) ?>" style="width: 100%; border-radius: 12px; display: block;">
                    <?php endif; ?>
                </div>
                <ul class="package-features">
                    <?php 
                        $fitur = explode(',', $item['fitur']);
                        foreach($fitur as $f):
                            if(trim($f) !== ''):
                    ?>
                    <li><?= esc(trim($f)) ?></li>
                    <?php endif; endforeach; ?>
                </ul>
                <a href="<?= base_url('order?paket='.urlencode($item['nama_paket']).'&harga='.$item['harga']) ?>" class="btn-primary" style="width: 100%; text-align: center;">Order Sekarang</a>
            </div>
            <?php endforeach; endif; ?>

            <?php 
            $cc_effects = [
                "cc (KEY) biru biasa.jpeg",
                "cc (KEY) biru kuning.jpeg",
                "cc (KEY) biru node.jpeg",
                "cc (KEY) kuning ke putihan.jpeg",
                "cc (KEY) kuning node.jpeg",
                "cc (KEY) kuning standar.jpeg",
                "cc (KEY) pelangi.jpeg",
                "Cc (KEY) polisi.mp4",
                "cc (KEY) putih glow.jpeg",
                "cc (KEY) putih node.jpeg",
                "cc (KEY) putih pertajam glow.jpeg"
            ];
            foreach ($cc_effects as $efx): 
                $name = pathinfo($efx, PATHINFO_FILENAME);
                $ext = pathinfo($efx, PATHINFO_EXTENSION);
            ?>
            <div class="package-card glass-panel">
                <div class="package-header">
                    <h3 class="package-name" style="text-transform: capitalize;"><?= $name ?></h3>
                    <div class="package-price">Rp 12.000</div>
                </div>
                <div class="package-video" style="aspect-ratio: auto; margin-bottom: 20px; background: transparent;">
                    <?php if (strtolower($ext) === 'mp4'): ?>
                    <video controls controlsList="nodownload" style="width: 100%; border-radius: 12px; display: block;">
                        <source src="<?= base_url('imagess/' . rawurlencode($efx)) ?>" type="video/mp4">
                    </video>
                    <?php else: ?>
                    <img src="<?= base_url('imagess/' . rawurlencode($efx)) ?>" alt="<?= $name ?>" style="width: 100%; border-radius: 12px; display: block;">
                    <?php endif; ?>
                </div>
                <ul class="package-features">
                    <li>Free Overlay</li>
                    <li>Settingan Node Glow</li>
                    <li>Preset</li>
                </ul>
                <a href="<?= base_url('order?paket='.urlencode($name).'&harga=12000') ?>" class="btn-primary" style="width: 100%; text-align: center;">Order Sekarang</a>
            </div>
            <?php endforeach; ?>

        </div>
    </div>

    <!-- TAB: AM PREMIUM -->
    <div id="tab-am" class="tab-content">
        <div class="grid">

            <!-- AM Premium Card -->
            <div class="package-card glass-panel" style="border-color: var(--primary);">
                <div class="package-header">
                    <h3 class="package-name text-gradient">Alight Motion Pro</h3>
                    <div class="package-price">Rp 20.000 <span style="font-size:14px;color:var(--text-muted)">/tahun</span></div>
                </div>
                <div style="margin: 20px 0; border-radius: 12px; overflow: hidden;">
                    <img src="<?= base_url('images/poster%20alight%20motion%20pro.png') ?>" alt="Alight Motion Pro" style="width: 100%; display: block; border-radius: 12px;">
                </div>
                <ul class="package-features">
                    <li>Alight Motion Premium (1 Tahun)</li>
                    <li>Tanpa Watermark</li>
                    <li>Semua Efek Terbuka</li>
                    <li>Update & Support Aman</li>
                </ul>
                <a href="https://wa.me/6285185238351?text=mau+order+am+prem+Brankey" target="_blank" class="btn-primary" style="width: 100%; text-align: center;">Order via WhatsApp</a>
            </div>

        </div>
    </div>

    <!-- TAB: WATERMARK -->
    <div id="tab-watermark" class="tab-content">
        <div class="grid">
            <!-- DYNAMIC WATERMARK FROM DATABASE -->
            <?php if(!empty($watermarks)): foreach($watermarks as $item): 
                $ext = pathinfo($item['file_media'], PATHINFO_EXTENSION);
            ?>
            <div class="package-card glass-panel" style="border-color: #00e5ff;">
                <div class="package-header">
                    <h3 class="package-name"><?= esc($item['nama_paket']) ?></h3>
                    <div class="package-price"><?= $item['harga'] > 0 ? 'Rp ' . number_format($item['harga'], 0, ',', '.') : 'Gratis' ?></div>
                </div>
                <div class="package-video" style="aspect-ratio: auto; margin-bottom: 20px; background: transparent;">
                    <?php if (strtolower($ext) === 'mp4'): ?>
                    <video controls controlsList="nodownload" style="width: 100%; border-radius: 12px; display: block;">
                        <source src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" type="video/mp4">
                    </video>
                    <?php else: ?>
                    <img src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" alt="<?= esc($item['nama_paket']) ?>" style="width: 100%; border-radius: 12px; display: block;">
                    <?php endif; ?>
                </div>
                <ul class="package-features">
                    <?php 
                        $fitur = explode(',', $item['fitur']);
                        foreach($fitur as $f):
                            if(trim($f) !== ''):
                    ?>
                    <li><?= esc(trim($f)) ?></li>
                    <?php endif; endforeach; ?>
                </ul>
                <a href="<?= base_url('order?paket='.urlencode($item['nama_paket']).'&harga='.$item['harga']) ?>" class="btn-primary" style="width: 100%; text-align: center;">Order Sekarang</a>
            </div>
            <?php endforeach; endif; ?>

            <?php 
            $watermarks = [
                "6e41f769bc9ae0080565945de74323a2.jpg", "39fd65db7e00ad2cc24e52658afa2147.jpg",
                "937d73a6a8cf959eb758703af5de63bd.jpg", "041793e3b48acd785af7766f6995619e.jpg",
                "108334d42aeaff4c753dbfde3ff12178.jpg", "c86aeb322fb53bb0fe7f3957ca57b805.jpg",
                "d0e676693bb42135b639be5c34acfb49.jpg", "d5c337a198051eb3035f3cafaf52fcec.jpg",
                "dfc688d1847f13a93e3b0a5941fae289.jpg", "e01f0fa3c9d31a59378ae7d31be986f1.jpg",
                "ee4351ed9329a688f18c06002405717d.jpg"
            ];
            $i = 1;
            foreach ($watermarks as $wm): ?>
            <!-- Watermark Card <?= $i ?> -->
            <div class="package-card glass-panel">
                <div class="package-header">
                    <h3 class="package-name">Watermark <?= $i ?></h3>
                    <div class="package-price">Rp 12.000</div>
                </div>
                <div class="package-video" style="aspect-ratio: auto; margin-bottom: 20px; background: transparent;">
                    <img src="<?= base_url('images/watermarks/' . $wm) ?>" alt="Contoh Watermark <?= $i ?>" style="width: 100%; border-radius: 12px; display: block;">
                </div>
                <ul class="package-features">
                    <li>Desain Keren & Premium</li>
                    <li>Transparan (PNG) HD</li>
                    <li>Siap Tempel di Video</li>
                </ul>
                <a href="<?= base_url('order?paket=Watermark+'.$i.'&harga=12000&gambar='.$wm) ?>" class="btn-primary" style="width: 100%; text-align: center;">Order Sekarang</a>
            </div>
            <?php 
            $i++;
            endforeach; ?>

        </div>
    </div>

    <!-- TAB: GRATIS -->
    <div id="tab-gratis" class="tab-content">
        <div class="grid">
            <!-- DYNAMIC GRATIS FROM DATABASE -->
            <?php if(!empty($gratis)): foreach($gratis as $item): 
                $ext = pathinfo($item['file_media'], PATHINFO_EXTENSION);
                $onClick = !empty($item['link']) 
                    ? "unlockPreset('".esc($item['link'])."')" 
                    : "Swal.fire('Oops!', 'Link preset belum ditambahkan.', 'info')";
            ?>
            <div class="package-card glass-panel" style="border-color: #00e676;">
                <div class="package-header">
                    <div style="font-size: 11px; font-weight: 700; color: #00e676; letter-spacing: 1px; margin-bottom: 5px;">🎁 PRESET GRATIS</div>
                    <h3 class="package-name" style="text-transform: capitalize;"><?= esc($item['nama_paket']) ?></h3>
                    <div class="package-price" style="color: #00e676;">Gratis 100%</div>
                </div>
                <div class="package-video">
                    <?php if (strtolower($ext) === 'mp4'): ?>
                    <video controls controlsList="nodownload">
                        <source src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" type="video/mp4">
                    </video>
                    <?php else: ?>
                    <img src="<?= base_url('videos/uploads/' . esc($item['file_media'])) ?>" alt="<?= esc($item['nama_paket']) ?>" style="width: 100%; border-radius: 12px; display: block;">
                    <?php endif; ?>
                </div>
                <ul class="package-features">
                    <?php 
                        $fitur = explode(',', $item['fitur']);
                        $hasFitur = false;
                        foreach($fitur as $f):
                            if(trim($f) !== ''):
                                $hasFitur = true;
                    ?>
                    <li><?= esc(trim($f)) ?></li>
                    <?php endif; endforeach; 
                        if(!$hasFitur):
                    ?>
                    <li>Preset Alight Motion</li>
                    <li>Syarat: Subscribe & Follow</li>
                    <?php endif; ?>
                </ul>
                <button type="button" class="btn-primary" style="width: 100%; text-align: center; background: linear-gradient(135deg, #00e676, #00b359);" onclick="<?= $onClick ?>">
                    Dapatkan Preset
                </button>
            </div>
            <?php endforeach; endif; ?>

            <?php
            $gratis_items = [
                ["file" => "intro (KEY) brankey preset.mp4", "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/Pe0NgTS3gF-da01518947f33545"],
                ["file" => "intro (KEY) bucin.mp4",          "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/qwH5NB5OxI-4eb6ccf3aceddb59"],
                ["file" => "intro (KEY) celurit.mp4",        "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/kQZItEfyx5-f70b1ebcbd6be05a"],
                ["file" => "intro (KEY) GIGit.mp4",          "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/2S1JCQlfci-4387bf9fdf241bfd"],
                ["file" => "intro (KEY) gigittt.mp4",        "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/AooaP7cT6a-96e1dc19397817af"],
                ["file" => "intro (KEY) logo nama.mp4",      "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/xU0nGyyGj2-bf52e1e532236ccc"],
                ["file" => "intro (KEY) mirip hans.mp4",     "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/SHh7cHMUXT-41fe8a65088b3a4a"],
                ["file" => "intro (KEY) nama gicitq.mp4",    "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/O0jpdZMlFO-fe0310d2019357aa"],
                ["file" => "intro (KEY) nama kece banget.mp4","link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/dY3MgIc9tm-e1c20cb63139bf52"],
                ["file" => "intro (KEY) nama meleleh.mp4",   "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/28lGFXbrzp-e960af9daa80f21c"],
                ["file" => "intro (KEY) nama petir.mp4",     "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/hfxbJmEOOL-52bd972e449dddfa"],
                ["file" => "intro (KEY) teks salto.mp4",     "link" => "https://alightcreative.com/am/share/u/bLSav6xuWldULl49VdR2QdB1X6P2/p/BM7O9NBSVz-604d1ca6c01bcf04"],
            ];

            foreach ($gratis_items as $item):
                $name = pathinfo($item['file'], PATHINFO_FILENAME);
                $onClick = $item['link'] !== '#' 
                    ? "unlockPreset('{$item['link']}')" 
                    : "Swal.fire('Oops!', 'Link preset untuk video ini belum ditambahkan oleh admin.', 'info')";
            ?>
            <div class="package-card glass-panel" style="border-color: #00e676;">
                <div class="package-header">
                    <div style="font-size: 11px; font-weight: 700; color: #00e676; letter-spacing: 1px; margin-bottom: 5px;">🎁 PRESET GRATIS</div>
                    <h3 class="package-name" style="text-transform: capitalize;"><?= $name ?></h3>
                    <div class="package-price" style="color: #00e676;">Gratis 100%</div>
                </div>
                <div class="package-video">
                    <video controls controlsList="nodownload">
                        <source src="<?= base_url('videos/' . rawurlencode($item['file'])) ?>" type="video/mp4">
                    </video>
                </div>
                <ul class="package-features">
                    <li>Preset Alight Motion</li>
                    <li>Syarat: Subscribe & Follow</li>
                </ul>
                <button type="button" class="btn-primary" style="width: 100%; text-align: center; background: linear-gradient(135deg, #00e676, #00b359);" onclick="<?= $onClick ?>">
                    Dapatkan Preset
                </button>
            </div>
            <?php endforeach; ?>

        </div>
    </div>

</div>

<!-- STATS SECTION -->
<div class="stats-container" data-aos="zoom-in" data-aos-duration="1000" style="max-width: 1200px; margin: 0 auto 80px auto; padding: 0 20px;">
    <div style="background: rgba(15, 15, 20, 0.7); backdrop-filter: blur(10px); border: 1px solid rgba(0, 229, 255, 0.2); border-radius: 20px; padding: 40px; display: flex; flex-wrap: wrap; justify-content: space-around; gap: 30px; text-align: center;">
        <div>
            <div style="font-size: 3rem; font-weight: 900; color: #00e5ff; margin-bottom: 5px;"><span class="counter" data-target="500">0</span>+</div>
            <div style="font-size: 14px; color: #aaa; letter-spacing: 2px;">PROJEK SELESAI</div>
        </div>
        <div>
            <div style="font-size: 3rem; font-weight: 900; color: #7c3aed; margin-bottom: 5px;"><span class="counter" data-target="50">0</span>+</div>
            <div style="font-size: 14px; color: #aaa; letter-spacing: 2px;">PRESET GRATIS</div>
        </div>
        <div>
            <div style="font-size: 3rem; font-weight: 900; color: #00e676; margin-bottom: 5px;"><span class="counter" data-target="100">0</span>%</div>
            <div style="font-size: 14px; color: #aaa; letter-spacing: 2px;">KLIEN PUAS</div>
        </div>
    </div>
</div>

<!-- CARA ORDER SECTION -->
<div class="how-it-works-container" data-aos="fade-up" style="max-width: 1200px; margin: 0 auto 80px auto; padding: 0 20px;">
    <h2 class="section-title">Cara <span class="text-gradient">Order</span></h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div class="glass-panel" style="padding: 30px 20px; border-radius: 15px;">
            <div style="font-size: 3rem; margin-bottom: 15px;">🛒</div>
            <h3 style="font-size: 18px; color: #fff; margin-bottom: 10px;">1. Pilih Produk</h3>
            <p style="font-size: 13px; color: #aaa;">Pilih jasa edit atau preset yang Anda butuhkan di katalog kami.</p>
        </div>
        <div class="glass-panel" style="padding: 30px 20px; border-radius: 15px;">
            <div style="font-size: 3rem; margin-bottom: 15px;">💬</div>
            <h3 style="font-size: 18px; color: #fff; margin-bottom: 10px;">2. Hubungi Admin</h3>
            <p style="font-size: 13px; color: #aaa;">Klik "Order Sekarang" untuk terhubung langsung dengan Admin via WhatsApp.</p>
        </div>
        <div class="glass-panel" style="padding: 30px 20px; border-radius: 15px;">
            <div style="font-size: 3rem; margin-bottom: 15px;">💳</div>
            <h3 style="font-size: 18px; color: #fff; margin-bottom: 10px;">3. Pembayaran</h3>
            <p style="font-size: 13px; color: #aaa;">Lakukan pembayaran melalui DANA, OVO, atau metode lain yang tersedia.</p>
        </div>
        <div class="glass-panel" style="padding: 30px 20px; border-radius: 15px;">
            <div style="font-size: 3rem; margin-bottom: 15px;">✨</div>
            <h3 style="font-size: 18px; color: #fff; margin-bottom: 10px;">4. Terima Hasil</h3>
            <p style="font-size: 13px; color: #aaa;">Tunggu proses pengerjaan selesai dan file HD akan dikirim ke Anda!</p>
        </div>
    </div>
</div>

<!-- TESTIMONIALS SECTION -->
<div class="testimonials-container" data-aos="fade-up" style="max-width: 1200px; margin: 0 auto 80px auto; padding: 0 20px;">
    <h2 class="section-title">Review <span class="text-gradient">Pelanggan</span></h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
        <!-- Testimoni 1 -->
        <div class="glass-panel" style="padding: 25px; border-radius: 15px; border-left: 4px solid #00e5ff;">
            <div style="display: flex; gap: 5px; color: #ffcc00; margin-bottom: 10px;">⭐⭐⭐⭐⭐</div>
            <p style="font-size: 14px; color: #ddd; margin-bottom: 15px; font-style: italic;">"Wah gila intronya kece parah bang! Prosesnya cepet banget dan hasilnya memuaskan. Next order lagi pasti!"</p>
            <div style="display: flex; align-items: center; gap: 10px;">
                <div style="width: 40px; height: 40px; border-radius: 50%; background: #00e5ff; display: flex; align-items: center; justify-content: center; font-weight: 800; color: #000;">R</div>
                <div>
                    <div style="font-weight: 700; font-size: 14px;">Reza P.</div>
                    <div style="font-size: 11px; color: #888;">Order Jasa Edit Intro</div>
                </div>
            </div>
        </div>
        <!-- Testimoni 2 -->
        <div class="glass-panel" style="padding: 25px; border-radius: 15px; border-left: 4px solid #7c3aed;">
            <div style="display: flex; gap: 5px; color: #ffcc00; margin-bottom: 10px;">⭐⭐⭐⭐⭐</div>
            <p style="font-size: 14px; color: #ddd; margin-bottom: 15px; font-style: italic;">"Preset AM-nya gampang dipake, ga ribet. Tinggal ganti foto langsung jadi jedag-jedug keren. Makasih admin!"</p>
            <div style="display: flex; align-items: center; gap: 10px;">
                <div style="width: 40px; height: 40px; border-radius: 50%; background: #7c3aed; display: flex; align-items: center; justify-content: center; font-weight: 800; color: #fff;">S</div>
                <div>
                    <div style="font-weight: 700; font-size: 14px;">Sinta W.</div>
                    <div style="font-size: 11px; color: #888;">Order AM Premium</div>
                </div>
            </div>
        </div>
        <!-- Testimoni 3 -->
        <div class="glass-panel" style="padding: 25px; border-radius: 15px; border-left: 4px solid #00e676;">
            <div style="display: flex; gap: 5px; color: #ffcc00; margin-bottom: 10px;">⭐⭐⭐⭐⭐</div>
            <p style="font-size: 14px; color: #ddd; margin-bottom: 15px; font-style: italic;">"Adminnya ramah parah, minta revisi dikit langsung dikerjain saat itu juga. Terpercaya banget pokoknya."</p>
            <div style="display: flex; align-items: center; gap: 10px;">
                <div style="width: 40px; height: 40px; border-radius: 50%; background: #00e676; display: flex; align-items: center; justify-content: center; font-weight: 800; color: #000;">D</div>
                <div>
                    <div style="font-weight: 700; font-size: 14px;">Dimas K.</div>
                    <div style="font-size: 11px; color: #888;">Order Jasa Edit Poster</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ SECTION -->
<div class="faq-container" data-aos="fade-up" style="max-width: 800px; margin: 0 auto 80px auto; padding: 0 20px;">
    <h2 class="section-title">Pertanyaan <span class="text-gradient">Umum</span></h2>
    <div style="display: flex; flex-direction: column; gap: 15px;">
        <!-- FAQ 1 -->
        <div class="faq-item" style="background: rgba(15,15,20,0.8); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; overflow: hidden; cursor: pointer;">
            <div class="faq-header" style="padding: 20px; display: flex; justify-content: space-between; align-items: center; font-weight: 600;">
                Berapa lama proses pengerjaan Jasa Edit?
                <span class="faq-icon" style="transition: transform 0.3s;">▼</span>
            </div>
            <div class="faq-body" style="padding: 0 20px; max-height: 0; overflow: hidden; transition: max-height 0.3s ease, padding 0.3s ease; color: #aaa; font-size: 14px;">
                Normalnya pengerjaan memakan waktu 1x24 jam tergantung tingkat kesulitan dan antrean. Kami selalu mengusahakan proses tercepat untuk Anda!
            </div>
        </div>
        <!-- FAQ 2 -->
        <div class="faq-item" style="background: rgba(15,15,20,0.8); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; overflow: hidden; cursor: pointer;">
            <div class="faq-header" style="padding: 20px; display: flex; justify-content: space-between; align-items: center; font-weight: 600;">
                Apakah ada garansi revisi?
                <span class="faq-icon" style="transition: transform 0.3s;">▼</span>
            </div>
            <div class="faq-body" style="padding: 0 20px; max-height: 0; overflow: hidden; transition: max-height 0.3s ease, padding 0.3s ease; color: #aaa; font-size: 14px;">
                Tentu saja! Kami memberikan garansi revisi wajar (minor) sampai Anda benar-benar puas dengan hasilnya.
            </div>
        </div>
        <!-- FAQ 3 -->
        <div class="faq-item" style="background: rgba(15,15,20,0.8); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; overflow: hidden; cursor: pointer;">
            <div class="faq-header" style="padding: 20px; display: flex; justify-content: space-between; align-items: center; font-weight: 600;">
                Bagaimana cara ordernya?
                <span class="faq-icon" style="transition: transform 0.3s;">▼</span>
            </div>
            <div class="faq-body" style="padding: 0 20px; max-height: 0; overflow: hidden; transition: max-height 0.3s ease, padding 0.3s ease; color: #aaa; font-size: 14px;">
                Cukup klik tombol "Order Sekarang" pada produk yang Anda inginkan, Anda akan langsung diarahkan ke WhatsApp Admin untuk detail pembayaran dan pengiriman file.
            </div>
        </div>
    </div>
</div>

<!-- SOSIAL MEDIA SECTION -->
<div class="catalog-container" style="margin-top: 50px; margin-bottom: 50px; text-align: center;">
    <h2 class="section-title">Ikuti <span class="text-gradient">Sosial Media</span> Kami</h2>
    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-top: 20px;">
        <a href="https://youtube.com/@brankeynomeam?si=eFq8q-J85IEFULSm" target="_blank" class="btn-primary" style="background: linear-gradient(135deg, #ff0000, #990000); display: flex; align-items: center; gap: 8px;">
            YouTube
        </a>
        <a href="https://tiktok.com/@brankeynomeam" target="_blank" class="btn-primary" style="background: linear-gradient(135deg, #000000, #333333); border: 1px solid #ff0000; display: flex; align-items: center; gap: 8px;">
            TikTok
        </a>
        <a href="https://www.instagram.com/mazkey_7?igsh=MWVqaGUwc2VyN3VzZQ==" target="_blank" class="btn-primary" style="background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045); display: flex; align-items: center; gap: 8px;">
            Instagram
        </a>
        <a href="https://whatsapp.com/channel/0029Vb6iytg47Xe447PCVp1C" target="_blank" class="btn-primary" style="background: linear-gradient(135deg, #25D366, #128C7E); display: flex; align-items: center; gap: 8px;">
            Saluran WhatsApp
        </a>
    </div>
</div>

<!-- TRUST BADGES (METODE PEMBAYARAN) -->
<div style="text-align: center; margin-bottom: 60px; padding: 0 20px;">
    <p style="font-size: 14px; color: #888; margin-bottom: 15px; letter-spacing: 2px;">METODE PEMBAYARAN YANG DITERIMA</p>
    <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 8px; color: #fff; font-weight: bold;">📱 E-Wallet</div>
        <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 8px; color: #fff; font-weight: bold;">🏦 Bank Transfer</div>
        <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 8px; color: #fff; font-weight: bold;">🔲 QRIS (All Payment)</div>
    </div>
</div>

<!-- FOOTER -->
<footer style="background: rgba(10, 10, 15, 0.95); border-top: 1px solid rgba(0, 229, 255, 0.2); padding: 40px 20px; text-align: center; margin-top: 50px;">
    <h3 style="font-size: 1.5rem; font-weight: 900; color: #fff; margin-bottom: 10px;">Brankey <span class="text-gradient">Store</span></h3>
    <p style="color: #aaa; font-size: 13px; max-width: 500px; margin: 0 auto 20px auto;">Platform terpercaya untuk jasa edit video, penyedia preset, dan produk digital premium lainnya. Tingkatkan kualitas konten Anda bersama kami.</p>
    <div style="display: flex; justify-content: center; gap: 15px; margin-bottom: 20px;">
        <a href="#" style="color: #00e5ff; font-size: 13px; text-decoration: none;">Syarat & Ketentuan</a>
        <span style="color: #555;">|</span>
        <a href="#" style="color: #00e5ff; font-size: 13px; text-decoration: none;">Kebijakan Garansi</a>
        <span style="color: #555;">|</span>
        <a href="https://wa.me/6281361751132" style="color: #00e5ff; font-size: 13px; text-decoration: none;">Hubungi Kami</a>
    </div>
    <div style="color: #777; font-size: 12px;">&copy; <?= date('Y') ?> Brankey Store. All rights reserved.</div>
</footer>

<!-- FLOATING WA BUTTON -->
<a href="https://wa.me/6281361751132?text=Halo+Admin+Brankey+Store,+saya+mau+tanya+dulu..." target="_blank" style="position: fixed; bottom: 30px; right: 30px; background: #25D366; color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(37,211,102,0.4); z-index: 999; text-decoration: none; font-size: 30px; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
    <svg width="35" height="35" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964 1.003-3.588c-.608-1.065-.927-2.294-.927-3.533 0-3.921 3.19-7.111 7.112-7.111 3.92 0 7.109 3.19 7.11 7.111.001 3.921-3.189 7.111-7.11 7.111z"/></svg>
</a>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- VanillaTilt JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>

<script>
function showTab(tab) {
    // Sembunyikan semua tab content
    document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(el => el.classList.remove('active'));

    // Tampilkan tab yang diklik
    document.getElementById('tab-' + tab).classList.add('active');
    event.target.classList.add('active');
}

// Fitur Pencarian
document.getElementById('searchKatalog').addEventListener('input', function(e) {
    let filter = e.target.value.toLowerCase();
    let tabNav = document.querySelector('.tab-nav');
    let tabContents = document.querySelectorAll('.tab-content');
    let allCards = document.querySelectorAll('.package-card');

    if (filter === '') {
        // Kembalikan ke mode Tab
        tabNav.style.display = 'flex';
        tabContents.forEach(el => {
            el.style.display = ''; // Hapus inline style biar kembali mengikuti class .active CSS
        });
        allCards.forEach(card => card.style.display = '');
    } else {
        // Mode Pencarian: Sembunyikan navigasi tab, tampilkan SEMUA isi tab
        tabNav.style.display = 'none';
        tabContents.forEach(el => {
            el.style.display = 'block'; 
        });

        // Saring setiap card berdasarkan judul atau teks di dalamnya
        allCards.forEach(card => {
            let textContent = card.innerText.toLowerCase();
            if (textContent.includes(filter)) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    }
});

// Fitur Unlock Preset Gratis
let unlockedYt = false;
let unlockedTt = false;

function unlockPreset(presetUrl) {
    unlockedYt = false;
    unlockedTt = false;
    
    Swal.fire({
        title: 'Buka Kunci Preset 🎁',
        html: `
            <p style="font-size: 14px; margin-bottom: 20px; color: #fff;">Wajib Follow & Subscribe dulu untuk mendapatkan preset ini ya!</p>
            <div style="display: flex; flex-direction: column; gap: 12px; margin-top: 15px;">
                <a href="https://youtube.com/@brankeynomeam?si=eFq8q-J85IEFULSm" target="_blank" onclick="checkUnlock('yt')" class="btn-primary" style="background: #ff0000; border: none; display: flex; align-items: center; justify-content: center; gap: 10px; padding: 12px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    SUBSCRIBE YOUTUBE ADMIN
                </a>
                <a href="https://tiktok.com/@brankeynomeam" target="_blank" onclick="checkUnlock('tt')" class="btn-primary" style="background: #000000; border: 1px solid #333; display: flex; align-items: center; justify-content: center; gap: 10px; padding: 12px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.04-.1z"/></svg>
                    FOLLOW TIKTOK ADMIN
                </a>
                <div style="margin: 10px 0; height: 1px; background: rgba(255,255,255,0.1);"></div>
                <a href="${presetUrl}" target="_blank" id="btnUnlockFinal" class="btn-primary" style="background: #00e676; opacity: 0.4; pointer-events: none; display: flex; align-items: center; justify-content: center; gap: 8px; padding: 12px; border: none; color: #000; font-weight: 800;">
                    🔒 Ambil Preset Sekarang
                </a>
            </div>
        `,
        showConfirmButton: false,
        showCloseButton: true,
        allowOutsideClick: false,
        background: '#1a1a24'
    });
}

function checkUnlock(type) {
    if (type === 'yt') unlockedYt = true;
    if (type === 'tt') unlockedTt = true;

    if (unlockedYt && unlockedTt) {
        const btnFinal = document.getElementById('btnUnlockFinal');
        if (btnFinal) {
            btnFinal.style.opacity = '1';
            btnFinal.style.pointerEvents = 'auto';
            btnFinal.innerHTML = '✅ Ambil Preset Sekarang';
        }
    }
}

function unlockDownload(downloadUrl, filename) {
    unlockedYt = false;
    unlockedTt = false;
    
    Swal.fire({
        title: 'Buka Kunci Unduhan 🎁',
        html: `
            <p style="font-size: 14px; margin-bottom: 20px; color: #fff;">Wajib Follow & Subscribe dulu untuk mengunduh overlay ini ya!</p>
            <div style="display: flex; flex-direction: column; gap: 12px; margin-top: 15px;">
                <a href="https://youtube.com/@brankeynomeam?si=eFq8q-J85IEFULSm" target="_blank" onclick="checkUnlockDownload('yt')" class="btn-primary" style="background: #ff0000; border: none; display: flex; align-items: center; justify-content: center; gap: 10px; padding: 12px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    SUBSCRIBE YOUTUBE ADMIN
                </a>
                <a href="https://tiktok.com/@brankeynomeam" target="_blank" onclick="checkUnlockDownload('tt')" class="btn-primary" style="background: #000000; border: 1px solid #333; display: flex; align-items: center; justify-content: center; gap: 10px; padding: 12px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.04-.1z"/></svg>
                    FOLLOW TIKTOK ADMIN
                </a>
                <div style="margin: 10px 0; height: 1px; background: rgba(255,255,255,0.1);"></div>
                <a href="${downloadUrl}" download="${filename}" id="btnUnlockDownloadFinal" class="btn-primary" style="background: #00e676; opacity: 0.4; pointer-events: none; display: flex; align-items: center; justify-content: center; gap: 8px; padding: 12px; border: none; color: #000; font-weight: 800;">
                    🔒 Unduh Video Sekarang
                </a>
            </div>
        `,
        showConfirmButton: false,
        showCloseButton: true,
        allowOutsideClick: false,
        background: '#1a1a24'
    });
}

function checkUnlockDownload(type) {
    if (type === 'yt') unlockedYt = true;
    if (type === 'tt') unlockedTt = true;

    if (unlockedYt && unlockedTt) {
        const btnFinal = document.getElementById('btnUnlockDownloadFinal');
        if (btnFinal) {
            btnFinal.style.opacity = '1';
            btnFinal.style.pointerEvents = 'auto';
            btnFinal.innerHTML = '✅ Unduh Video Sekarang';
        }
    }
}
</script>

<script>
// ==========================================
// 6 PREMIUM UI FEATURES JAVASCRIPT LOGIC
// ==========================================

document.addEventListener("DOMContentLoaded", function() {
    
    // 1. Inisialisasi AOS (Animate On Scroll)
    if(typeof AOS !== 'undefined') {
        AOS.init({
            once: true,
            offset: 100
        });
    }

    // 1.5 Inisialisasi VanillaTilt untuk Kartu Produk
    if(typeof VanillaTilt !== 'undefined') {
        VanillaTilt.init(document.querySelectorAll(".package-card, .glass-panel"), {
            max: 5,
            speed: 400,
            glare: true,
            "max-glare": 0.2,
        });
    }

    // 2. Inisialisasi Particles.js
    if(typeof particlesJS !== 'undefined') {
        particlesJS('particles-js', {
            "particles": {
                "number": { "value": 40, "density": { "enable": true, "value_area": 800 } },
                "color": { "value": ["#00e5ff", "#7c3aed", "#ff0055"] },
                "shape": { "type": "circle" },
                "opacity": { "value": 0.5, "random": true },
                "size": { "value": 3, "random": true },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.1,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": { "enable": true, "mode": "grab" },
                    "onclick": { "enable": true, "mode": "push" },
                    "resize": true
                },
                "modes": {
                    "grab": { "distance": 140, "line_linked": { "opacity": 0.5 } },
                    "push": { "particles_nb": 4 }
                }
            },
            "retina_detect": true
        });
    }

    // 3. Logika Counter Animasi (Statistik)
    const counters = document.querySelectorAll('.counter');
    const speed = 100; // Semakin kecil semakin cepat

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    // Jalankan counter saat elemen terlihat (Intersection Observer)
    const observer = new IntersectionObserver((entries) => {
        if(entries[0].isIntersecting) {
            animateCounters();
            observer.disconnect();
        }
    }, { threshold: 0.5 });
    
    const statsContainer = document.querySelector('.stats-container');
    if(statsContainer) observer.observe(statsContainer);

    // 4. Logika FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const header = item.querySelector('.faq-header');
        header.addEventListener('click', () => {
            // Tutup semua dulu (optional, kalau mau cuma 1 yg buka)
            faqItems.forEach(otherItem => {
                if(otherItem !== item) {
                    otherItem.querySelector('.faq-body').style.maxHeight = null;
                    otherItem.querySelector('.faq-body').style.padding = "0 20px";
                    otherItem.querySelector('.faq-icon').style.transform = "rotate(0deg)";
                }
            });

            const body = item.querySelector('.faq-body');
            const icon = item.querySelector('.faq-icon');
            
            if (body.style.maxHeight) {
                body.style.maxHeight = null;
                body.style.padding = "0 20px";
                icon.style.transform = "rotate(0deg)";
            } else {
                body.style.maxHeight = body.scrollHeight + 40 + "px";
                body.style.padding = "0 20px 20px 20px";
                icon.style.transform = "rotate(180deg)";
            }
        });
    });

    // 5. Logika FOMO Toast Notification
    const toast = document.getElementById('fomo-toast');
    const fomoText = document.getElementById('fomo-text');
    const fomoTime = document.getElementById('fomo-time');
    
    if(toast) {
        const names = ["Andi", "Budi", "Rizky", "Siti", "Dimas", "Ayu", "Fajar", "Kevin", "Nisa"];
        const cities = ["Jakarta", "Bandung", "Surabaya", "Medan", "Bali", "Yogyakarta", "Semarang", "Makassar"];
        const products = ["Jasa Edit Intro", "Preset AM Premium", "Jasa Edit Logo", "Jasa Edit Poster", "Preset CC/Efek"];
        const times = ["Beberapa detik yang lalu", "1 menit yang lalu", "2 menit yang lalu", "Baru saja"];

        function showFomo() {
            // Randomize data
            const randomName = names[Math.floor(Math.random() * names.length)];
            const randomCity = cities[Math.floor(Math.random() * cities.length)];
            const randomProduct = products[Math.floor(Math.random() * products.length)];
            const randomTime = times[Math.floor(Math.random() * times.length)];

            fomoText.innerHTML = `<strong>${randomName}</strong> dari ${randomCity} memesan <strong>${randomProduct}</strong>.`;
            fomoTime.innerText = randomTime;

            // Tampilkan (geser masuk dari kiri)
            toast.style.left = "20px";

            // Sembunyikan setelah 5 detik
            setTimeout(() => {
                toast.style.left = "-350px";
            }, 5000);
        }

        // Tampilkan notifikasi pertama setelah 3 detik
        setTimeout(() => {
            showFomo();
            // Kemudian tampilkan secara random setiap 15 - 30 detik
            setInterval(showFomo, Math.floor(Math.random() * (30000 - 15000 + 1) + 15000));
        }, 3000);
    }

});
</script>

<?= $this->endSection() ?>
