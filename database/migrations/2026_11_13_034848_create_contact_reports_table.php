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
    Schema::create('contact_reports', function (Blueprint $table) {
        $table->id();
        $table->string('sender_name'); // Nama Pengirim
        $table->string('sender_email'); // Email Pengirim
        $table->string('subject'); // Jenis Laporan (Link Rusak, Info Kedaluwarsa)
        $table->text('message'); // Detail Pesan/Kendala
        $table->boolean('is_resolved')->default(false); // Status penanganan admin
        $table->timestamps();
    });
}
};
