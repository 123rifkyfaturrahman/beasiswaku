<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $table = 'beasiswas';

    // Kolom-kolom yang diizinkan untuk diisi secara otomatis oleh sistem
    protected $fillable = [
        'title',
        'institution',
        'source_identifier',
        'source_domain',
        'source_url',
        'category',
        'description',
        'deadline',
        'education_level',
        'funding_type',
        'location',
        'status'
    ];

    protected function casts(): array
    {
        return [
            'deadline' => 'date',
        ];
    }
}