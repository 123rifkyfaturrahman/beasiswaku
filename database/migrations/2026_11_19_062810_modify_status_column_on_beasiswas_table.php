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
        DB::statement("
            ALTER TABLE beasiswas
            MODIFY status ENUM(
                'active',
                'upcoming',
                'unannounced',
                'closed'
            ) NOT NULL DEFAULT 'active'
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('beasiswas')
            ->whereIn('status', ['upcoming', 'unannounced'])
            ->update(['status' => 'closed']);

        DB::statement("
            ALTER TABLE beasiswas
            MODIFY status ENUM(
                'active',
                'closed'
            ) NOT NULL DEFAULT 'active'
        ");
    }
};
