<?php

namespace App\Http\Controllers;

use App\Models\Laporan; // <--- Pastikan Model di-import
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data laporan dari database
        $riwayatLaporan = Laporan::all();

        // Mengirimkan variabel $riwayatLaporan ke view 'home'
        return view('home', compact('riwayatLaporan'));
    }
}