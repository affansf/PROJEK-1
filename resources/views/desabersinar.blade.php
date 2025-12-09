@extends('layouts.app')

@section('title', 'Peta Kerawanan')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/desabersinar.css') }}">

<div class="container my-4">

    <div class="card shadow">
        <div class="card-header bg-primary text-white fw-bold text-center">
            PETA KERAWANAN PEREDARAN NARKOBA
            <br>
            KABUPATEN TULUNGAGUNG
        </div>

        <div class="text-center mb-3">
            <div id="mapTulungagung"></div>
        </div>

        <style>
            #mapTulungagung {
                height: 350px;
                width: 100%;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
            }
        </style>

        <hr class="my-4">

        <h5 class="fw-bold text-center mb-3">Filter Tingkat Kerawanan</h5>

        {{-- Tombol Filter --}}
        <div class="d-flex justify-content-center gap-2 flex-wrap mb-4">
            {{-- Tambahkan class 'btn-fixed' HANYA pada 4 tombol kategori ini --}}
            <button class="btn filter-btn btn-fixed bg-danger text-white" data-filter="Bahaya">Bahaya</button>
            <button class="btn filter-btn btn-fixed bg-warning text-dark" data-filter="Waspada">Waspada</button>
            <button class="btn filter-btn btn-fixed bg-success text-white" data-filter="Siaga">Siaga</button>
            <button class="btn filter-btn btn-fixed bg-info text-dark" data-filter="Aman">Aman</button>
            
            {{-- Tombol 'Tampilkan Semua' TIDAK diberi class btn-fixed agar ukurannya tetap menyesuaikan teks --}}
            <button class="btn filter-btn bg-secondary text-white active" data-filter="all">
                Tampilkan Semua
            </button>
        </div>

        <hr class="my-4">

        <h5 class="fw-bold mt-3 text-center">Data Kasus Narkotika Tahun 2025/2026</h5>

        <div class="table-fixed-height">
            <div class="table-responsive">
                <table class="table table-bordered table-hover mt-2 align-middle" id="tabelKerawanan">
                    <thead class="table-secondary">
                        <tr>
                            <th class="text-center">Kecamatan</th>
                            <th class="text-center">Jumlah Kasus</th>
                            <th class="text-center">Tingkat Kerawanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-level="Bahaya">
                            <td>Kedungwaru</td><td class="text-center">14</td>
                            <td class="text-center"><span class="badge bg-danger">Bahaya</span></td>
                        </tr>
                        <tr data-level="Bahaya">
                            <td>Ngunut</td><td class="text-center">13</td>
                            <td class="text-center"><span class="badge bg-danger">Bahaya</span></td>
                        </tr>
                        <tr data-level="Bahaya">
                            <td>Tulungagung</td><td class="text-center">8</td>
                            <td class="text-center"><span class="badge bg-danger">Bahaya</span></td>
                        </tr>

                        <tr data-level="Waspada">
                            <td>Boyolangu</td><td class="text-center">6</td>
                            <td class="text-center"><span class="badge bg-warning text-dark">Waspada</span></td>
                        </tr>
                        <tr data-level="Waspada">
                            <td>Ngantru</td><td class="text-center">6</td>
                            <td class="text-center"><span class="badge bg-warning text-dark">Waspada</span></td>
                        </tr>
                        <tr data-level="Waspada">
                            <td>Sumbergempol</td><td class="text-center">6</td>
                            <td class="text-center"><span class="badge bg-warning text-dark">Waspada</span></td>
                        </tr>
                        <tr data-level="Waspada">
                            <td>Kauman (Kalangbret)</td><td class="text-center">6</td>
                            <td class="text-center"><span class="badge bg-warning text-dark">Waspada</span></td>
                        </tr>

                        <tr data-level="Siaga">
                            <td>Rejotangan</td><td class="text-center">4</td>
                            <td class="text-center"><span class="badge bg-success">Siaga</span></td>
                        </tr>
                        <tr data-level="Siaga">
                            <td>Pakel</td><td class="text-center">2</td>
                            <td class="text-center"><span class="badge bg-success">Siaga</span></td>
                        </tr>
                        <tr data-level="Siaga">
                            <td>Bandung</td><td class="text-center">2</td>
                            <td class="text-center"><span class="badge bg-success">Siaga</span></td>
                        </tr>
                        <tr data-level="Siaga">
                            <td>Campurdarat</td><td class="text-center">2</td>
                            <td class="text-center"><span class="badge bg-success">Siaga</span></td>
                        </tr>

                        <tr data-level="Aman">
                            <td>Karangrejo</td><td class="text-center">1</td>
                            <td class="text-center"><span class="badge bg-info text-dark">Aman</span></td>
                        </tr>
                        <tr data-level="Aman">
                            <td>Besuki</td><td class="text-center">1</td>
                            <td class="text-center"><span class="badge bg-info text-dark">Aman</span></td>
                        </tr>
                        <tr data-level="Aman">
                            <td>Tanggunggunung</td><td class="text-center">1</td>
                            <td class="text-center"><span class="badge bg-info text-dark">Aman</span></td>
                        </tr>
                        <tr data-level="Aman">
                            <td>Gondang</td><td class="text-center">1</td>
                            <td class="text-center"><span class="badge bg-info text-dark">Aman</span></td>
                        </tr>
                        <tr data-level="Aman">
                            <td>Sendang</td><td class="text-center">0</td>
                            <td class="text-center"><span class="badge bg-info text-dark">Aman</span></td>
                        </tr>
                        <tr data-level="Aman">
                            <td>Kalidawir</td><td class="text-center">0</td>
                            <td class="text-center"><span class="badge bg-info text-dark">Aman</span></td>
                        </tr>
                        <tr data-level="Aman">
                            <td>Pucanglaban</td><td class="text-center">0</td>
                            <td class="text-center"><span class="badge bg-info text-dark">Aman</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- SCRIPT FILTER TABEL --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.filter-btn');
        const tableRows = document.querySelectorAll('#tabelKerawanan tbody tr');

        buttons.forEach(btn => {
            btn.addEventListener('click', function () {
                // 1. Ambil nilai filter dari tombol yang diklik
                const filterValue = this.getAttribute('data-filter');

                // 2. Update tampilan tombol (Active State)
                buttons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // 3. Filter Baris Tabel
                tableRows.forEach(row => {
                    const rowLevel = row.getAttribute('data-level');

                    // Jika filter 'all' ATAU level baris sama dengan filter, tampilkan
                    if (filterValue === 'all' || rowLevel === filterValue) {
                        row.style.display = ''; // Reset display (munculkan)
                    } else {
                        row.style.display = 'none'; // Sembunyikan
                    }
                });
            });
        });
    });
