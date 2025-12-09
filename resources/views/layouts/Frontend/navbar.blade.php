<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #134784;">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="img/tuberna.png" alt="Logo" width="135" height="40" class="me-2">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">

                {{-- Menu Beranda --}}
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('/') ? 'fw-bold text-white' : 'text-white-50' }}" 
                        href="/">Beranda</a>
                </li>

                {{-- Menu Desa Bersinar --}}
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('desabersinar') ? 'fw-bold text-white' : 'text-white-50' }}" 
                        href="/desabersinar">Desa Bersinar</a>
                </li>

                {{-- Menu Buku Saku --}}
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('bukusaku') ? 'fw-bold text-white' : 'text-white-50' }}" 
                        href="/bukusaku">Buku saku</a>
                </li>
                
                {{-- Menu Artikel & Berita (Dropdown) --}}
                <li class="nav-item mx-2">
                    {{-- Cek apakah salah satu URL dalam dropdown aktif (Hanya untuk penanda warna teks) --}}
                    @php
                        $isArtikelActive = request()->is('narkoba') || 
                                           request()->is('p4gn') || 
                                           request()->is('rehabilitasi') || 
                                           request()->is('hukum') || 
                                           request()->is('deteksidini') || 
                                           request()->is('peredaran') || 
                                           request()->is('peranmasyarakat') || 
                                           request()->is('pendidikan') || 
                                           request()->is('pelayanan') || 
                                           request()->is('dukungan');
                    @endphp

                    {{-- Link Dropdown: Aktif = Putih Terang, Tidak Aktif = Putih Redup (text-white-50) --}}
                    <a class="nav-link {{ $isArtikelActive ? 'fw-bold text-white' : 'text-white-50' }}"
                    href="#submenuArtikel"
                    data-bs-toggle="collapse"
                    role="button"
                    aria-expanded="false">
                        Artikel & Berita ▼
                    </a>

                    <div id="submenuArtikel" class="collapse submenu-artikel"> 
                        <ul class="list-group list-group-flush">
                            
                            {{-- PERBAIKAN: Semua tautan kini menggunakan kelas 'text-muted' tanpa penanda aktif --}}
                            <li class="list-group-item">
                                <a href="/narkoba" 
                                   class="dropdown-item text-muted"
                                >Narkoba</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/p4gn" 
                                   class="dropdown-item text-muted"
                                >P4GN</a>
                            </li>
                            
                            <li class="list-group-item">
                                <a href="/rehabilitasi" 
                                   class="dropdown-item text-muted"
                                >Rehabilitasi & Pemulihan</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/hukum" 
                                   class="dropdown-item text-muted"
                                >Penegakan Hukum Narkotika</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/deteksidini" 
                                   class="dropdown-item text-muted"
                                >Deteksi Dini & Tes Urine</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/peredaran" 
                                   class="dropdown-item text-muted"
                                >Peredaran Gelap & Penyelundupan Narkotika</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/peranmasyarakat" 
                                   class="dropdown-item text-muted"
                                >Peran Masyarakat & Lingkungan Sosial</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/pendidikan" 
                                   class="dropdown-item text-muted"
                                >Pendidikan Anti-Narkoba di Sekolah & Kampus</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/pelayanan" 
                                   class="dropdown-item text-muted"
                                >Pelayanan Pascarehabilitasi</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/dukungan" 
                                   class="dropdown-item text-muted"
                                >Dukungan Keluarga & Lingkungan bagi Mantan Pecandu</a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Menu Laporan --}}
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('laporan') ? 'fw-bold text-white' : 'text-white-50' }}" 
                        href="/laporan">Laporan</a>
                </li>

                {{-- Menu Kontak Kami --}}
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('contact') ? 'fw-bold text-white' : 'text-white-50' }}" 
                        href="/contact">Kontak Kami</a>
                </li>

                {{-- Menu Pencarian --}}
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