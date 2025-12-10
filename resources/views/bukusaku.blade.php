@extends('layouts.app')

@section('content')

@include('layouts.Frontend.navbar')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/bukusaku.css') }}">
@endpush

<div class="container py-4">
    
    <div class="text-center mb-5">
        <img src="{{ asset('img/bukusakubanner.jpg') }}" 
            alt="Buku Saku Header" 
            class="img-fluid" 
            style="width: 100%; max-width: 800px; height: auto; border-radius: 12px;">
    </div>

    <div class="row">
        
        {{-- KOLOM KIRI: MENU DAFTAR FILE (DINAMIS) --}}
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-bold py-3">
                    <i class="bi bi-list-ul me-2"></i> Daftar Dokumen
                </div>
                
                <div class="list-group list-group-flush">
                    
                    {{-- 1. KATEGORI BUKU SAKU --}}
                    @if($bukuSaku->isNotEmpty())
                        <div class="p-2 bg-light text-primary fw-bold small ps-3 border-top border-bottom">
                            Buku Saku
                        </div>
                    @endif
                    @forelse($bukuSaku as $materi)
                    <button
                        class="list-group-item list-group-item-action py-3 btn-pdf {{ $loop->first && !$defaultFile || ($defaultFile && $defaultFile === $materi->file_path) ? 'active' : '' }}" 
                        data-url="{{ route('bukusaku.file', $materi) }}" 
                        data-judul="{{ $materi->judul }}">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-book-half text-warning fs-4 me-3 icon-doc"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">{{ $materi->judul }}</h6>
                                <small class="text-muted text-item-desc">{{ $materi->deskripsi }}</small>
                            </div>
                        </div>
                    </button>
                    @empty
                        {{-- Opsional: pesan jika kosong --}}
                    @endforelse

                    {{-- PEMISAH KATEGORI: Dasar Hukum & Regulasi --}}
                    @if($dasarHukum->isNotEmpty())
                    <div class="p-2 bg-light text-secondary fw-bold small ps-3 border-top border-bottom">
                        Dasar Hukum & Regulasi
                    </div>
                    @endif

                    {{-- 2. KATEGORI DASAR HUKUM & REGULASI --}}
                    @forelse($dasarHukum as $materi)
                    <button
                        class="list-group-item list-group-item-action py-3 btn-pdf {{ $defaultFile && $defaultFile === $materi->file_path ? 'active' : '' }}" 
                        data-url="{{ route('bukusaku.file', $materi) }}"
                        data-judul="{{ $materi->judul }}">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-pdf-fill text-danger fs-4 me-3 icon-doc"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">{{ $materi->judul }}</h6>
                                <small class="text-muted text-item-desc">{{ $materi->deskripsi }}</small>
                            </div>
                        </div>
                    </button>
                    @empty
                        {{-- Opsional: pesan jika kosong --}}
                    @endforelse

                    {{-- PEMISAH KATEGORI: Lainnya --}}
                    @if($lainnya->isNotEmpty())
                    <div class="p-2 bg-light text-secondary fw-bold small ps-3 border-top border-bottom">
                        Dokumen Lainnya
                    </div>
                    @endif

                    {{-- 3. KATEGORI LAINNYA --}}
                    @forelse($lainnya as $materi)
                    <button
                        class="list-group-item list-group-item-action py-3 btn-pdf {{ $defaultFile && $defaultFile === $materi->file_path ? 'active' : '' }}" 
                        data-url="{{ route('bukusaku.file', $materi) }}"
                        data-judul="{{ $materi->judul }}">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-text text-info fs-4 me-3 icon-doc"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">{{ $materi->judul }}</h6>
                                <small class="text-muted text-item-desc">{{ $materi->deskripsi }}</small>
                            </div>
                        </div>
                    </button>
                    @empty
                        {{-- Opsional: pesan jika kosong --}}
                    @endforelse

                </div>
            </div>
        </div>

        {{-- KOLOM KANAN: PDF VIEWER --}}
        <div class="col-lg-8">
            <div class="card shadow border-0 h-100">
                <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-eye text-primary me-2"></i>
                        <span class="fw-bold" id="viewer-title">
                            @if($defaultFile)
                                Pratinjau Dokumen
                            @else
                                Tidak Ada Dokumen
                            @endif
                        </span>
                    </div>
                    <a id="btn-download" 
                        href="#"
                        class="btn text-white px-4 rounded-pill disabled" 
                        style="background-color: #28a745;"
                        download>
                        <i class="bi bi-cloud-arrow-down me-2"></i> Download
                    </a>
                </div>

                <div class="card-body p-0">
                    <iframe 
                        id="pdf-viewer"
                        src="about:blank"
                        width="100%" 
                        height="750px" 
                        style="border: none; background-color: #f4f4f4;"
                        allow="autoplay">
                    </iframe>
                    @if(!$defaultFile && $bukuSaku->isEmpty() && $dasarHukum->isEmpty() && $lainnya->isEmpty())
                    <div class="p-5 text-center text-muted">
                        <p>Belum ada dokumen yang tersedia untuk dilihat.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.Frontend.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.btn-pdf');
        const viewer = document.getElementById('pdf-viewer');
        const downloadBtn = document.getElementById('btn-download');
        const viewerTitle = document.getElementById('viewer-title');

        // Cari tombol aktif (berdasarkan $defaultFile), kalau nggak ada pakai tombol pertama
        let activeBtn = document.querySelector('.btn-pdf.active') || buttons[0];

        if (activeBtn) {
            const pdfUrl = activeBtn.getAttribute('data-url');
            const judul = activeBtn.getAttribute('data-judul');

            viewer.src = pdfUrl + '#toolbar=1';
            downloadBtn.href = pdfUrl;
            viewerTitle.textContent = judul;
            downloadBtn.classList.remove('disabled');
        } else {
            viewerTitle.textContent = "Tidak Ada Dokumen";
        }

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // 1. Kelola status 'active'
                buttons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // 2. Dapatkan data
                const pdfUrl = this.getAttribute('data-url');
                const judul = this.getAttribute('data-judul');
                
                // 3. Update viewer src dan download link
                viewer.src = pdfUrl + '#toolbar=1';
                downloadBtn.href = pdfUrl;
                viewerTitle.textContent = judul;
                downloadBtn.classList.remove('disabled');
            });
        });
    });
</script>
@endsection