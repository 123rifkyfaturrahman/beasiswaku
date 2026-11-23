<?php

it('opens the tips and guide page from its navigation route', function () {
    $response = $this->get(route('guides'));

    $response->assertOk()
        ->assertSee('Tips & Panduan Sukses Raih Beasiswa');

    foreach (['home', 'cari.beasiswa', 'bookmark', 'guides', 'contact', 'login'] as $routeName) {
        $response->assertSee('href="'.route($routeName).'"', false);
    }

    $response->assertDontSee('href="#"', false)
        ->assertSee('placehold.co/32x32/00236f/ffffff?text=CB', false)
        ->assertSee('placehold.co/28x28/00236f/ffffff?text=CB', false)
        ->assertSee('Kontak</a>', false)
        ->assertDontSee('Kontak &amp; Tentang', false)
        ->assertDontSee('Tentang CariBeasiswa');
});

it('opens the contact page from its navigation route', function () {
    $response = $this->get(route('contact'));

    $response->assertOk()
        ->assertSee('Hubungi Kami - Pusat Kontak & Bantuan CariBeasiswa');

    foreach (['home', 'cari.beasiswa', 'bookmark', 'guides', 'contact', 'login'] as $routeName) {
        $response->assertSee('href="'.route($routeName).'"', false);
    }

    $response->assertDontSee('href="#"', false)
        ->assertSee('placehold.co/32x32/00236f/ffffff?text=CB', false)
        ->assertSee('placehold.co/28x28/00236f/ffffff?text=CB', false)
        ->assertSee('Kontak</a>', false)
        ->assertDontSee('Kontak &amp; Tentang', false)
        ->assertDontSee('Tentang CariBeasiswa');
});

it('opens the dedicated scholarship search page from its navigation route', function () {
    $response = $this->get(route('cari.beasiswa'));

    $response->assertOk()
        ->assertViewIs('cari-beasiswa');
});

it('redirects guests to login from dashboard and profile pages', function () {
    $this->get(route('dashboard'))->assertRedirect(route('login'));
    $this->get(route('profile.edit'))->assertRedirect(route('login'));
});

it('renders dashboard and profile pages for authenticated users', function () {
    $user = \App\Models\User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $this->actingAs($user)
        ->get(route('dashboard'))
        ->assertOk()
        ->assertViewIs('dashboard');

    $this->get(route('profile.edit'))
        ->assertOk()
        ->assertViewIs('profile.edit');
});
