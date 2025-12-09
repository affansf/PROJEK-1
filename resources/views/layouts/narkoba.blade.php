<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narkoba</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light"> 
    
@include('layouts.Frontend.navbar') 

<section class="hero-training">
        <div class="container">
            <h1 class="mb-4 fw-bold">Mari Cari Tahu! Baca Informasi Terkini untuk Hidup Bersinar</h1>
            
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="d-flex gap-2">
                        <div class="search-container flex-grow-1">
                            <i class="fas fa-search search-icon"></i> 
                            <input type="text" class="form-control search-input w-100" 
                                placeholder="Penelusuran..." 
                                aria-label="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="container mt-4">
        @yield('content')
    </div>

<section class="latest-training mb-5">
    <div id="trainingCarousel" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="row flex-nowrap g-3" style="overflow-x: auto;">
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="card shadow-sm border-0 w-100">
                            <img src="img/n1.png" class="card-img-top p-2">
                            <div class="card-body pt-0">
                                <h5 class="card-title fw-bold fs-6">Pengertian Narkoba Dan Bahaya Narkoba Bagi Kesehatan</h5>
                                <p class="card-text text-muted small mb-1">BNNK Tulungagung</p>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="text-warning me-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </div>
                                <p class="card-text text-muted small mb-3">38 peserta</p>
                                <a href="#" class="btn btn-success w-100 fw-bold">Lihat</a>
                            </div>
                        </div>
                    </div>
            </section>

            @include('layouts.Frontend.footer')

<!-- Bootstrap JS -->
<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
</body>
</html>
