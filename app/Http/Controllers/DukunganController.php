<?php

namespace App\Http\Controllers;

use App\Models\Dukungan;

class DukunganController extends Controller
{
    public function index()
    {
        $data = Dukungan::all();
        return view('dukungan', compact('data'));
    }
}
