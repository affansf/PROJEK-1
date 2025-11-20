<?php

namespace App\Http\Controllers;

use App\Models\PeranMasyarakat;

class PeranMasyarakatController extends Controller
{
    public function index()
    {
        $data = PeranMasyarakat::all();
        return view('peranmasyarakat', compact('data'));
    }
}
