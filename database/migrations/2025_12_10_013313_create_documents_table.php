<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('file_path'); // Tempat menyimpan path file PDF
            $table->string('category')->default('Dasar Hukum'); // Untuk pengelompokan (e.g., 'Buku Saku', 'Dasar Hukum')
            $table->string('icon_class')->nullable(); // Untuk ikon Bootstrap (e.g., 'bi-book-half')
            $table->integer('order')->default(0); // Untuk urutan tampilan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
