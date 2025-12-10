/* File: public/js/bukusaku.js */

document.addEventListener("DOMContentLoaded", function() {
    
    // 1. Definisikan Elemen
    const buttons = document.querySelectorAll('.btn-pdf');
    const pdfViewer = document.getElementById('pdf-viewer');
    const downloadBtn = document.getElementById('btn-download');

    // 2. Pasang Event Listener pada setiap tombol
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            
            // Ambil URL dari atribut data-url
            const fileUrl = this.getAttribute('data-url');

            // Jika URL ada, lakukan aksi
            if (fileUrl) {
                // Ganti PDF Viewer
                // Parameter #toolbar=1 memunculkan menu print/save bawaan browser
                pdfViewer.src = fileUrl + "#toolbar=1";
                
                // Ganti Link Download tombol hijau
                downloadBtn.href = fileUrl;
            }

            // --- LOGIKA TAMPILAN (WARNA BIRU) ---
            
            // A. Reset semua tombol menjadi tampilan standar (putih)
            buttons.forEach(btn => {
                btn.classList.remove('active');
                
                // Reset teks deskripsi jadi abu-abu
                const desc = btn.querySelector('.text-item-desc');
                if(desc) {
                    desc.classList.remove('text-light');
                    desc.classList.add('text-muted');
                }

                // Reset ikon (kembalikan ke warna asli: kuning/merah)
                const icon = btn.querySelector('.icon-doc');
                if(icon) {
                    icon.classList.remove('text-white');
                    if(icon.classList.contains('bi-book-half')) {
                        icon.classList.add('text-warning');
                    } else {
                        icon.classList.add('text-danger');
                    }
                }
            });

            // B. Set tombol yang DIKLIK menjadi Aktif (Biru)
            this.classList.add('active');

            // Ubah teks deskripsi jadi putih
            const activeDesc = this.querySelector('.text-item-desc');
            if(activeDesc) {
                activeDesc.classList.remove('text-muted');
                activeDesc.classList.add('text-light');
            }

            // Ubah ikon jadi putih
            const activeIcon = this.querySelector('.icon-doc');
            if(activeIcon) {
                activeIcon.classList.remove('text-warning');
                activeIcon.classList.remove('text-danger');
                activeIcon.classList.add('text-white');
            }
        });
    });
});

document.querySelectorAll('.btn-pdf').forEach(button => {
    button.addEventListener('click', function () {
        document.getElementById('pdf-viewer').src = this.dataset.url;
        document.getElementById('btn-download').href = this.dataset.url;

        document.querySelectorAll('.btn-pdf').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});
