<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
    'nama_pengguna',
    'nomor_handphone',
    'alamat_rumah',
    'jenis_laporan',
    'lokasi',
    'rincian',
    'foto_bukti',
    'anonim',
    'status',   
];
protected $casts = [
        'anonim' => 'boolean',
    ];
}