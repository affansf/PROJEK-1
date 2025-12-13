<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('artikels', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique(); 
        $table->string('subtitle')->nullable();
        // 10 Kategori sesuai dropdown
        $table->enum('category', [
            'narkoba', 'p4gn', 'rehabilitasi', 'hukum', 
            'deteksidini', 'peredaran', 'peranmasyarakat', 
            'pendidikan', 'pelayanan', 'dukungan'
        ]); 
        $table->text('content'); // Deskripsi
        $table->string('image')->nullable();
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
