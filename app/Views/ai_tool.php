<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="ai-tool-wrapper">

    <!-- HERO SECTION -->
    <div class="ai-hero">
        <div class="ai-hero-badge">✨ AI Background Remover</div>
        <h1>Brankey <span class="text-gradient">AI BG</span></h1>
        <p>Hapus background <strong>foto maupun logo</strong> secara otomatis dengan AI. Hasilkan file transparan HD yang siap dimasukkan ke editanmu!</p>
    </div>

    <!-- ===================== TAB FOTO ===================== -->
    <div id="tabFoto" class="ai-tab-content active">
        <div class="ai-steps">
            <div class="ai-step"><span>1</span> Upload Foto</div>
            <div class="ai-step-arrow">→</div>
            <div class="ai-step"><span>2</span> AI Hapus BG</div>
            <div class="ai-step-arrow">→</div>
            <div class="ai-step"><span>3</span> Download PNG</div>
        </div>

        <div class="ai-tool-grid">
            <!-- PANEL KIRI: Upload -->
            <div class="ai-panel glass-panel">
                <h3 class="ai-panel-title">⬆️ Upload Gambar / Logo</h3>

                <div class="drop-zone" id="dropZone">
                    <div class="drop-zone-icon">🖼️</div>
                    <div class="drop-zone-text">Drag & drop gambar di sini</div>
                    <div class="drop-zone-sub">atau klik untuk pilih file</div>
                    <div class="drop-zone-formats">JPG · PNG · WEBP · Maks 10MB</div>
                    <input type="file" id="fileInput" accept="image/jpeg,image/png,image/webp" hidden>
                </div>

                <div class="preview-box" id="previewOrigBox" style="display:none;">
                    <div class="preview-label">📷 Gambar Original</div>
                    <img id="previewOrig" src="" alt="Preview Original">
                </div>

                <button class="btn-primary ai-btn-proses" id="btnProses" disabled>
                    <span id="btnProsesText">🚀 Proses dengan AI</span>
                </button>
            </div>

            <!-- PANEL KANAN: Hasil Foto -->
            <div class="ai-panel glass-panel">
                <h3 class="ai-panel-title">✅ Hasil AI</h3>

                <div class="ai-result-idle" id="stateIdle">
                    <div style="font-size: 4rem; margin-bottom: 15px;">🤖</div>
                    <p>Hasil prosesing AI akan muncul di sini.<br>Upload gambar dan klik <strong>Proses</strong>!</p>
                </div>

                <div class="ai-result-loading" id="stateLoading" style="display:none;">
                    <div class="ai-spinner"></div>
                    <p>AI sedang memproses gambarmu...<br><small>Biasanya butuh 5-15 detik</small></p>
                    <div class="ai-loading-steps">
                        <div class="ai-load-step active" id="lstep1">📤 Mengupload gambar...</div>
                        <div class="ai-load-step" id="lstep2">🤖 AI menghapus background...</div>
                        <div class="ai-load-step" id="lstep3">⚙️ Menyiapkan file HD...</div>
                    </div>
                </div>

                <div class="ai-result-success" id="stateSuccess" style="display:none;">
                    <div class="preview-compare">
                        <div class="preview-box">
                            <div class="preview-label">✅ Logo Tanpa Background</div>
                            <div class="checker-bg">
                                <img id="previewNoBg" src="" alt="No Background">
                            </div>
                        </div>
                    </div>
                    <div class="ai-success-info">
                        <div class="ai-info-badge">🎉 Background berhasil dihapus!</div>
                        <p>Gambar logo/elemen yang sudah transparan siap di-download.</p>
                    </div>
                    <a href="#" id="btnDownloadXml" class="btn-primary ai-btn-download" target="_blank" download>
                        📥 Download Gambar (.png)
                    </a>
                    <div class="ai-import-guide">
                        <strong>📖 Cara Pemasangan di Alight Motion:</strong>
                        <ol>
                            <li>Buka project/preset yang sedang kamu edit di Alight Motion.</li>
                            <li>Klik menu <code>+</code> (Add) → <strong>Media</strong></li>
                            <li>Pilih gambar transparan yang baru saja didownload ini.</li>
                            <li>Logo kamu akan langsung tampil rapi tanpa background!</li>
                        </ol>
                    </div>
                    <button class="btn-outline ai-btn-reset" id="btnReset">🔄 Proses Gambar Lain</button>
                </div>

                <div class="ai-result-error" id="stateError" style="display:none;">
                    <div style="font-size: 3rem; margin-bottom: 15px;">❌</div>
                    <p id="errorMsg">Terjadi kesalahan.</p>
                    <button class="btn-outline ai-btn-reset" id="btnResetErr">🔄 Coba Lagi</button>
                </div>
            </div>
        </div>
    </div>


    <!-- INFO SECTION -->
    <div class="ai-info-section">
        <h3>ℹ️ Tentang Fitur Ini</h3>
        <div class="ai-info-grid">
            <div class="ai-info-card">
                <div class="ai-info-icon">🔒</div>
                <div class="ai-info-title">Privasi Terjaga</div>
                <p>File yang diupload hanya diproses dan langsung dihapus. Tidak disimpan permanen.</p>
            </div>
            <div class="ai-info-card">
                <div class="ai-info-icon">⚡</div>
                <div class="ai-info-title">AI Terdepan</div>
                <p>Foto menggunakan remove.bg, video menggunakan Cutout.pro — AI terbaik untuk masing-masing media.</p>
            </div>
            <div class="ai-info-card">
                <div class="ai-info-icon">📦</div>
                <div class="ai-info-title">Siap Pakai</div>
                <p>Foto → PNG transparan HD. Video → WebM transparan. Langsung tumpuk di editanmu!</p>
            </div>
            <div class="ai-info-card">
                <div class="ai-info-icon">🎯</div>
                <div class="ai-info-title">Gratis Digunakan</div>
                <p>Fitur ini gratis untuk semua pengunjung Brankey Store. Gunakan sebanyak yang kamu mau!</p>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>

