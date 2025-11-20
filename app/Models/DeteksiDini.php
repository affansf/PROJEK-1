<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeteksiDini extends Model
{
    protected $table = 'deteksi_dini';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
