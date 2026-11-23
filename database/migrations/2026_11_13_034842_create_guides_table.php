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
    Schema::create('guides', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // Judul Artikel/Tips
        $table->string('slug')->unique(); // URL ramah SEO
        $table->string('category'); // Kategori (Misal: Tips Esai, Wawancara)
        $table->longText('content'); // Isi Artikel
        $table->string('thumbnail')->nullable(); // Gambar sampul
        $table->timestamps();
    });
}
};