// ========================
// ===== TAB FOTO =====
// ========================
const dropZone      = document.getElementById('dropZone');
const fileInput     = document.getElementById('fileInput');
const btnProses     = document.getElementById('btnProses');
const btnProsesText = document.getElementById('btnProsesText');

let selectedFile = null;

dropZone.addEventListener('click', () => fileInput.click());
dropZone.addEventListener('dragover', (e) => { e.preventDefault(); dropZone.classList.add('drag-over'); });
dropZone.addEventListener('dragleave', () => dropZone.classList.remove('drag-over'));
dropZone.addEventListener('drop', (e) => {
    e.preventDefault();
    dropZone.classList.remove('drag-over');
    const file = e.dataTransfer.files[0];
    if (file) handleFile(file);
});
fileInput.addEventListener('change', () => { if (fileInput.files[0]) handleFile(fileInput.files[0]); });

function handleFile(file) {
    const allowed = ['image/jpeg', 'image/png', 'image/webp'];
    if (!allowed.includes(file.type)) {
        showSwal('Format Tidak Didukung', 'Gunakan file JPG, PNG, atau WEBP.', 'error'); return;
    }
    if (file.size > 10 * 1024 * 1024) {
        showSwal('File Terlalu Besar', 'Ukuran maksimal 10MB.', 'error'); return;
    }
    selectedFile = file;
    const reader = new FileReader();
    reader.onload = (e) => {
        document.getElementById('previewOrig').src = e.target.result;
        document.getElementById('previewOrigBox').style.display = 'block';
    };
    reader.readAsDataURL(file);
    dropZone.querySelector('.drop-zone-text').textContent = '✅ ' + file.name;
    dropZone.querySelector('.drop-zone-sub').textContent  = (file.size / 1024).toFixed(1) + ' KB';
    dropZone.classList.add('has-file');
    btnProses.disabled = false;
}

btnProses.addEventListener('click', async () => {
    if (!selectedFile) return;
    setStatePhoto('loading');
    setTimeout(() => stepActive('lstep2'), 2000);
    setTimeout(() => stepActive('lstep3'), 5000);
    const formData = new FormData();
    formData.append('gambar', selectedFile);
    try {
        const res = await fetch('<?= base_url('ai-tool/proses') ?>', {
            method: 'POST', body: formData,
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        });
        const data = await res.json();
        if (data.status === 'success') {
            document.getElementById('previewNoBg').src = data.preview_url + '?t=' + Date.now();
            document.getElementById('btnDownloadXml').href = data.download_url;
            setStatePhoto('success');
        } else {
            document.getElementById('errorMsg').textContent = data.message;
            setStatePhoto('error');
        }
    } catch (err) {
        document.getElementById('errorMsg').textContent = 'Terjadi kesalahan jaringan. Coba lagi.';
        setStatePhoto('error');
    }
});

document.getElementById('btnReset').addEventListener('click', resetPhoto);
document.getElementById('btnResetErr').addEventListener('click', resetPhoto);

