<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    // Halaman utama
    public function index()
    {
        $featuredScholarships = Beasiswa::where('status', 'active')
            ->where(function ($query) {
                $query->whereNull('deadline')
                      ->orWhereDate('deadline', '>=', today());
            })
            ->latest()
            ->take(6)
            ->get();

        return view('welcome', compact('featuredScholarships'));
    }

    // Halaman pencarian beasiswa
   
public function cariBeasiswa(Request $request)
{
    $campusScholarships = Beasiswa::latest()->get();

    return view('cari-beasiswa', compact('campusScholarships'));
}

    // Detail beasiswa
public function show($id)
{
    $scholarship = Beasiswa::findOrFail($id);

    return view('detail', compact('scholarship'));
}
}
