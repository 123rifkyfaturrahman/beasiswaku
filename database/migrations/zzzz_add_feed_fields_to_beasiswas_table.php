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
        Schema::table('beasiswas', function (Blueprint $table) {
            $table->string('source_identifier', 64)->nullable()->unique();
            $table->string('education_level')->nullable();
            $table->string('funding_type')->nullable();
            $table->string('location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beasiswas', function (Blueprint $table) {
            $table->dropUnique(['source_identifier']);
            $table->dropColumn([
                'source_identifier',
                'education_level',
                'funding_type',
                'location',
            ]);
        });
    }
};
