<?php

use App\Models\Scholarship;
use App\Models\Beasiswa;

it('links to home, scholarship search, and bookmarks from the detail page', function () {
    $response = $this->get(route('scholarships.show', [
        'id' => 'selected-scholarship',
        'title' => 'Beasiswa Pilihan',
    ]));

    $response->assertOk()
        ->assertSee('href="'.route('home').'"', false)
        ->assertSee('href="'.route('bookmark').'"', false)
        ->assertSee('href="'.route('cari.beasiswa').'"', false)
        ->assertSee('href="'.route('contact').'"', false)
        ->assertSee('href="'.route('login').'"', false)
        ->assertSee('action="'.route('cari.beasiswa').'"', false)
        ->assertSee('name="keyword"', false)
        ->assertDontSee('href="#"', false);
});

it('renders the scholarship selected from the catalog', function () {
    $response = $this->get(route('scholarships.show', [
        'id' => 'tanoto-teladan-2027',
        'title' => 'Program Beasiswa TELADAN 2027',
        'provider' => 'Tanoto Foundation',
        'level' => 'Mahasiswa baru S1',
        'funding' => 'Biaya kuliah dan biaya hidup',
        'location' => 'Indonesia',
        'deadline' => '7 September 2026',
        'status' => 'Pendaftaran telah ditutup.',
        'url' => 'https://www.tanotofoundation.org/teladan-2027/',
        'description' => 'Program beasiswa kepemimpinan untuk mahasiswa.',
        'icon' => 'TF',
        'program_type' => 'Beasiswa Yayasan',
        'category' => 'beranda',
    ]));

    $response->assertOk()
        ->assertSee('Program Beasiswa TELADAN 2027')
        ->assertSee('Tanoto Foundation')
        ->assertSee('Biaya kuliah dan biaya hidup')
        ->assertSee('Program beasiswa kepemimpinan untuk mahasiswa.')
        ->assertDontSee('Beasiswa LPDP Reguler');
});

it('renders synchronized scholarships on the home and search pages', function () {
    $beasiswa = Beasiswa::create([
        'title' => 'Beasiswa Kampus Otomatis',
        'institution' => 'Universitas Contoh',
        'source_identifier' => hash('sha256', 'feed|scholarship-1'),
        'source_domain' => 'beasiswa.example.ac.id',
        'source_url' => 'https://beasiswa.example.ac.id/program/1',
        'category' => 'PTN',
        'description' => 'Informasi yang disinkronkan dari feed resmi kampus.',
        'deadline' => '2027-03-01',
        'education_level' => 'S1',
        'funding_type' => 'Biaya pendidikan',
        'location' => 'Indonesia',
        'status' => 'active',
    ]);

    foreach ([route('home'), route('cari.beasiswa')] as $page) {
        $response = $this->get($page);

        $response->assertOk()
            ->assertSee($beasiswa->title)
            ->assertSee($beasiswa->institution)
            ->assertSee('Beasiswa LPDP 2026 Tahap 2')
            ->assertSee('Beasiswa Pemerintah Jepang (MEXT) 2027')
            ->assertSee('Erasmus Mundus Joint Masters 2027');
    }
});

it('includes legacy database scholarships in the home and search catalogs', function () {
    $scholarship = Scholarship::create([
        'title' => 'Beasiswa Data Sains',
        'provider' => 'Universitas Contoh',
        'education_level' => 'S2',
        'funding_type' => 'Fully Funded',
        'location' => 'Indonesia',
        'deadline' => '2027-03-01',
        'description' => 'Dukungan studi data sains.',
        'official_url' => 'https://example.com/beasiswa',
        'is_active' => true,
    ]);

    foreach ([route('home'), route('cari.beasiswa')] as $page) {
        $response = $this->get($page);

        $response->assertOk()
            ->assertSee($scholarship->title)
            ->assertSee($scholarship->provider)
            ->assertSee('https://example.com/beasiswa');
    }
});

it('renders scholarship details stored in the database', function () {
    $scholarship = Scholarship::create([
        'title' => 'Beasiswa Data Sains',
        'provider' => 'Universitas Contoh',
        'education_level' => 'S2',
        'funding_type' => 'Fully Funded',
        'location' => 'Indonesia',
        'deadline' => '2026-12-01',
        'description' => 'Dukungan studi data sains.',
        'official_url' => 'https://example.com/beasiswa',
        'is_active' => true,
    ]);

    $response = $this->get(route('scholarships.show', ['id' => $scholarship->id]));

    $response->assertOk()
        ->assertSee('Beasiswa Data Sains')
        ->assertSee('Universitas Contoh')
        ->assertSee('Dukungan studi data sains.')
        ->assertSee('href="https://example.com/beasiswa"', false);
});

it('renders the synchronized scholarship selected from the catalog', function () {
    $beasiswa = Beasiswa::create([
        'title' => 'Beasiswa Kampus Terhubung',
        'institution' => 'Universitas Contoh',
        'source_identifier' => hash('sha256', 'feed|selected'),
        'source_domain' => 'beasiswa.example.ac.id',
        'source_url' => 'https://beasiswa.example.ac.id/program/selected',
        'category' => 'PTN',
        'description' => 'Detail dari data feed resmi.',
        'deadline' => '2027-03-01',
        'education_level' => 'S1',
        'funding_type' => 'Biaya pendidikan',
        'location' => 'Indonesia',
        'status' => 'active',
    ]);

    $response = $this->get(route('scholarships.show', ['id' => $beasiswa->id]));

    $response->assertOk()
        ->assertSee('Beasiswa Kampus Terhubung')
        ->assertSee('Universitas Contoh')
        ->assertSee('Detail dari data feed resmi.');
});

it('escapes scholarship text supplied in the detail link', function () {
    $maliciousTitle = '<script>alert("xss")</script>';

    $response = $this->get(route('scholarships.show', [
        'id' => 'unsafe-title',
        'title' => $maliciousTitle,
    ]));

    $response->assertOk()
        ->assertSee($maliciousTitle)
        ->assertDontSee($maliciousTitle, false);
});

it('rejects an unsafe scholarship portal URL', function () {
    $response = $this->get(route('scholarships.show', [
        'id' => 'unsafe-url',
        'title' => 'Beasiswa Contoh',
        'url' => 'javascript:alert(1)',
    ]));

    $response->assertRedirect()
        ->assertSessionHasErrors(['url']);
});

it('returns not found when a catalog detail has no title', function () {
    $response = $this->get(route('scholarships.show', ['id' => 'unknown-scholarship']));

    $response->assertNotFound();
});
