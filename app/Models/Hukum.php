<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hukum extends Model
{
    protected $table = 'hukum';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
