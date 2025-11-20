<?php

namespace App\Http\Controllers;

use App\Models\DeteksiDini;

class DeteksiDiniController extends Controller
{
    public function index()
    {
        $data = DeteksiDini::all();
        return view('deteksidini', compact('data'));
    }
}
