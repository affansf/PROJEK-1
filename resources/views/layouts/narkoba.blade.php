@extends('layouts.app')

@section('content')
{{-- Bagian Hero / Judul Halaman --}}
<section class="hero-training">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                {{-- Judul Kategori --}}
                <h1 class="mb-3 fw-bold text-white">Informasi & Berita: Narkoba</h1>
                <p class="text-white-50 mb-4">Temukan artikel dan berita terbaru seputar bahaya dan penanggulangan narkoba.</p>
                
                {{-- Form Pencarian --}}
                <form action="{{ route('artikel.narkoba') }}" method="GET" class="d-flex justify-content-center">
                    <div class="input-group" style="max-width: 500px;">
                        <input type="text" name="search" class="form-control" placeholder="Cari artikel narkoba..." value="{{ request('search') }}">
                        <button class="btn btn-light text-primary fw-bold" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- Daftar Artikel --}}
<div class="container mt-5 mb-5">
    @if(isset($articles) && $articles->count() > 0)
        <div class="row g-4">
            @foreach($articles as $item)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card shadow-sm border-0 w-100 h-100 transition-hover">
                    {{-- Gambar Artikel --}}
                    <div style="height: 200px; overflow: hidden; background-color: #f0f0f0;">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" 
                                 class="card-img-top w-100 h-100" 
                                 alt="{{ $item->title }}" 
                                 style="object-fit: cover;">
                        @else
                            {{-- Placeholder jika tidak ada gambar --}}
                            <div class="d-flex align-items-center justify-content-center h-100 text-muted">
                                <i class="far fa-image fa-3x"></i>
                            </div>
                        @endif
                    </div>
                    
                    <div class="card-body pt-3 d-flex flex-column">
                        {{-- Kategori Badge (Warna Primary/Biru untuk Narkoba) --}}
                        <div class="mb-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3">
                                Narkoba
                            </span>
                        </div>

                        {{-- Judul --}}
                        <h5 class="card-title fw-bold fs-6 mb-2">
                            <a href="{{ route('artikel.show', $item->slug) }}" class="text-decoration-none text-dark stretched-link">
                                {{ Str::limit($item->title, 50) }}
                            </a>
                        </h5>
                        
                        {{-- Sub Judul / Cuplikan --}}
                        <p class="card-text text-muted small mb-3 flex-grow-1">
                            {{ $item->subtitle ? Str::limit($item->subtitle, 60) : Str::limit(strip_tags($item->content), 60) }}
                        </p>
                        
                        {{-- Footer Card --}}
                        <div class="d-flex justify-content-between align-items-center mt-auto border-top pt-3">
                            <small class="text-muted">
                                <i class="far fa-calendar-alt me-1"></i> 
                                {{ $item->created_at->format('d M Y') }}
                            </small>
                            <small class="text-primary fw-bold">Baca <i class="fas fa-arrow-right ms-1"></i></small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-5 d-flex justify-content-center">
            {{ $articles->links() }}
        </div>
    @else
        {{-- Tampilan Jika Data Kosong --}}
        <div class="text-center py-5">
            <h4 class="mt-3 text-muted">Belum ada artikel ditemukan</h4>
        </div>
    @endif
</div>

<style>
    .transition-hover {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .transition-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
</style>
@endsection