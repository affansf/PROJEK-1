<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Narkoba extends Model
{
    protected $table = 'narkoba';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
