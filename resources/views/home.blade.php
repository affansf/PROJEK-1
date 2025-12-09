<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta-name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet">
</head>

<body class="bg-light"> 
    
@include('layouts.Frontend.navbar') 
    
    <div class="container mt-4">
        @yield('content')
    </div>
    

<div id="heroCarousel" class="carousel slide mt-3" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="/img/slide1.jpg" class="d-block w-75 mx-auto" alt="Slide 1">
        </div>

        <div class="carousel-item">
        <a href="/laporan">
            <img src="/img/slide2.jpg" class="d-block w-75 mx-auto" alt="Slide 2" style="cursor: pointer;">
        </a>
        </div>

        <div class="carousel-item">
        <a href="/bukusaku">
            <img src="/img/slide4.jpg" class="d-block w-75 mx-auto" alt="Slide 3" style="cursor: pointer;">
        </a>
        </div>

        <div class="carousel-item">
            <img src="/img/slide3.jpg" class="d-block w-75 mx-auto" alt="Slide 4">
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <img src="img/iconkiri.png" 
            width="50" height="50" 
            style="filter: invert(1);">
</button>

<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <img src="img/iconkanan.png" 
            width="50" height="50" 
            style="filter: invert(1);">
</button>
</div>

<div class="container-fluid ds-section mt-5 mb-5">
    <div class="row align-items-center">
 
            <div class="col-lg-6 col-md-12 klc-image-col">
                    <img src="/img/desabersinarrr.png" alt="Ilustrasi DS" class="img-fluid DS-image"> 
            </div>

            <div class="col-lg-6 col-md-12 ds-text-col">
            <h2 class="ds-title">Apa itu Desa Bersinar ?</h2>
            <p class="ds-description">
                Desa Bersinar adalah wilayah yang memiliki batas dan wewenang untuk mengatur kepentingan warganya sesuai tradisi dan aturan yang berlaku. Desa Bersinar adalah desa atau kelurahan yang melaksanakan program P4GN secara aktif untuk mencegah dan memberantas penyalahgunaan serta peredaran narkoba. Program ini dijalankan dan dievaluasi oleh masyarakat bersama pemerintah, dengan dukungan lembaga nonpemerintah dan pihak swasta melalui pendampingan dan pembinaan.
        </div>
    </div>
</div>

<div class="my-5"> 
    <div class="container"> <div class="row text-center justify-content-center">
            
            <div class="col-md-5 mb-4 d-flex">
                <div class="card card-info flex-fill p-3 border-0 shadow-sm">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="img/pusat.png" alt="Ikon Pelatihan" class="info-icon me-3"> <div class="text-start">
                            <h4 class="info-title">Pusat Edukasi Anti Narkoba</h4>
                            <p class="info-subtitle mb-0">Pelajari Bahaya Narkoba & P4GN</p>
                        </div>
                    </div>
                    <a href="/narkoba" class="stretched-link"></a>
                </div>
            </div>

            <div class="col-md-5 mb-4 d-flex">
                <div class="card card-info flex-fill p-3 border-0 shadow-sm">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="img/bukusaku.png" alt="Ikon Pengetahuan" class="info-icon me-3"> <div class="text-start">
                            <h4 class="info-title">Buku Saku Akselerasi Indonesia Bersinar</h4>
                            <p class="info-subtitle mb-0">Jelajahi Program 19 Gadis Bersinar</p>
                        </div>
                    </div>
                    <a href="/bukusaku" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="instagram-section">

    <div class="instagram-wrapper">
        <iframe 
            src="https://www.instagram.com/tulungagungstopnarkoba/embed"
            class="instagram-iframe">
        </iframe>
    </div>

    <div class="text-center mt-3">
        <a href="https://www.instagram.com/tulungagungstopnarkoba/" 
            target="_blank" 
            class="btn btn-primary instagram-btn">
            Kunjungi Instagram
        </a>
    </div>
</div>
@include('layouts.Frontend.footer')

<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
</body>
</html>