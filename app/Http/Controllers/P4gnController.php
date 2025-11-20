<?php

namespace App\Http\Controllers;

use App\Models\P4gn;

class P4gnController extends Controller
{
    public function index()
    {
        $data = P4gn::all();
        return view('p4gn', compact('data'));
    }
}
