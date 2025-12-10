<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuSakuController extends Controller
{
    public function index()
    {
        $documents = Document::orderBy('category')->get();
        return view('bukusaku', compact('documents'));
    }

    // Tambahkan method untuk menampilkan PDF
    public function show($id)
    {
        $document = Document::findOrFail($id);

        // Path file PDF
        $filePath = 'public/' . $document->file;

        // Cek apakah file ada
        if (!Storage::exists($filePath)) {
            abort(404, "File tidak ditemukan di storage");
        }

        // Buka file sebagai response agar bisa ditampilkan di <embed>
        return response()->file(storage_path('app/' . $filePath));
    }
}
