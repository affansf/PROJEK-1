<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { margin: 0; padding: 0; overflow-x: hidden; }
    </style>
</head>

<body class="bg-light"> 
    
    @include('layouts.Frontend.navbar') 

    <div class="container" style="margin-top: 100px;">
        
        <!-- Pesan Sukses -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Pesan Error Validasi -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <div class="container mb-5" style="margin-top: 80px;">
        <div class="card p-4 shadow-lg" style="background: linear-gradient(180deg, #1976d2); color: white; border-radius: 15px;">
            <h3 class="mb-3 fw-bold">Form Laporan Warga (Anonim tersedia)</h3>
            <p>Gunakan form ini untuk melaporkan dugaan penyalahgunaan atau peredaran. Data pribadi tidak wajib.</p>

            <form action="/laporan/kirim" method="POST" enctype="multipart/form-data">
                <!-- @csrf WAJIB ADA DI SINI -->
                @csrf

                <label class="mt-3 fw-bold">Nama pengguna</label>
                <!-- Hapus tag </select> yang salah di sini -->
                <input type="text" class="form-control" name="nama_pengguna" placeholder="Masukkan nama lengkap anda" required>

                <label class="mt-3 fw-bold">Nomor Handphone</label>
                <!-- Hapus tag </select> yang salah di sini -->
                <input type="text" class="form-control" name="nomor_handphone" placeholder="Masukkan nomor handphone anda" required>

                <label class="mt-3 fw-bold">Alamat Rumah</label>
                <!-- Hapus tag </select> yang salah di sini -->
                <input type="text" class="form-control" name="alamat_rumah" placeholder="Masukkan alamat rumah anda" required>
        
                <label class="mt-3 fw-bold">Jenis Laporan</label>
                <select class="form-select" name="jenis_laporan" required>
                    <option value="Pengedaran">Pengedaran</option>
                    <option value="Penyalahgunaan">Penyalahgunaan</option>
                    <option value="Lainnya">Lainnya</option>
                </select>

                <label class="mt-3 fw-bold">Desa / Lokasi</label>
                <input type="text" class="form-control" name="lokasi" placeholder="Nama desa atau lokasi kejadian" required>

                <label class="mt-3 fw-bold">Rincian</label>
                <textarea class="form-control" name="rincian" rows="5" placeholder="Tuliskan detail yang Anda ketahui..." required></textarea>

                <label class="mt-3 fw-bold">Bukti Foto / Foto TKP</label>
                <input type="file" class="form-control" name="foto_bukti" accept="image/*">
                <small class="text-light" style="opacity: 0.8;">Format: JPG, PNG, JPEG. Opsional.</small>

                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" name="anonim" checked>
                    <label class="form-check-label">Kirim sebagai anonim</label>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-light px-4 fw-bold" style="color: #1976d2;">Kirim Laporan</button>
                    <button type="reset" class="btn btn-secondary px-4">Reset</button>
                </div>
            </form>

            <div class="mt-4 p-3 rounded" style="background-color: rgba(255,255,255,0.15);">
                <h6 class="fw-bold">Catatan Keamanan</h6>
                <ul>
                    <li>Jangan meng-upload data pribadi pihak lain tanpa izin.</li>
                    <li>Laporan anonim tetap diverifikasi oleh admin sebelum tindakan.</li>
                    <li>Pastikan foto TKP aman untuk diambil.</li>
                </ul>
            </div>
        </div>
    </div>

    @include('layouts.Frontend.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>