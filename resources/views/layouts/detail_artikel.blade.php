<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $artikel->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <meta property="og:title" content="{{ $artikel->title }}" />
    <meta property="og:description" content="{{ $artikel->subtitle }}" />
    <meta property="og:image" content="{{ asset('storage/' . $artikel->image) }}" />
</head>
<body class="bg-light"> 
    
@include('layouts.Frontend.navbar') 

<div class="container mt-5 pt-5">
    <div class="row">
        {{-- Kolom Kiri: Konten Artikel --}}
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 p-4 mb-4">
                <h1 class="fw-bold mb-3">{{ $artikel->title }}</h1>
                <p class="text-muted">{{ $artikel->subtitle }} | <i class="far fa-calendar"></i> {{ $artikel->created_at->format('d F Y') }}</p>
                
                @if($artikel->image)
                    <img src="{{ asset('storage/' . $artikel->image) }}" class="img-fluid rounded mb-4 w-100" alt="{{ $artikel->title }}">
                @endif

                <div class="article-content">
                    {!! $artikel->content !!}
                </div>

                <hr class="my-4">

                {{-- Fitur Bagikan (Share) --}}
                <div class="mb-4">
                    <h5>Bagikan Artikel ini:</h5>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="btn btn-primary btn-sm me-2"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="https://twitter.com/intent/tweet?text={{ $artikel->title }}&url={{ url()->current() }}" target="_blank" class="btn btn-info btn-sm text-white me-2"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="https://wa.me/?text={{ $artikel->title }} {{ url()->current() }}" target="_blank" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                </div>
            </div>

            {{-- Kolom Komentar (Disqus atau Simple UI) --}}
            <div class="card shadow-sm border-0 p-4">
                <h4 class="mb-4">Komentar</h4>
                
                {{-- Contoh Form Komentar Sederhana (Belum masuk DB User comment table, hanya UI) --}}
                <form class="mb-4">
                    <div class="mb-3">
                        <textarea class="form-control" rows="3" placeholder="Tulis komentar Anda..."></textarea>
                    </div>
                    <button type="button" class="btn btn-primary">Kirim Komentar</button>
                </form>

                {{-- List Komentar (Dummy) --}}
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                        <img src="https://ui-avatars.com/api/?name=User+Satu" class="rounded-circle" width="50" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="fw-bold mb-1">User Satu</h6>
                        <p class="mb-0 text-muted small">Artikel yang sangat informatif, terima kasih infonya.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kolom Kanan: Sidebar Artikel Terkait --}}
        <div class="col-lg-4">
            <div class="card shadow-sm border-0 p-3">
                <h5 class="fw-bold mb-3">Artikel Terkait</h5>
                @foreach($related_articles as $related)
                    <div class="d-flex mb-3 align-items-center">
                        <img src="{{ asset('storage/' . $related->image) }}" class="rounded me-3" width="80" height="60" style="object-fit:cover;">
                        <div>
                            <a href="{{ route('artikel.show', $related->slug) }}" class="text-decoration-none text-dark fw-bold" style="font-size: 0.9rem;">
                                {{ Str::limit($related->title, 40) }}
                            </a>
                            <p class="text-muted small mb-0">{{ $related->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('layouts.Frontend.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>