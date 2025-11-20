<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('deteksi_dini', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('gambar')->nullable(); // jika ingin ada gambar
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deteksi_dini');
    }
};
