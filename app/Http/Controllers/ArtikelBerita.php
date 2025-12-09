<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Menampilkan daftar semua artikel berita (jika diperlukan).
     * Route: /artikel/artikelberita
     */
    public function artikelBerita()
    {
        // Logika untuk mengambil data daftar artikel dari database
        // Misalnya: $articles = Article::paginate(10);
        return view('Frontend.Artikel_Berita.artikelberita');
    }

    /**
     * Menampilkan artikel tentang Deteksi Dini & Tes Urine.
     * Route: /artikel/deteksidini
     */
    public function deteksiDini()
    {
        // Logika untuk mengambil data artikel "Deteksi Dini"
        return view('Frontend.Artikel_Berita.deteksidini');
    }

    /**
     * Menampilkan artikel tentang Dukungan Keluarga & Lingkungan.
     * Route: /artikel/dukungan
     */
    public function dukungan()
    {
        // Logika untuk mengambil data artikel "Dukungan"
        return view('Frontend.Artikel_Berita.dukungan');
    }

    /**
     * Menampilkan artikel tentang Penegakan Hukum Narkotika.
     * Route: /artikel/hukum
     */
    public function hukum()
    {
        // Logika untuk mengambil data artikel "Hukum"
        return view('Frontend.Artikel_Berita.hukum');
    }

    /**
     * Menampilkan artikel tentang Narkoba.
     * Route: /artikel/narkoba
     */
    public function narkoba()
    {
        // Logika untuk mengambil data artikel "Narkoba"
        return view('Frontend.Artikel_Berita.narkoba');
    }

    /**
     * Menampilkan artikel tentang P4GN.
     * Route: /artikel/p4gn
     */
    public function p4gn()
    {
        // Logika untuk mengambil data artikel "P4GN"
        return view('Frontend.Artikel_Berita.p4gn');
    }

    /**
     * Menampilkan artikel tentang Pelayanan Pascarehabilitasi.
     * Route: /artikel/pelayanan
     */
    public function pelayanan()
    {
        // Logika untuk mengambil data artikel "Pelayanan"
        return view('Frontend.Artikel_Berita.pelayanan');
    }

    /**
     * Menampilkan artikel tentang Pendidikan Anti-Narkoba di Sekolah & Kampus.
     * Route: /artikel/pendidikan
     */
    public function pendidikan()
    {
        // Logika untuk mengambil data artikel "Pendidikan"
        return view('Frontend.Artikel_Berita.pendidikan');
    }

    /**
     * Menampilkan artikel tentang Peran Masyarakat & Lingkungan Sosial.
     * Route: /artikel/peranmasyarakat
     */
    public function peranMasyarakat()
    {
        // Logika untuk mengambil data artikel "Peran Masyarakat"
        return view('Frontend.Artikel_Berita.peranmasyarakat');
    }

    /**
     * Menampilkan artikel tentang Peredaran Gelap & Penyelundupan Narkotika.
     * Route: /artikel/peredaran
     */
    public function peredaran()
    {
        // Logika untuk mengambil data artikel "Peredaran"
        return view('Frontend.Artikel_Berita.peredaran');
    }

    /**
     * Menampilkan artikel tentang Rehabilitasi & Pemulihan.
     * Route: /artikel/rehabilitasi
     */
    public function rehabilitasi()
    {
        // Logika untuk mengambil data artikel "Rehabilitasi"
        return view('Frontend.Artikel_Berita.rehabilitasi');
    }
}