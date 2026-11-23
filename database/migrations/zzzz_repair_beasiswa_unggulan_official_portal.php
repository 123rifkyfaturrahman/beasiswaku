<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('beasiswas')
            ->where('title', 'Beasiswa Unggulan Masyarakat Berprestasi 2026')
            ->where('source_url', 'https://beasiswa.kemdikbud.go.id')
            ->update([
                'source_domain' => 'beasiswaunggulan.kemendikdasmen.go.id',
                'source_url' => 'https://beasiswaunggulan.kemendikdasmen.go.id/',
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('beasiswas')
            ->where('title', 'Beasiswa Unggulan Masyarakat Berprestasi 2026')
            ->where('source_url', 'https://beasiswaunggulan.kemendikdasmen.go.id/')
            ->update([
                'source_domain' => 'api.kemdikbud.go.id',
                'source_url' => 'https://beasiswa.kemdikbud.go.id',
            ]);
    }
};
