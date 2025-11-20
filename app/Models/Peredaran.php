<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peredaran extends Model
{
    protected $table = 'peredaran';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
