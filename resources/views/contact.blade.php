@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="container my-4">

    {{-- Banner --}}
    <div class="text-center mb-5">
        <img src="{{ asset('img/kontakkami.jpg') }}" 
             alt="Kontak Kami Header" 
             class="img-fluid"
             style="width: 100%; max-width: 800px; height: auto; border-radius: 12px;">
    </div>

    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="row g-0">
            
            <div class="col-lg-5 bg-primary text-white p-5 position-relative">
                <div class="contact-info">
                    <h4 class="fw-bold mb-4">Informasi Kontak</h4>
                    <p class="mb-4 text-white-50">Silakan hubungi kami melalui saluran resmi berikut untuk layanan informasi atau pengaduan.</p>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                        </div>
                        <div>
                            <span class="d-block fw-bold">Alamat</span>
                            <small>Jl. M.T. Haryono No. 11, Cawang, Jakarta Timur</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-phone-alt fa-lg"></i>
                        </div>
                        <div>
                            <span class="d-block fw-bold">Call Center</span>
                            <small>184 (Bebas Pulsa)</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-envelope fa-lg"></i>
                        </div>
                        <div>
                            <span class="d-block fw-bold">Email</span>
                            <small>info@bnn.go.id</small>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h6 class="fw-bold mb-3">Ikuti Kami</h6>
                        <div class="d-flex gap-3">
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="circle-decoration"></div>
            </div>

            <div class="col-lg-7 p-5 bg-white">
                <h4 class="fw-bold mb-4 text-dark">Kirim Pesan</h4>
                <form action="#" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="name" placeholder="Nama Anda">
                                <label for="name">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-light border-0" id="email" placeholder="Email Anda">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="subject" placeholder="Subjek">
                                <label for="subject">Subjek</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-light border-0" placeholder="Pesan Anda" id="message" style="height: 150px"></textarea>
                                <label for="message">Pesan / Laporan</label>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="button" class="btn btn-primary btn-lg w-100 rounded-pill shadow-sm">Kirim Pesan <i class="fas fa-paper-plane ms-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.336199321946!2d106.863749314769!3d-6.219323995497676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4d36e0539c9%3A0x6310243452296d19!2sBadan%20Narkotika%20Nasional!5e0!3m2!1sid!2sid!4v1625555555555!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

@include('layouts.Frontend.footer')

@endsection