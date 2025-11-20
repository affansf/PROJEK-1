<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;

class PelayananController extends Controller
{
    public function index()
    {
        $data = Pelayanan::all();
        return view('peredaran', compact('data'));
    }
}