function resetPhoto() {
    selectedFile = null;
    fileInput.value = '';
    document.getElementById('previewOrigBox').style.display = 'none';
    dropZone.querySelector('.drop-zone-text').textContent = 'Drag & drop gambar di sini';
    dropZone.querySelector('.drop-zone-sub').textContent  = 'atau klik untuk pilih file';
    dropZone.classList.remove('has-file');
    btnProses.disabled = true;
    setStatePhoto('idle');
}

function setStatePhoto(state) {
    ['idle','loading','success','error'].forEach(s => {
        document.getElementById('state' + s.charAt(0).toUpperCase() + s.slice(1)).style.display = 'none';
    });
    document.getElementById('state' + state.charAt(0).toUpperCase() + state.slice(1)).style.display = 'flex';
}

function stepActive(id) {
    document.querySelectorAll('#tabFoto .ai-load-step').forEach(el => el.classList.remove('active'));
    const el = document.getElementById(id);
    if (el) el.classList.add('active');
}

// ========================
// Shared Helper
// ========================
function showSwal(title, text, icon) {
    Swal.fire({ title, text, icon, confirmButtonColor: '#4ae7d1' });
}
</script>

<style>
/* ======================== AI TOOL STYLES ======================== */
.ai-tool-wrapper {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px 60px;
}

/* Hero */
.ai-hero {
    text-align: center;
    margin-bottom: 35px;
}
.ai-hero-badge {
    display: inline-block;
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    color: #000;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 1px;
    padding: 5px 16px;
    border-radius: 50px;
    margin-bottom: 15px;
}
.ai-hero h1 { font-size: clamp(2rem, 5vw, 3rem); margin-bottom: 15px; }
.ai-hero p  { color: var(--text-muted); font-size: 1.05rem; max-width: 580px; margin: 0 auto; }

/* Tab Switcher */
.ai-tab-switcher {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-bottom: 30px;
    flex-wrap: wrap;
}
.ai-tab-btn {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.15);
    color: var(--text-muted);
    padding: 12px 32px;
    border-radius: 50px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: 'Poppins', sans-serif;
}
.ai-tab-btn:hover {
    border-color: var(--primary);
    color: #fff;
}
.ai-tab-btn.active {
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    border-color: transparent;
    color: #000;
    box-shadow: 0 4px 20px rgba(74, 231, 209, 0.4);
}

.ai-tab-content { display: block; }

/* Steps */
.ai-steps {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 30px;
}
.ai-step {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 50px;
    padding: 8px 20px;
    font-size: 14px;
    font-weight: 600;
}
.ai-step span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 22px; height: 22px;
    background: var(--primary);
    color: #000;
    border-radius: 50%;
    font-size: 12px;
    font-weight: 700;
    margin-right: 6px;
}
.ai-step-arrow { color: var(--primary); font-size: 1.3rem; }

/* Grid */
.ai-tool-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
    margin-bottom: 40px;
}
@media (max-width: 768px) { .ai-tool-grid { grid-template-columns: 1fr; } }

.ai-panel { padding: 30px; }
.ai-panel-title {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}

