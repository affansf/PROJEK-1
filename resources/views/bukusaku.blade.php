@extends('layouts.app')

@section('content')

@include('layouts.Frontend.navbar')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


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
        
        {{-- KOLOM KIRI: MENU DAFTAR FILE --}}
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-bold py-3">
                    <i class="bi bi-list-ul me-2"></i> Daftar Dokumen
                </div>
                
                {{-- LIST GROUP --}}
                <div class="list-group list-group-flush">
                    
                    {{-- 1. BUKU SAKU --}}
                    <button class="list-group-item list-group-item-action active py-3 btn-pdf" 
                            data-url="{{ asset('files/Buku-Saku-Gadis-Bersinar.pdf') }}">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-book-half text-warning fs-4 me-3 icon-doc"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Buku Saku Gadis Bersinar</h6>
                                <small class="text-muted text-item-desc">Pedoman Akselerasi P4GN</small>
                            </div>
                        </div>
                    </button>

                    <div class="p-2 bg-light text-secondary fw-bold small ps-3 border-top border-bottom">
                        Dasar Hukum & Regulasi
                    </div>

                    {{-- 2. UU NO 35 --}}
                    <button class="list-group-item list-group-item-action py-3 btn-pdf" 
                            data-url="{{ asset('files/hukum1.pdf') }}">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-pdf-fill text-danger fs-4 me-3 icon-doc"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">UU No. 35 Tahun 2009</h6>
                                <small class="text-muted text-item-desc">Tentang Narkotika</small>
                            </div>
                        </div>
                    </button>

                    {{-- 3. INPRES NO 2 --}}
                    <button class="list-group-item list-group-item-action py-3 btn-pdf" 
                            data-url="{{ asset('files/hukum2.pdf') }}">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-pdf-fill text-danger fs-4 me-3 icon-doc"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">INPRES No. 2 Tahun 2020</h6>
                                <small class="text-muted text-item-desc">Rencana Aksi Nasional</small>
                            </div>
                        </div>
                    </button>

                    {{-- 4. PERMENDAGRI NO 12 --}}
                    <button class="list-group-item list-group-item-action py-3 btn-pdf" 
                            data-url="{{ asset('files/hukum4.pdf') }}">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-pdf-fill text-danger fs-4 me-3 icon-doc"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Permendagri No. 12/2019</h6>
                                <small class="text-muted text-item-desc">Fasilitasi P4GN</small>
                            </div>
                        </div>
                    </button>

                    {{-- 5. PERMENDES NO 7 --}}
                    <button class="list-group-item list-group-item-action py-3 btn-pdf" 
                            data-url="{{ asset('files/hukum5.pdf') }}">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-pdf-fill text-danger fs-4 me-3 icon-doc"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Permendes No. 7/2020</h6>
                                <small class="text-muted text-item-desc">Prioritas Dana Desa</small>
                            </div>
                        </div>
                    </button>

                    {{-- 6. PERKA BNN NO 6 --}}
                    <button class="list-group-item list-group-item-action py-3 btn-pdf" 
                            data-url="{{ asset('files/hukum3.pdf') }}">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-pdf-fill text-danger fs-4 me-3 icon-doc"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">PERKA BNN No. 6/2020</h6>
                                <small class="text-muted text-item-desc">Rencana Strategis BNN</small>
                            </div>
                        </div>
                    </button>

                </div>
            </div>
        </div>

        {{-- KOLOM KANAN: PDF VIEWER --}}
        <div class="col-lg-8">
            <div class="card shadow border-0 h-100">
                <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-eye text-primary me-2"></i>
                        <span class="fw-bold">Pratinjau Dokumen</span>
                    </div>
                    <a id="btn-download" 
                       href="{{ asset('files/Buku-Saku-Gadis-Bersinar.pdf') }}" 
                       class="btn text-white px-4 rounded-pill" 
                       style="background-color: #28a745;"
                       download>
                       <i class="bi bi-cloud-arrow-down me-2"></i> Download
                    </a>
                </div>

                <div class="card-body p-0">
                    <iframe 
                        id="pdf-viewer"
                        src="{{ asset('files/Buku-Saku-Gadis-Bersinar.pdf') }}#toolbar=1" 
                        width="100%" 
                        height="750px" 
                        style="border: none; background-color: #f4f4f4;"
                        allow="autoplay">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.Frontend.footer')

<script src="{{ asset('js/bukusaku.js') }}"></script>
@endsection