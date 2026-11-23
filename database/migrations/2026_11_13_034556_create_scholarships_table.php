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
    Schema::create('scholarships', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // Nama Beasiswa
        $table->string('provider'); // Penyelenggara (misal: Kemendikbud, LPDP, Swasta)
        $table->string('education_level'); // Jenjang (SMA/SMK, D3, S1, S2, S3)
        $table->string('funding_type'); // Pendanaan (Fully Funded, Partial Funded, Bantuan Biaya)
        $table->string('location'); // Lokasi (Dalam Negeri, Luar Negeri, atau Nama Negara)
        $table->date('deadline'); // Batas Pendaftaran
        $table->text('description'); // Deskripsi & Syarat Singkat
        $table->string('official_url'); // Link Situs Resmi Penyelenggara (No Dead-End)
        $table->string('banner_image')->nullable(); // Poster/Gambar Beasiswa (opsional)
        $table->boolean('is_active')->default(true); // Status buka/tutup
        $table->timestamps();
    });
}
};