/* Drop Zone */
.drop-zone {
    border: 2px dashed rgba(74, 231, 209, 0.3);
    border-radius: 16px;
    padding: 35px 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-bottom: 20px;
    background: rgba(74, 231, 209, 0.03);
}
.drop-zone:hover, .drop-zone.drag-over {
    border-color: var(--primary);
    background: rgba(74, 231, 209, 0.07);
    transform: scale(1.01);
}
.drop-zone.has-file { border-color: #00e676; background: rgba(0,230,118,0.05); }
.drop-zone-icon    { font-size: 2.5rem; margin-bottom: 10px; }
.drop-zone-text    { font-weight: 600; margin-bottom: 5px; }
.drop-zone-sub     { color: var(--text-muted); font-size: 13px; margin-bottom: 8px; }
.drop-zone-formats { font-size: 11px; color: rgba(255,255,255,0.3); letter-spacing: 1px; }

/* Video Meta */
.video-meta {
    font-size: 12px;
    color: var(--text-muted);
    margin-top: 8px;
    text-align: center;
    letter-spacing: 0.5px;
}

/* Video Note */
.video-note {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    background: rgba(74, 231, 209, 0.07);
    border: 1px solid rgba(74, 231, 209, 0.2);
    border-radius: 10px;
    padding: 12px 15px;
    font-size: 13px;
    color: var(--text-muted);
    margin-bottom: 20px;
    line-height: 1.5;
}
.video-note span:first-child { font-size: 16px; flex-shrink: 0; }

/* Preview */
.preview-box { margin-bottom: 20px; }
.preview-label { font-size: 13px; color: var(--text-muted); margin-bottom: 8px; font-weight: 600; }
.preview-box img { width: 100%; border-radius: 10px; display: block; max-height: 200px; object-fit: contain; background: rgba(255,255,255,0.03); }
.checker-bg {
    background-image: linear-gradient(45deg, #333 25%, transparent 25%),
                      linear-gradient(-45deg, #333 25%, transparent 25%),
                      linear-gradient(45deg, transparent 75%, #333 75%),
                      linear-gradient(-45deg, transparent 75%, #333 75%);
    background-size: 16px 16px;
    background-position: 0 0, 0 8px, 8px -8px, -8px 0px;
    border-radius: 10px;
    padding: 10px;
}
.checker-bg img { max-height: 220px; object-fit: contain; border-radius: 8px; }

/* Tombol Proses */
.ai-btn-proses {
    width: 100%;
    padding: 15px;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: 0.5px;
    opacity: 1;
    transition: all 0.3s ease;
}
.ai-btn-proses:disabled { opacity: 0.4; cursor: not-allowed; transform: none !important; }

/* Result States */
.ai-result-idle, .ai-result-loading, .ai-result-success, .ai-result-error {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    min-height: 300px;
    gap: 12px;
}
.ai-result-idle p, .ai-result-loading p, .ai-result-error p {
    color: var(--text-muted);
    line-height: 1.6;
}
.ai-result-success { justify-content: flex-start; }

/* Spinner */
.ai-spinner {
    width: 55px; height: 55px;
    border: 3px solid rgba(74, 231, 209, 0.2);
    border-top-color: var(--primary);
    border-radius: 50%;
    animation: spin 0.8s linear infinite;
    margin-bottom: 5px;
}
.video-spinner {
    width: 65px; height: 65px;
    border-width: 4px;
    border-color: rgba(74, 231, 209, 0.15);
    border-top-color: var(--primary);
    border-right-color: var(--secondary);
}
@keyframes spin { to { transform: rotate(360deg); } }

/* Loading Steps */
.ai-loading-steps { display: flex; flex-direction: column; gap: 8px; margin-top: 10px; width: 100%; max-width: 280px; }
.ai-load-step {
    font-size: 13px;
    color: rgba(255,255,255,0.3);
    padding: 8px 14px;
    border-radius: 8px;
    border: 1px solid transparent;
    transition: all 0.3s;
    text-align: left;
}
.ai-load-step.active {
    color: var(--primary);
    border-color: rgba(74, 231, 209, 0.2);
    background: rgba(74, 231, 209, 0.05);
}

/* Video Timer */
.video-timer-display {
    margin-top: 15px;
    font-size: 13px;
    color: rgba(255,255,255,0.4);
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 8px;
    padding: 8px 18px;
}
.video-timer-display strong { color: var(--primary); }

/* Success */
.preview-compare { width: 100%; margin-bottom: 15px; }
.ai-success-info { margin-bottom: 15px; }
.ai-info-badge {
    display: inline-block;
    background: rgba(0,230,118,0.15);
    border: 1px solid #00e676;
    color: #00e676;
    font-weight: 700;
    font-size: 13px;
    padding: 5px 14px;
    border-radius: 50px;
    margin-bottom: 8px;
}
.ai-btn-download { width: 100%; font-size: 1rem; margin-bottom: 15px; }

.ai-import-guide {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 10px;
    padding: 15px 20px;
    text-align: left;
    font-size: 13px;
    width: 100%;
    margin-bottom: 15px;
    line-height: 2;
}
.ai-import-guide ol { margin: 8px 0 0 18px; color: var(--text-muted); }
.ai-import-guide code { background: rgba(74, 231, 209, 0.1); color: var(--primary); padding: 2px 6px; border-radius: 4px; font-size: 12px; }

.btn-outline {
    background: transparent;
    border: 1px solid rgba(255,255,255,0.2);
    color: var(--text-muted);
    padding: 10px 24px;
    border-radius: 50px;
    cursor: pointer;
    font-size: 14px;
    transition: all 0.2s ease;
    font-family: inherit;
}
.btn-outline:hover { border-color: var(--primary); color: #fff; }

/* Info Section */
.ai-info-section {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 20px;
    padding: 35px;
}
.ai-info-section h3 { text-align: center; margin-bottom: 25px; font-size: 1.2rem; }
.ai-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}
.ai-info-card { text-align: center; padding: 20px 15px; }
.ai-info-icon { font-size: 2rem; margin-bottom: 10px; }
.ai-info-title { font-weight: 700; margin-bottom: 8px; color: #fff; }
.ai-info-card p { font-size: 13px; color: var(--text-muted); line-height: 1.6; }
</style>

<?= $this->endSection() ?>
