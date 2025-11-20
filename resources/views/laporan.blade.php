<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #00008B;">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="img/tuberna.png" alt="Logo" width="135" height="40" class="me-2">
        </a>

        <!-- Button Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item mx-2">
                    <a class="nav-link" href="/">Beranda</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link" href="/desabersinar">Desa Bersinar</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link" href="/bukusaku">Buku saku</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link"
                    href="#submenuArtikel"
                    data-bs-toggle="collapse"
                    role="button"
                    aria-expanded="false">
                        Artikel & Berita ▼
                    </a>

                        <!-- Submenu (muncul tepat di bawahnya) -->
                        <div id="submenuArtikel" class="collapse submenu-artikel">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="/narkoba" class="dropdown-item">Narkoba</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/p4gn" class="dropdown-item">P4GN</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/rehabilitasi" class="dropdown-item">Rehabilitasi & Pemulihan</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/hukum" class="dropdown-item">Penegakan Hukum Narkotika</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/deteksidini" class="dropdown-item">Deteksi Dini & Tes Urine</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/peredaran" class="dropdown-item">Peredaran Gelap & Penyelundupan Narkotika</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/peranmasyarakat" class="dropdown-item">Peran Masyarakat & Lingkungan Sosial</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/pendidikan" class="dropdown-item">Pendidikan Anti-Narkoba di Sekolah & Kampus</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/pelayanan" class="dropdown-item">Pelayanan Pascarehabilitasi</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/dukungan" class="dropdown-item">Dukungan Keluarga & Lingkungan bagi Mantan Pecandu</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('laporan') ? 'fw-bold text-white' : 'text-light' }}"
                       href="/laporan">Laporan</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link" href="/contact">Kontak Kami</a>
                </li>

                <!-- SEARCH BAR -->
                <li class="nav-item ms-3">
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <input 
                                class="form-control" 
                                type="search" 
                                placeholder="Cari..." 
                                aria-label="Search">
                            <button class="btn btn-light" type="submit">
                                🔍
                            </button>
                        </div>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- ===== FORM LAPORAN ===== -->
<div class="container mt-3 mb-3">

    <div class="card p-4 shadow-lg" style="background: linear-gradient(180deg, #1a80d7, #0b60ad); color: white; border-radius: 15px;">
        <h3 class="mb-3 fw-bold">Form Laporan Warga (Anonim tersedia)</h3>
        <p>Gunakan form ini untuk melaporkan dugaan penyalahgunaan atau peredaran. Data pribadi tidak wajib.</p>

        <form action="/laporan/kirim" method="POST">
            @csrf

            <!-- Jenis Laporan -->
            <label class="mt-3 fw-bold">Jenis Laporan</label>
            <select class="form-select" name="jenis_laporan" required>
                <option value="Pengedaran">Pengedaran</option>
                <option value="Penyalahgunaan">Penyalahgunaan</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <!-- Desa / Lokasi -->
            <label class="mt-3 fw-bold">Desa / Lokasi</label>
            <input type="text" class="form-control" name="lokasi" placeholder="Nama desa atau lokasi kejadian" required>

            <!-- Rincian -->
            <label class="mt-3 fw-bold">Rincian</label>
            <textarea class="form-control" name="rincian" rows="5" placeholder="Tuliskan detail yang Anda ketahui..." required></textarea>

            <!-- Kirim sebagai anonim -->
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="anonim" checked>
                <label class="form-check-label">Kirim sebagai anonim</label>
            </div>

            <!-- Tombol -->
            <div class="mt-4">
                <button type="submit" class="btn btn-light px-4">Kirim Laporan</button>
                <button type="reset" class="btn btn-secondary px-4">Reset</button>
            </div>
        </form>

        <!-- Catatan Keamanan -->
        <div class="mt-4 p-3 rounded" style="background-color: rgba(255,255,255,0.15);">
            <h6 class="fw-bold">Catatan Keamanan</h6>
            <ul>
                <li>Jangan meng-upload data pribadi pihak lain tanpa izin.</li>
                <li>Laporan anonim tetap diverifikasi oleh admin sebelum tindakan.</li>
            </ul>
        </div>
    </div>

<!-- Bootstrap JS -->
<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
</body>
</html>
