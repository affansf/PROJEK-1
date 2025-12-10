<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_pengguna'   => 'required|string|max:255',
        'nomor_handphone' => 'required|string|max:20',
        'alamat_rumah'    => 'required|string',
        'jenis_laporan'   => 'required|string',
        'lokasi'          => 'required|string|max:255',
        'rincian'         => 'required|string',
        'foto_bukti'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // 1. Inisialisasi variabel foto
    $fotoPath = null;

    // 2. Cek apakah ada file yang diupload
    if ($request->hasFile('foto_bukti')) {
        // Simpan ke storage 'public' dalam folder 'bukti-laporan'
        $fotoPath = $request->file('foto_bukti')->store('bukti-laporan', 'public');
    }
    $validated['status'] = 'pending';
    // 3. Simpan ke database
    Laporan::create([
        'nama_pengguna'   => $validated['nama_pengguna'],
        'nomor_handphone' => $validated['nomor_handphone'],
        'alamat_rumah'    => $validated['alamat_rumah'],
        'jenis_laporan'   => $validated['jenis_laporan'],
        'lokasi'          => $validated['lokasi'],
        'rincian'         => $validated['rincian'],
        'foto_bukti'      => $fotoPath, // Path foto yang sudah disimpan
        'anonim'          => $request->has('anonim') ? 1 : 0,
        'status'          => 'Menunggu', // Default status (Kita akan buat kolom ini di langkah ke-2)
    ]);

    return back()->with('success', 'Laporan berhasil dikirim!');
    }
}