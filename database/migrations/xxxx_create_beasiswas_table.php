<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul beasiswa
            $table->string('institution'); // Nama instansi/kampus (misal: LPDP, Universitas Indonesia)
            $table->string('source_domain'); // Domain sumber resmi (misal: api.kemdikbud.go.id atau beasiswa.ui.ac.id)
            $table->string('source_url'); // Tautan asli pengumuman
            $table->enum('category', ['Pusat', 'PTN', 'PTS', 'Luar Negeri']); // Kategori sumber
            $table->text('description')->nullable(); // Ringkasan informasi beasiswa
            $table->date('deadline'); // Batas waktu pendaftaran (untuk Auto-Expire)
            $table->enum('status', ['active', 'closed'])->default('active'); // Status otomatis
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beasiswas');
    }
};