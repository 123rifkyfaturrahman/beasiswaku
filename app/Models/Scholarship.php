<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'provider',
        'education_level',
        'funding_type',
        'location',
        'deadline',
        'description',
        'official_url',
        'banner_image',
        'is_active',
    ];
}