</script>

{{-- SCRIPT MAP LEAFLET --}}
<script>
    // Koordinat pusat Tulungagung
    const tulungagungCenter = [-8.0657, 111.9020];

    const map = L.map('mapTulungagung').setView(tulungagungCenter, 11);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(map);

    // --- CUSTOM ICONS ---
    const leafIcon = L.Icon.extend({
        options: {
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        }
    });

    const redIcon = new leafIcon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png' });
    const goldIcon = new leafIcon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png' }); 
    const greenIcon = new leafIcon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png' });
    const blueIcon = new leafIcon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png' });

    // --- DATA MARKERS ---
    const markers = [
        // BAHAYA
        { name: "Kedungwaru", coord: [-8.0538, 111.9168], color: "red", status: "Bahaya" },
        { name: "Ngunut", coord: [-8.1026, 112.0075], color: "red", status: "Bahaya" },
        { name: "Tulungagung", coord: [-8.0665, 111.9012], color: "red", status: "Bahaya" },

        // WASPADA
        { name: "Boyolangu", coord: [-8.1031, 111.8936], color: "gold", status: "Waspada" },
        { name: "Ngantru", coord: [-8.0050, 111.9450], color: "gold", status: "Waspada" },
        { name: "Sumbergempol", coord: [-8.0945, 111.9432], color: "gold", status: "Waspada" },
        { name: "Kauman", coord: [-8.0265, 111.8552], color: "gold", status: "Waspada" },

        // SIAGA
        { name: "Rejotangan", coord: [-8.1170, 112.0675], color: "green", status: "Siaga" },
        { name: "Pakel", coord: [-8.1547, 111.8268], color: "green", status: "Siaga" },
        { name: "Bandung", coord: [-8.1718, 111.7825], color: "green", status: "Siaga" },
        { name: "Campurdarat", coord: [-8.1628, 111.8628], color: "green", status: "Siaga" },

        // AMAN
        { name: "Karangrejo", coord: [-7.9911, 111.8975], color: "blue", status: "Aman" },
        { name: "Besuki", coord: [-8.2222, 111.7789], color: "blue", status: "Aman" },
        { name: "Tanggunggunung", coord: [-8.2430, 111.8845], color: "blue", status: "Aman" },
        { name: "Gondang", coord: [-8.0528, 111.8285], color: "blue", status: "Aman" },
        { name: "Sendang", coord: [-7.9660, 111.8830], color: "blue", status: "Aman" },
        { name: "Kalidawir", coord: [-8.1799, 111.9721], color: "blue", status: "Aman" },
        { name: "Pagerwojo", coord: [-7.9625, 111.7858], color: "blue", status: "Aman" },
        { name: "Pucanglaban", coord: [-8.2975, 111.9880], color: "blue", status: "Aman" }
    ];

    markers.forEach(m => {
        let chosenIcon;
        if (m.color === 'red') chosenIcon = redIcon;
        else if (m.color === 'gold') chosenIcon = goldIcon;
        else if (m.color === 'green') chosenIcon = greenIcon;
        else chosenIcon = blueIcon;

        L.marker(m.coord, { icon: chosenIcon })
            .addTo(map)
            .bindPopup(`<b>${m.name}</b><br>Status: ${m.status}`);
    });
</script>

@include('layouts.Frontend.footer')

@endsection