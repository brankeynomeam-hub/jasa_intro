<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="form-container glass-panel">
    <div style="text-align: center; margin-bottom: 30px;">
        <video autoplay loop muted playsinline preload="none" src="<?= base_url('videos/logo_header.mp4') ?>" style="height: 80px; margin-bottom: 15px; border-radius: 5px; background: #000;"></video>
        <h2>Form <span class="text-gradient">Pemesanan</span></h2>
        <p style="color: var(--text-muted); font-size: 0.9rem;">Lengkapi data di bawah ini untuk memproses pesanan intro YouTube kamu.</p>
    </div>

    <form id="orderForm" action="<?= base_url('order/proses') ?>" method="post">
        
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" required placeholder="Masukkan nama lengkap kamu">
        </div>



        <div class="form-group">
            <label for="nomor_wa">Nama Akun TikTok</label>
            <input type="text" id="nomor_wa" name="nomor_wa" class="form-control" required placeholder="Contoh: @brankeynomeam">
        </div>


        <div class="form-group">
            <label for="paket">Paket yang Dipilih</label>
            <input type="text" id="paket" name="paket" class="form-control" value="<?= esc($paket) ?>" readonly>
        </div>

        <div class="form-group">
            <label for="harga">Total Harga (Rp)</label>
            <input type="text" id="harga" name="harga" class="form-control" value="<?= esc($harga) ?>" readonly>
        </div>

        <div class="form-group">
            <label for="catatan">Request Khusus / Catatan (Opsional)</label>
            <textarea id="catatan" name="catatan" class="form-control" placeholder="Tuliskan warna dominan, tema, atau pesan khusus untuk intro kamu..."></textarea>
        </div>

        <button type="submit" class="btn-primary" style="width: 100%; margin-top: 10px;" id="btnSubmit">
            Pesan via WhatsApp
        </button>
    </form>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    document.getElementById('orderForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Ambil tombol submit
        const btnSubmit = document.getElementById('btnSubmit');
        btnSubmit.innerHTML = 'Memproses...';
        btnSubmit.disabled = true;

        // Ambil data form
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);
        
        // Nomor WA Admin (Bisa diganti nanti di sini)
        const waAdmin = '6281361751132';
        
        // Format Teks WhatsApp
        let textWA = `*Halo Admin Brankey, saya ingin memesan Produk Digital.*\n\n`;
        textWA += `*Detail Pesanan:*\n`;
        textWA += `- Nama Lengkap : ${data.nama_lengkap}\n`;

        textWA += `- Nama Akun TikTok : ${data.nomor_wa}\n`;

        textWA += `- Paket : *${data.paket}*\n`;
        textWA += `- Harga : *Rp ${data.harga}*\n`;
        
        if(data.catatan) {
            textWA += `\n*Catatan Khusus:*\n${data.catatan}\n`;
        }
        
        const urlWA = `https://wa.me/${waAdmin}?text=${encodeURIComponent(textWA)}`;

        // Kirim AJAX ke Backend (opsional untuk nyimpan DB)
        fetch('<?= base_url('order/proses') ?>', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        }).then(response => response.json())
          .then(result => {
              // Menampilkan SweetAlert Modal Konfirmasi
              Swal.fire({
                  title: 'Order Diterima!',
                  text: 'Silakan lanjutkan ke WhatsApp untuk menyelesaikan pembayaran dan mengirimkan aset (logo dll).',
                  icon: 'success',
                  showCancelButton: true,
                  confirmButtonColor: '#25D366',
                  cancelButtonColor: '#333',
                  confirmButtonText: '<i class="fab fa-whatsapp"></i> Lanjut ke WhatsApp',
                  cancelButtonText: 'Tutup'
              }).then((swalResult) => {
                  if (swalResult.isConfirmed) {
                      window.open(urlWA, '_blank');
                      window.location.href = '<?= base_url('/') ?>'; // kembali ke home
                  } else {
                      btnSubmit.innerHTML = 'Pesan via WhatsApp';
                      btnSubmit.disabled = false;
                  }
              });
          })
          .catch(error => {
              console.error('Error:', error);
              // Fallback langsung ke WA kalau server error
              window.open(urlWA, '_blank');
              window.location.href = '<?= base_url('/') ?>';
          });
    });
</script>
<?= $this->endSection() ?>