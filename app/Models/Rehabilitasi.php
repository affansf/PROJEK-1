<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rehabilitasi extends Model
{
    protected $table = 'rehabilitasi';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
