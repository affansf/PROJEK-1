<?php

namespace App\Http\Controllers;

use App\Models\Rehabilitasi;

class RehabilitasiController extends Controller
{
    public function index()
    {
        $data = Rehabilitasi::all();
        return view('rehabilitasi', compact('data'));
    }
}
