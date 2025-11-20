<?php

namespace App\Http\Controllers;

use App\Models\Narkoba;

class NarkobaController extends Controller
{
    public function index()
    {
        $data = Narkoba::all();
        return view('narkoba', compact('data'));
    }
}
