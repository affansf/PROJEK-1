<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dukungan extends Model
{
    protected $table = 'dukungan';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
