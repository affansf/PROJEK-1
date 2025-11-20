<?php

namespace App\Http\Controllers;

use App\Models\Hukum;

class HukumController extends Controller
{
    public function index()
    {
        $data = Hukum::all();
        return view('hukum', compact('data'));
    }
}
