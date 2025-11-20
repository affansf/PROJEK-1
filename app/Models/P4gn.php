<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P4gn extends Model
{
    protected $table = 'p4gn';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
