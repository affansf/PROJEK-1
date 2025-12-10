<?php

namespace App\Http\Controllers;

use App\Models\MateriBukuSaku;
class BukuSakuController extends Controller
{
    public function index()
    {
        $materis = MateriBukuSaku::orderBy('urutan', 'asc')
                                 ->orderBy('id', 'asc')
                                 ->get();

        // Pisahkan materi berdasarkan kategori
        $bukuSaku = $materis->filter(fn ($m) => $m->kategori === 'Buku Saku');
        $dasarHukum = $materis->filter(fn ($m) => $m->kategori === 'Dasar Hukum & Regulasi');
        $lainnya = $materis->filter(fn ($m) => $m->kategori === 'Lainnya');
        
        // Pilih file pertama yang ada sebagai default untuk viewer
        $defaultFile = $materis->first() ? $materis->first()->file_path : null;

        return view('bukusaku', compact('bukuSaku', 'dasarHukum', 'lainnya', 'defaultFile'));
    }
}
