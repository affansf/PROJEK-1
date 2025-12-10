<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriBukuSaku extends Model
{
    use HasFactory;

    protected $table = 'materi_bukusaku'; 

    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori',
        'file_path',
        'urutan',
    ];
}
