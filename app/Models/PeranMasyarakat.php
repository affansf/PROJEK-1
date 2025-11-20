<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeranMasyarakat extends Model
{
    protected $table = 'peran_masyarakat';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
