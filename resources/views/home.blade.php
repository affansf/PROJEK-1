<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Desa Bersinar</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-light"> 
    
    @include('layouts.Frontend.navbar') 
    
    <div class="container mt-4">
        @yield('content')
    </div>
    
    <div id="heroCarousel" class="carousel slide mt-3" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/slide1.jpg" class="d-block w-75 mx-auto rounded shadow" alt="Slide 1">
            </div>

            <div class="carousel-item">
                <a href="/laporan">
                    <img src="/img/slide2.jpg" class="d-block w-75 mx-auto rounded shadow" alt="Slide 2" style="cursor: pointer;">
                </a>
            </div>

            <div class="carousel-item">
                <a href="/bukusaku">
                    <img src="/img/slide4.jpg" class="d-block w-75 mx-auto rounded shadow" alt="Slide 3" style="cursor: pointer;">
                </a>
            </div>

            <div class="carousel-item">
                <img src="/img/slide3.jpg" class="d-block w-75 mx-auto rounded shadow" alt="Slide 4">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <img src="img/iconkiri.png" width="50" height="50" style="filter: invert(1);">
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <img src="img/iconkanan.png" width="50" height="50" style="filter: invert(1);">
        </button>
    </div>

    <div class="container-fluid ds-section mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 klc-image-col text-center">
                <img src="/img/desabersinarrr.png" alt="Ilustrasi DS" class="img-fluid DS-image" style="max-height: 300px;"> 
            </div>

            <div class="col-lg-6 col-md-12 ds-text-col">
                <h2 class="ds-title fw-bold">Apa itu Desa Bersinar?</h2>
                <p class="ds-description text-muted">
                    Desa Bersinar adalah wilayah yang memiliki batas dan wewenang untuk mengatur kepentingan warganya sesuai tradisi dan aturan yang berlaku. Desa Bersinar adalah desa atau kelurahan yang melaksanakan program P4GN secara aktif untuk mencegah dan memberantas penyalahgunaan serta peredaran narkoba. Program ini dijalankan dan dievaluasi oleh masyarakat bersama pemerintah, dengan dukungan lembaga nonpemerintah dan pihak swasta melalui pendampingan dan pembinaan.
                </p>
            </div>
        </div>
    </div>

    <div class="my-5"> 
        <div class="container"> 
            <div class="row text-center justify-content-center">
                <div class="col-md-5 mb-4 d-flex">
                    <div class="card card-info flex-fill p-3 border-0 shadow-sm hover-effect">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="img/pusat.png" alt="Ikon Pelatihan" class="info-icon me-3" width="60"> 
                            <div class="text-start">
                                <h4 class="info-title fw-bold">Pusat Edukasi</h4>
                                <p class="info-subtitle mb-0 text-muted">Pelajari Bahaya Narkoba & P4GN</p>
                            </div>
                        </div>
                        <a href="/narkoba" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col-md-5 mb-4 d-flex">
                    <div class="card card-info flex-fill p-3 border-0 shadow-sm hover-effect">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="img/bukusaku.png" alt="Ikon Pengetahuan" class="info-icon me-3" width="60"> 
                            <div class="text-start">
                                <h4 class="info-title fw-bold">Buku Saku</h4>
                                <p class="info-subtitle mb-0 text-muted">Akselerasi Indonesia Bersinar</p>
                            </div>
                        </div>
                        <a href="/bukusaku" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-primary text-white text-center py-3">
                <h4 class="mb-0"><i class="fas fa-history me-2"></i>Status Laporan Warga Terkini</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0 text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Tanggal</th>
                                <th>Lokasi</th>
                                <th>Jenis Laporan</th>
                                <th>Status Penanganan</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Variable $riwayatLaporan dikirim dari HomeController --}}
                            @forelse($riwayatLaporan as $laporan)
                            <tr>
                                <td>{{ $laporan->created_at->format('d M Y') }}</td>
                                <td>{{ Str::limit($laporan->lokasi, 20) }}</td>
                                <td>{{ $laporan->jenis_laporan }}</td>
                                <td>
                                    @if($laporan->status == 'Selesai')
                                        <span class="badge bg-success rounded-pill px-3 py-2">
                                            <i class="fas fa-check-circle me-1"></i> Ditindaklanjuti
                                        </span>
                                    @elseif($laporan->status == 'Sedang Diproses')
                                        <span class="badge bg-warning text-dark rounded-pill px-3 py-2">
                                            <i class="fas fa-spinner fa-spin me-1"></i> Sedang Diproses
                                        </span>
                                    @else
                                        <span class="badge bg-secondary rounded-pill px-3 py-2">
                                            <i class="fas fa-clock me-1"></i> Menunggu
                                        </span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-muted py-4">
                                    <i class="fas fa-info-circle me-2"></i><em>Belum ada laporan terkini.</em>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="instagram-section my-5">
        <div class="container"> <div class="text-center mb-4">
                <h4 class="fw-bold text-primary">Galeri Kegiatan Desa Bersinar</h4>
                <p class="text-muted">Ikuti update terbaru kami di Instagram</p>
            </div>

            <div class="instagram-wrapper w-100"> <iframe 
                    src="https://www.instagram.com/tulungagungstopnarkoba/embed"
                    class="instagram-iframe border-0 shadow-sm rounded" 
                    style="width: 100%; height: 600px; display: block;"> 
                    </iframe>
            </div>

            <div class="text-center mt-4">
                <a href="https://www.instagram.com/tulungagungstopnarkoba/" 
                   target="_blank" 
                   class="btn btn-primary instagram-btn px-5 py-2 rounded-pill shadow-sm">
                   <i class="fab fa-instagram me-2"></i> Kunjungi Profil Instagram
                </a>
            </div>
            
        </div>
    </div>

    @include('layouts.Frontend.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>