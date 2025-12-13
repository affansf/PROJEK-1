<?php

namespace App\Http\Controllers; // Sesuaikan namespace jika perlu

use App\Http\Controllers\Controller;
use App\Models\Artikel; // Import Model
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Helper function untuk mengambil artikel per kategori
     */
    private function getArticlesByCategory($category)
    {
        // Mengambil artikel terbaru berdasarkan kategori, 6 per halaman
        return Artikel::where('category', $category)->latest()->paginate(6);
    }

    public function narkoba()
    {
        $articles = $this->getArticlesByCategory('narkoba');
        $title = 'Narkoba';
        // Kita gunakan view yang sama (reusable) atau view spesifik
        return view('layouts.narkoba', compact('articles', 'title'));
    }

    public function p4gn()
    {
        $articles = $this->getArticlesByCategory('p4gn');
        $title = 'P4GN';
        return view('layouts.p4gn', compact('articles', 'title'));
    }
    
    // ... Lakukan hal yang sama untuk fungsi lainnya ...

    public function rehabilitasi()
    {
        $articles = $this->getArticlesByCategory('rehabilitasi');
        return view('layouts.rehabilitasi', compact('articles'));
    }

    public function hukum()
    {
        $articles = $this->getArticlesByCategory('hukum');
        return view('layouts.hukum', compact('articles'));
    }

    public function deteksidini()
    {
        $articles = $this->getArticlesByCategory('deteksidini');
        return view('layouts.deteksidini', compact('articles'));
    }

    public function peredaran()
    {
        $articles = $this->getArticlesByCategory('peredaran');
        return view('layouts.peredaran', compact('articles'));
    }

    public function peranmasyarakat()
    {
        $articles = $this->getArticlesByCategory('peranmasyarakat');
        return view('layouts.peranmasyarakat', compact('articles'));
    }

    public function pendidikan()
    {
        $articles = $this->getArticlesByCategory('pendidikan');
        return view('layouts.pendidikan', compact('articles'));
    }

    public function pelayanan()
    {
        $articles = $this->getArticlesByCategory('pelayanan');
        return view('layouts.pelayanan', compact('articles'));
    }

    public function dukungan()
    {
        $articles = $this->getArticlesByCategory('dukungan');
        return view('layouts.dukungan', compact('articles'));
    }

    /**
     * Menampilkan Detail Artikel untuk dibaca User
     */
    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        
        // Mengambil artikel terkait (random) untuk sidebar
        $related_articles = Artikel::where('category', $artikel->category)
                            ->where('id', '!=', $artikel->id)
                            ->limit(3)
                            ->get();

        return view('layouts.detail_artikel', compact('artikel', 'related_articles'));
    }
}