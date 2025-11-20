<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index()
    {
        $data = Pendidikan::all();
        return view('pendidikan', compact('data'));
    }
}
