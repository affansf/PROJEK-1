<?php

namespace App\Http\Controllers;

use App\Models\Peredaran;

class PeredaranController extends Controller
{
    public function index()
    {
        $data = Peredaran::all();
        return view('peredaran', compact('data'));
    }
}
