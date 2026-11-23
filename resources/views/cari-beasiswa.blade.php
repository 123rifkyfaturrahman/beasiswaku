
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cari informasi beasiswa dalam dan luar negeri melalui CariBeasiswa Indonesia.">

    <title>Katalog Beasiswa | CariBeasiswa ID</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#00236f",
                        "primary-container": "#1e3a8a",
                        secondary: "#006a61",
                        "secondary-fixed": "#89f5e7",
                        "surface": "#f8f9ff",
                        "surface-container-low": "#eff4ff",
                        "surface-container": "#e6eeff",
                        "surface-container-high": "#dce9ff",
                        "surface-container-highest": "#d5e3fc",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#0d1c2e",
                        "on-surface-variant": "#444651",
                        "outline": "#757682",
                        "outline-variant": "#c5c5d3",
                        "tertiary": "#3e2400",
                        "error": "#ba1a1a"
                    },
                    fontFamily: {
                        sans: ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        xl: "0.75rem"
                    }
                }
            }
        };
    </script>

    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: "Plus Jakarta Sans", sans-serif;
        }

        body {
            background: #f8f9ff;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: #c5c5d3;
            border-radius: 20px;
        }

        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
        }

        .bookmark-btn[data-saved="true"] .material-symbols-outlined {
            font-variation-settings: "FILL" 1, "wght" 500;
        }

        .modal-open {
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased">

@php
    $campusScholarships = $campusScholarships ?? collect();
@endphp

<!-- ================= NAVBAR ================= -->
<header class="fixed top-0 z-50 w-full bg-white/95 shadow-sm backdrop-blur-xl">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between gap-4 px-4 md:px-8">

        <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-lg font-extrabold text-white">
                CB
            </span>

            <span class="text-xl font-extrabold tracking-tight text-primary">
                CariBeasiswa
                <span class="rounded bg-secondary-fixed px-1.5 py-0.5 text-xs text-primary">ID</span>
            </span>
        </a>

        <!-- Navbar Desktop -->
        <nav class="hidden items-center gap-1 lg:flex">
            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'rounded-lg bg-surface-container-high px-4 py-2 text-sm font-bold text-primary' : 'rounded-lg px-4 py-2 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }}">
                Beranda
            </a>

            <a href="{{ route('cari.beasiswa') }}"
               class="{{ request()->routeIs('cari.beasiswa*') ? 'rounded-lg bg-surface-container-high px-4 py-2 text-sm font-bold text-primary' : 'rounded-lg px-4 py-2 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }}">
                Cari Beasiswa
            </a>

            <a href="{{ route('bookmark') }}"
               class="rounded-lg px-4 py-2 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary">
                Bookmark
            </a>

            <a href="{{ route('guides') }}"
               class="rounded-lg px-4 py-2 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary">
                Tips &amp; Panduan
            </a>

            <a href="{{ route('contact') }}"
               class="rounded-lg px-4 py-2 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary">
                Kontak
            </a>
        </nav>

        <div class="flex items-center gap-2">

            <!-- Pencarian Navbar -->
            <div class="relative hidden w-48 md:block lg:w-56">
                <input
                    id="header-search-input"
                    type="search"
                    aria-label="Cari beasiswa"
                    placeholder="Cari beasiswa..."
                    class="w-full rounded-lg bg-surface-container-low py-2 pl-9 pr-3 text-sm outline-none focus:bg-white focus:ring-2 focus:ring-primary/20"
                >

                <span class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-lg text-on-surface-variant">
                    search
                </span>
            </div>

            <a href="{{ route('bookmark') }}"
               aria-label="Lihat bookmark"
               class="relative rounded-lg p-2 text-on-surface-variant hover:bg-surface-container-low hover:text-primary">

                <span class="material-symbols-outlined">bookmark</span>

                <span id="bookmark-count"
                      class="absolute right-0.5 top-0.5 flex h-4 min-w-4 items-center justify-center rounded-full bg-secondary px-1 text-[10px] font-bold text-white">
                    0
                </span>
            </a>

            <!-- Hamburger -->
            <button
                id="mobile-menu-button"
                type="button"
                aria-label="Buka menu"
                aria-expanded="false"
                aria-controls="mobile-menu"
                class="rounded-lg p-2 text-primary hover:bg-surface-container-low lg:hidden">

                <span id="mobile-menu-icon" class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </div>

    <!-- Dropdown Mobile -->
    <nav id="mobile-menu"
         class="hidden border-t border-surface-container-high bg-white px-4 py-3 shadow-lg lg:hidden">

        <div class="mx-auto flex max-w-7xl flex-col gap-1">
            <a href="{{ route('home') }}" class="rounded-lg px-3 py-3 font-semibold text-on-surface-variant hover:bg-surface-container-low">Beranda</a>
            <a href="{{ route('cari.beasiswa') }}" class="rounded-lg bg-surface-container-low px-3 py-3 font-bold text-primary">Cari Beasiswa</a>
            <a href="{{ route('bookmark') }}" class="rounded-lg px-3 py-3 font-semibold text-on-surface-variant hover:bg-surface-container-low">Bookmark</a>
            <a href="{{ route('guides') }}" class="rounded-lg px-3 py-3 font-semibold text-on-surface-variant hover:bg-surface-container-low">Tips &amp; Panduan</a>
            <a href="{{ route('contact') }}" class="rounded-lg px-3 py-3 font-semibold text-on-surface-variant hover:bg-surface-container-low">Kontak</a>
        </div>
    </nav>
</header>

<!-- ================= KONTEN UTAMA ================= -->
<main class="min-h-screen w-full bg-surface pt-24">
    <div class="mx-auto w-full max-w-7xl px-4 py-8 md:px-8">

        <!-- Judul Halaman -->
        <div class="mb-8 flex flex-col justify-between gap-4 md:flex-row md:items-end">
            <div>
                <div class="mb-2 flex items-center gap-2 text-sm font-bold uppercase tracking-wider text-secondary">
                    <span class="material-symbols-outlined text-base">verified</span>
                    Informasi Beasiswa
                </div>

                <h1 class="text-3xl font-extrabold tracking-tight text-primary md:text-4xl">
                    Katalog Beasiswa
                </h1>

                <p class="mt-2 max-w-2xl text-sm leading-6 text-on-surface-variant">
                    Temukan berbagai peluang beasiswa dalam dan luar negeri.
                    Periksa persyaratan dan jadwal terbaru melalui portal resmi penyelenggara.
                </p>
            </div>

            <div class="flex items-center gap-2 self-start rounded-full bg-surface-container-low px-4 py-2 text-xs font-semibold text-on-surface-variant md:self-auto">
                <span class="h-2.5 w-2.5 animate-pulse rounded-full bg-secondary"></span>
                Katalog Beasiswa
            </div>
        </div>

        <!-- Layout -->
        <div class="grid grid-cols-1 items-start gap-6 lg:grid-cols-12">

            <!-- ================= SIDEBAR FILTER ================= -->
            <aside class="rounded-xl bg-white p-5 shadow-sm lg:sticky lg:top-24 lg:col-span-4 xl:col-span-3">

                <div class="mb-5 flex items-center justify-between border-b border-surface-container-high pb-4">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">tune</span>
                        <h2 class="font-bold text-primary">Filter Pencarian</h2>
                    </div>

                    <button id="reset-filter-btn" type="button"
                            class="text-xs font-bold text-secondary hover:underline">
                        Reset
                    </button>
                </div>

                <form id="filter-form" class="flex flex-col gap-5">

                    <!-- Kata Kunci -->
                    <div>
                        <label for="search-input" class="mb-2 block text-sm font-semibold">
                            Kata Kunci
                        </label>

                        <div class="relative">
                            <input
                                id="search-input"
                                type="search"
                                placeholder="Nama beasiswa atau kampus..."
                                class="w-full rounded-lg bg-surface-container-low py-3 pl-10 pr-3 text-sm outline-none focus:ring-2 focus:ring-primary/20"
                            >

                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-lg text-outline">
                                search
                            </span>
                        </div>
                    </div>

                    <!-- Jenjang -->
                    <div data-filter-group="education">
                        <h3 class="mb-3 text-sm font-bold">Jenjang Pendidikan</h3>

                        <div class="space-y-2">
                            @foreach (['Semua Jenjang', 'SMA / SMK / Sederajat', 'Diploma (D3 / D4)', 'Sarjana (S1)', 'Magister (S2)', 'Doktoral (S3)'] as $index => $label)
                                <label class="flex cursor-pointer items-center gap-2 text-sm text-on-surface-variant">
                                    <input type="checkbox"
                                           class="accent-primary"
                                           @checked($index === 0)>
                                    {{ $label }}
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Pendanaan -->
                    <div data-filter-group="funding">
                        <h3 class="mb-3 text-sm font-bold">Tipe Pendanaan</h3>

                        <div class="space-y-2">
                            @foreach (['Penuh (Fully Funded)', 'Sebagian (Partial Funded)', 'Bantuan Riset / Tesis', 'Biaya Hidup Saja'] as $label)
                                <label class="flex cursor-pointer items-center gap-2 text-sm text-on-surface-variant">
                                    <input type="checkbox" class="accent-primary">
                                    {{ $label }}
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div data-filter-group="location">
                        <h3 class="mb-3 text-sm font-bold">Wilayah &amp; Lokasi</h3>

                        <div class="space-y-2">
                            @foreach (['Dalam Negeri (Indonesia)', 'Luar Negeri (Semua)', 'Asia Timur & Tenggara', 'Eropa & Inggris Raya', 'Amerika Utara', 'Australia & Oceania'] as $label)
                                <label class="flex cursor-pointer items-center gap-2 text-sm text-on-surface-variant">
                                    <input type="checkbox" class="accent-primary">
                                    {{ $label }}
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Status -->
                    <div data-filter-group="status">
                        <h3 class="mb-3 text-sm font-bold">Status Pendaftaran</h3>

                        <div class="space-y-2">
                            @foreach (['Buka Sekarang', 'Segera Dibuka (Coming Soon)', 'Deadline < 14 Hari'] as $label)
                                <label class="flex cursor-pointer items-center gap-2 text-sm text-on-surface-variant">
                                    <input type="checkbox" class="accent-primary">
                                    {{ $label }}
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Persyaratan -->
                    <div data-filter-group="requirements">
                        <h3 class="mb-3 text-sm font-bold">Persyaratan Khusus</h3>

                        <div class="space-y-2">
                            @foreach (['Tanpa IELTS / TOEFL', 'Min. IPK < 3.00', 'Tanpa Wawancara'] as $label)
                                <label class="flex cursor-pointer items-center gap-2 text-sm text-on-surface-variant">
                                    <input type="checkbox" class="accent-primary">
                                    {{ $label }}
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <button type="submit"
                            class="flex w-full items-center justify-center gap-2 rounded-lg bg-primary py-3 text-sm font-bold text-white transition hover:bg-primary-container">
                        <span class="material-symbols-outlined text-lg">filter_alt</span>
                        Terapkan Filter
                    </button>

                    <button id="clear-all-filter" type="button"
                            class="w-full rounded-lg bg-surface-container py-2.5 text-sm font-semibold text-on-surface-variant transition hover:bg-surface-container-high">
                        Batalkan Perubahan
                    </button>
                </form>
            </aside>

            <!-- ================= HASIL BEASISWA ================= -->
            <section class="flex flex-col gap-5 lg:col-span-8 xl:col-span-9">

                <!-- Hasil dan Pengurutan -->
                <div class="flex flex-col justify-between gap-4 rounded-xl bg-white p-5 shadow-sm md:flex-row md:items-center">
                    <div>
                        <h2 id="scholarship-result-count" class="font-bold text-on-surface">
                            {{ $campusScholarships->count() }} Program Ditemukan
                        </h2>

                        <div id="active-filter-chips" class="mt-2 flex flex-wrap items-center gap-2">
                            <span class="text-xs text-on-surface-variant">Filter Aktif: Tidak ada</span>
                        </div>

                        <button id="show-all-scholarships"
                                type="button"
                                class="mt-2 hidden text-xs font-bold text-secondary hover:underline">
                            Tampilkan semua beasiswa
                        </button>
                    </div>

                    <div class="flex items-center gap-2">
                        <label for="sort-scholarships" class="text-xs font-semibold text-on-surface-variant">
                            Urutkan:
                        </label>

                        <select id="sort-scholarships"
                                class="rounded-lg bg-surface-container-low px-3 py-2 text-xs font-semibold outline-none">
                            <option value="deadline">Deadline Terdekat</option>
                            <option value="newest">Terbaru Ditambahkan</option>
                            <option value="title">Nama Beasiswa</option>
                        </select>
                    </div>
                </div>

                <!-- Daftar Kartu -->
                <div id="scholarship-cards-container" class="flex flex-col gap-4">

                    @forelse ($campusScholarships as $scholarship)
                        <article
                            class="scholarship-card group rounded-xl bg-white p-5 shadow-sm transition hover:shadow-md"
                            data-scholarship-id="{{ $scholarship->id }}"
                            data-scholarship-title="{{ $scholarship->title }}"
                            data-scholarship-provider="{{ $scholarship->institution }}"
                            data-scholarship-level="{{ $scholarship->education_level ?? '-' }}"
                            data-scholarship-funding="{{ $scholarship->funding_type ?? '-' }}"
                            data-scholarship-location="{{ $scholarship->location ?? '-' }}"
                            data-scholarship-deadline="{{ $scholarship->deadline?->format('Y-m-d') ?? '' }}"
                            data-scholarship-url="{{ $scholarship->source_url }}"
                            data-scholarship-description="{{ $scholarship->description }}"
                            data-status="{{ $scholarship->status }}"
                            data-category="{{ $scholarship->category ?? 'Beasiswa' }}"
                        >

                            <div class="mb-4 flex items-start justify-between gap-3 border-b border-surface-container-high pb-4">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-surface-container-high text-2xl">
                                        🎓
                                    </div>

                                    <div>
                                        <div class="flex flex-wrap items-center gap-2">
                                            <h3 class="font-bold text-primary">
                                                {{ $scholarship->title }}
                                            </h3>

                                            <span class="rounded-full bg-secondary-fixed/60 px-2 py-1 text-[10px] font-bold text-secondary">
                                                {{ $scholarship->category ?? 'Beasiswa' }}
                                            </span>
                                        </div>

                                        <p class="mt-1 text-sm text-on-surface-variant">
                                            {{ $scholarship->institution }}
                                        </p>
                                    </div>
                                </div>

                                <button type="button"
                                        class="bookmark-btn rounded-lg p-2 text-outline transition hover:bg-surface-container hover:text-secondary"
                                        data-saved="false"
                                        aria-label="Simpan beasiswa">
                                    <span class="material-symbols-outlined">bookmark_add</span>
                                </button>
                            </div>

                            <div class="mb-4 grid grid-cols-2 gap-4 rounded-lg bg-surface-container-low p-4 sm:grid-cols-4">
                                <div>
                                    <span class="block text-xs text-on-surface-variant">Jenjang Studi</span>
                                    <span class="text-sm font-bold text-primary">
                                        {{ $scholarship->education_level ?? '-' }}
                                    </span>
                                </div>

                                <div>
                                    <span class="block text-xs text-on-surface-variant">Pendanaan</span>
                                    <span class="text-sm font-bold text-secondary">
                                        {{ $scholarship->funding_type ?? '-' }}
                                    </span>
                                </div>

                                <div>
                                    <span class="block text-xs text-on-surface-variant">Lokasi</span>
                                    <span class="text-sm font-semibold">
                                        {{ $scholarship->location ?? '-' }}
                                    </span>
                                </div>

                                <div>
                                    <span class="block text-xs text-on-surface-variant">Deadline</span>
                                    <span class="text-sm font-semibold">
                                        {{ $scholarship->deadline?->format('d-m-Y') ?? 'Belum ditentukan' }}
                                    </span>
                                </div>
                            </div>

                            <p class="mb-4 text-sm leading-6 text-on-surface-variant">
                                {{ $scholarship->description ?? 'Belum ada deskripsi beasiswa.' }}
                            </p>

                            <div class="flex flex-wrap items-center justify-between gap-3">
                                <span class="rounded-md bg-surface-container px-3 py-1 text-xs font-semibold text-on-surface-variant">
                                    {{ $scholarship->status === 'active' ? 'Aktif' : 'Ditutup' }}
                                </span>

                                <button
                                    type="button"
                                    class="detail-button flex items-center gap-2 rounded-lg bg-primary px-4 py-2.5 text-xs font-bold text-white transition hover:bg-primary-container">
                                    Lihat Detail
                                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                </button>
                            </div>
                        </article>
                    @empty
                        <div class="rounded-xl bg-white p-10 text-center shadow-sm">
                            <span class="material-symbols-outlined text-5xl text-outline">school</span>
                            <h3 class="mt-3 font-bold text-primary">Belum Ada Beasiswa</h3>
                            <p class="mt-2 text-sm text-on-surface-variant">
                                Informasi beasiswa akan muncul di sini setelah tersedia.
                            </p>
                        </div>
                    @endforelse

                    <div id="scholarship-empty-state"
                         class="hidden rounded-xl bg-white p-10 text-center text-sm text-on-surface-variant shadow-sm"
                         role="status">
                        Tidak ada beasiswa yang cocok dengan pilihan filter.
                    </div>
                </div>

                <!-- Ringkasan -->
                <div class="rounded-xl bg-white p-5 text-sm text-on-surface-variant shadow-sm">
                    Menampilkan
                    <strong id="pagination-result-count" class="text-primary">0</strong>
                    dari
                    <strong id="pagination-total-count" class="text-primary">0</strong>
                    program beasiswa.
                </div>
            </section>
        </div>
    </div>
</main>

<!-- ================= MODAL DETAIL ================= -->
<div id="scholarship-detail-modal"
     class="fixed inset-0 z-[60] hidden items-center justify-center bg-slate-950/60 p-4 backdrop-blur-sm">

    <div class="flex max-h-[90vh] w-full max-w-2xl flex-col overflow-hidden rounded-2xl bg-white shadow-2xl">

        <div class="flex items-center justify-between border-b border-surface-container-high bg-surface-container-low p-5">
            <div class="flex items-center gap-2 text-sm font-bold uppercase tracking-wide text-secondary">
                <span class="material-symbols-outlined">verified_user</span>
                Informasi Beasiswa
            </div>

            <button type="button"
                    class="close-modal flex h-9 w-9 items-center justify-center rounded-full hover:bg-surface-container-high"
                    aria-label="Tutup modal">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <div class="flex flex-col gap-5 overflow-y-auto p-5">
            <div>
                <span class="text-xs font-bold uppercase tracking-wide text-secondary">
                    Informasi Program
                </span>

                <h2 id="modal-scholarship-title" class="mt-2 text-2xl font-extrabold text-primary">
                    Nama Beasiswa
                </h2>

                <p id="modal-scholarship-provider" class="mt-2 text-sm text-on-surface-variant"></p>

                <p id="modal-scholarship-description" class="mt-3 text-sm leading-6 text-on-surface-variant">
                    Informasi beasiswa.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4 rounded-xl bg-surface-container-low p-4">
                <div>
                    <span class="block text-xs text-on-surface-variant">Status</span>
                    <strong id="modal-scholarship-status" class="text-sm text-primary">-</strong>
                </div>

                <div>
                    <span class="block text-xs text-on-surface-variant">Jenjang</span>
                    <strong id="modal-scholarship-level" class="text-sm text-primary">-</strong>
                </div>

                <div>
                    <span class="block text-xs text-on-surface-variant">Pendanaan</span>
                    <strong id="modal-scholarship-funding" class="text-sm text-primary">-</strong>
                </div>

                <div>
                    <span class="block text-xs text-on-surface-variant">Lokasi</span>
                    <strong id="modal-scholarship-location" class="text-sm text-primary">-</strong>
                </div>

                <div class="col-span-2">
                    <span class="block text-xs text-on-surface-variant">Deadline</span>
                    <strong id="modal-scholarship-deadline" class="text-sm text-primary">-</strong>
                </div>
            </div>

            <p class="rounded-lg border border-surface-container-high bg-surface-bright p-4 text-xs leading-6 text-on-surface-variant">
                Pastikan kamu membaca persyaratan, jadwal, dan ketentuan terbaru pada situs resmi penyelenggara beasiswa.
            </p>
        </div>

        <div class="flex flex-col gap-3 border-t border-surface-container-high bg-surface-container-low p-5 sm:flex-row sm:items-center sm:justify-between">
            <button id="modal-bookmark-toggle"
                    type="button"
                    class="flex items-center justify-center gap-2 rounded-lg border border-secondary px-4 py-3 text-sm font-bold text-secondary hover:bg-secondary/10">
                <span class="material-symbols-outlined">bookmark_add</span>
                <span>Simpan ke Favorit</span>
            </button>

            <div class="flex gap-2">
                <button type="button"
                        class="close-modal rounded-lg bg-surface-container px-4 py-3 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-high">
                    Tutup
                </button>

                <a id="modal-portal-link"
                   href="#"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-3 text-sm font-bold text-white hover:bg-primary-container">
                    Portal Resmi
                    <span class="material-symbols-outlined text-sm">open_in_new</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ================= FOOTER ================= -->
<footer class="w-full bg-surface-container-low px-4 py-12 text-on-surface-variant md:px-8">
    <div class="mx-auto max-w-7xl">

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">

            <div class="lg:col-span-2">
                <div class="mb-4 flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary font-extrabold text-white">
                        CB
                    </span>

                    <span class="text-xl font-extrabold text-primary">
                        CariBeasiswa ID
                    </span>
                </div>

                <p class="max-w-md text-sm leading-7">
                    Pusat informasi beasiswa untuk pelajar dan mahasiswa Indonesia
                    dalam meraih peluang pendidikan terbaik di dalam maupun luar negeri.
                </p>
            </div>

            <div>
                <h3 class="mb-4 font-bold text-on-surface">Eksplorasi</h3>

                <div class="flex flex-col gap-3 text-sm">
                    <a href="{{ route('home') }}" class="hover:text-primary">Beranda</a>
                    <a href="{{ route('cari.beasiswa') }}" class="hover:text-primary">Cari Beasiswa</a>
                    <a href="{{ route('bookmark') }}" class="hover:text-primary">Bookmark</a>
                </div>
            </div>

            <div>
                <h3 class="mb-4 font-bold text-on-surface">Bantuan</h3>

                <div class="flex flex-col gap-3 text-sm">
                    <a href="{{ route('guides') }}" class="hover:text-primary">Tips &amp; Panduan</a>
                    <a href="{{ route('contact') }}" class="hover:text-primary">Kontak</a>
                </div>
            </div>
        </div>

        <div class="mt-10 border-t border-surface-container-high pt-6 text-center text-xs">
            © {{ now()->year }} CariBeasiswa Indonesia. Hak cipta dilindungi.
        </div>
    </div>
</footer>

<!-- ================= JAVASCRIPT ================= -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const bookmarkStorageKey = 'caribeasiswa:bookmarks:v1';
    const bookmarkDetailsStorageKey = 'caribeasiswa:bookmark-details:v1';

    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuIcon = document.getElementById('mobile-menu-icon');

    const searchInput = document.getElementById('search-input');
    const headerSearchInput = document.getElementById('header-search-input');
    const filterForm = document.getElementById('filter-form');
    const cardContainer = document.getElementById('scholarship-cards-container');

    const cards = Array.from(
        cardContainer.querySelectorAll('.scholarship-card')
    );

    const filterGroups = {
        education: document.querySelector('[data-filter-group="education"]'),
        funding: document.querySelector('[data-filter-group="funding"]'),
        location: document.querySelector('[data-filter-group="location"]'),
        status: document.querySelector('[data-filter-group="status"]'),
        requirements: document.querySelector('[data-filter-group="requirements"]')
    };

    const modal = document.getElementById('scholarship-detail-modal');

    let activeScholarshipId = null;
    let showingBookmarks = false;

    function readStorage(key, fallback) {
        try {
            const value = localStorage.getItem(key);
            return value ? JSON.parse(value) : fallback;
        } catch (error) {
            return fallback;
        }
    }

    const savedIds = new Set(
        readStorage(bookmarkStorageKey, []).map(String)
    );

    let bookmarkDetails = readStorage(bookmarkDetailsStorageKey, {});

    // ================= NAVBAR MOBILE =================

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function () {
            const isOpen = mobileMenu.classList.toggle('hidden') === false;

            mobileMenuButton.setAttribute('aria-expanded', String(isOpen));
            mobileMenuButton.setAttribute(
                'aria-label',
                isOpen ? 'Tutup menu' : 'Buka menu'
            );

            mobileMenuIcon.textContent = isOpen ? 'close' : 'menu';
        });

        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                mobileMenuButton.setAttribute('aria-label', 'Buka menu');
                mobileMenuIcon.textContent = 'menu';
            });
        });
    }

    // ================= UTILITAS =================

    function normalize(value) {
        return String(value || '')
            .toLowerCase()
            .replace(/[^a-z0-9\s]/g, ' ')
            .replace(/\s+/g, ' ')
            .trim();
    }

    function getCheckboxValues(group) {
        if (!group) return [];

        return Array.from(
            group.querySelectorAll('input[type="checkbox"]:checked')
        ).map(function (input) {
            return normalize(input.closest('label')?.textContent);
        }).filter(function (value) {
            return value && !value.includes('semua jenjang');
        });
    }

    function getCardText(card) {
        return normalize([
            card.dataset.scholarshipTitle,
            card.dataset.scholarshipProvider,
            card.dataset.scholarshipLevel,
            card.dataset.scholarshipFunding,
            card.dataset.scholarshipLocation,
            card.dataset.scholarshipDescription,
            card.dataset.category,
            card.dataset.status
        ].join(' '));
    }

    function matchesEducation(text, value) {
        if (value.includes('sma') || value.includes('smk')) {
            return /sma|smk|sekolah|senior/.test(text);
        }

        if (value.includes('diploma')) {
            return /d3|d4|diploma/.test(text);
        }

        if (value.includes('sarjana')) {
            return /s1|sarjana|undergraduate/.test(text);
        }

        if (value.includes('magister')) {
            return /s2|magister|master/.test(text);
        }

        if (value.includes('doktoral')) {
            return /s3|doktoral|doctoral|phd/.test(text);
        }

        return false;
    }

    function matchesFunding(text, value) {
        if (value.includes('penuh')) {
            return /fully funded|full funded|full scholarship|penuh|100%/.test(text);
        }

        if (value.includes('sebagian')) {
            return /partial|sebagian/.test(text);
        }

        if (value.includes('riset')) {
            return /riset|tesis|research/.test(text);
        }

        if (value.includes('biaya hidup')) {
            return /biaya hidup|living|uang saku/.test(text);
        }

        return false;
    }

    function matchesLocation(text, value) {
        if (value.includes('dalam negeri')) {
            return /indonesia|dalam negeri|domestik/.test(text);
        }

        if (value.includes('luar negeri')) {
            return /luar negeri|jepang|japan|uk|eropa|europe|amerika|australia|asia/.test(text);
        }

        if (value.includes('asia')) {
            return /asia|jepang|japan|singapura|thailand|taiwan|malaysia/.test(text);
        }

        if (value.includes('eropa')) {
            return /eropa|europe|inggris|britania|united kingdom/.test(text);
        }

        if (value.includes('amerika')) {
            return /amerika|usa|united states|north america/.test(text);
        }

        if (value.includes('australia')) {
            return /australia|oceania/.test(text);
        }

        return false;
    }

    function matchesStatus(text, value, card) {
        if (value.includes('buka sekarang')) {
            return card.dataset.status === 'active';
        }

        if (value.includes('segera dibuka')) {
            return /segera dibuka|coming soon/.test(text);
        }

        if (value.includes('deadline')) {
            const deadline = card.dataset.scholarshipDeadline;

            if (!deadline) return false;

            const deadlineDate = new Date(deadline + 'T23:59:59');
            const today = new Date();
            const difference = Math.ceil(
                (deadlineDate - today) / (1000 * 60 * 60 * 24)
            );

            return difference >= 0 && difference < 14;
        }

        return false;
    }

    function matchesRequirement(text, value) {
        if (value.includes('ielts') || value.includes('toefl')) {
            return /tanpa ielts|tanpa toefl/.test(text);
        }

        if (value.includes('ipk')) {
            return /ipk kurang dari 3|ipk di bawah 3|min ipk 2/.test(text);
        }

        if (value.includes('wawancara')) {
            return /tanpa wawancara|tidak ada wawancara/.test(text);
        }

        return false;
    }

    function matchesGroup(text, values, matcher, card) {
        if (!values.length) return true;

        return values.some(function (value) {
            return matcher(text, value, card);
        });
    }

    // ================= BOOKMARK =================

    function saveBookmarks() {
        localStorage.setItem(
            bookmarkStorageKey,
            JSON.stringify(Array.from(savedIds))
        );

        localStorage.setItem(
            bookmarkDetailsStorageKey,
            JSON.stringify(bookmarkDetails)
        );

        document.getElementById('bookmark-count').textContent = savedIds.size;
    }

    function updateBookmarkButtons() {
        cards.forEach(function (card) {
            const button = card.querySelector('.bookmark-btn');
            if (!button) return;

            const isSaved = savedIds.has(card.dataset.scholarshipId);

            button.dataset.saved = String(isSaved);

            button.classList.toggle('text-secondary', isSaved);
            button.classList.toggle('text-outline', !isSaved);

            button.title = isSaved
                ? 'Hapus dari Bookmark'
                : 'Simpan ke Bookmark';

            button.querySelector('.material-symbols-outlined').textContent =
                isSaved ? 'bookmark' : 'bookmark_add';
        });

        document.getElementById('bookmark-count').textContent = savedIds.size;

        updateModalBookmarkButton();
    }

    function toggleBookmark(card) {
        const id = String(card.dataset.scholarshipId);

        if (savedIds.has(id)) {
            savedIds.delete(id);
            delete bookmarkDetails[id];
        } else {
            savedIds.add(id);

            bookmarkDetails[id] = {
                id: id,
                title: card.dataset.scholarshipTitle,
                provider: card.dataset.scholarshipProvider,
                level: card.dataset.scholarshipLevel,
                funding: card.dataset.scholarshipFunding,
                location: card.dataset.scholarshipLocation,
                deadline: card.dataset.scholarshipDeadline,
                url: card.dataset.scholarshipUrl,
                description: card.dataset.scholarshipDescription,
                status: card.dataset.status,
                category: card.dataset.category
            };
        }

        saveBookmarks();
        updateBookmarkButtons();
        applyFilters();
    }

    cards.forEach(function (card) {
        const button = card.querySelector('.bookmark-btn');

        if (button) {
            button.addEventListener('click', function () {
                toggleBookmark(card);
            });
        }
    });

    // ================= FILTER =================

    function renderFilterChips() {
        const container = document.getElementById('active-filter-chips');
        container.replaceChildren();

        const heading = document.createElement('span');
        heading.className = 'text-xs text-on-surface-variant';
        heading.textContent = 'Filter Aktif:';
        container.appendChild(heading);

        let total = 0;

        if (searchInput.value.trim()) {
            total++;

            const chip = document.createElement('span');
            chip.className = 'rounded-full bg-surface-container-high px-3 py-1 text-xs text-primary';
            chip.textContent = 'Kata kunci: ' + searchInput.value.trim();
            container.appendChild(chip);
        }

        Object.values(filterGroups).forEach(function (group) {
            if (!group) return;

            group.querySelectorAll('input[type="checkbox"]:checked').forEach(function (input) {
                const label = input.closest('label')?.textContent.trim() || '';

                if (normalize(label).includes('semua jenjang')) return;

                total++;

                const chip = document.createElement('button');
                chip.type = 'button';
                chip.className = 'rounded-full bg-surface-container-high px-3 py-1 text-xs text-primary hover:bg-surface-container-highest';
                chip.textContent = label + ' ×';

                chip.addEventListener('click', function () {
                    input.checked = false;
                    applyFilters();
                });

                container.appendChild(chip);
            });
        });

        if (showingBookmarks) {
            total++;

            const chip = document.createElement('span');
            chip.className = 'rounded-full bg-secondary-fixed px-3 py-1 text-xs text-secondary';
            chip.textContent = 'Bookmark Saya';
            container.appendChild(chip);
        }

        if (total === 0) {
            const empty = document.createElement('span');
            empty.className = 'text-xs text-on-surface-variant';
            empty.textContent = 'Tidak ada';
            container.appendChild(empty);
        }
    }

    function applyFilters() {
        const keyword = normalize(searchInput.value);

        const educationValues = getCheckboxValues(filterGroups.education);
        const fundingValues = getCheckboxValues(filterGroups.funding);
        const locationValues = getCheckboxValues(filterGroups.location);
        const statusValues = getCheckboxValues(filterGroups.status);
        const requirementValues = getCheckboxValues(filterGroups.requirements);

        let visibleCount = 0;

        cards.forEach(function (card) {
            const text = getCardText(card);

            const keywordMatch = !keyword ||
                keyword.split(' ').every(function (word) {
                    return text.includes(word);
                });

            const educationMatch = matchesGroup(
                text, educationValues, matchesEducation, card
            );

            const fundingMatch = matchesGroup(
                text, fundingValues, matchesFunding, card
            );

            const locationMatch = matchesGroup(
                text, locationValues, matchesLocation, card
            );

            const statusMatch = matchesGroup(
                text, statusValues, matchesStatus, card
            );

            const requirementMatch = matchesGroup(
                text, requirementValues, matchesRequirement, card
            );

            const bookmarkMatch = !showingBookmarks ||
                savedIds.has(String(card.dataset.scholarshipId));

            const visible = keywordMatch &&
                educationMatch &&
                fundingMatch &&
                locationMatch &&
                statusMatch &&
                requirementMatch &&
                bookmarkMatch;

            card.classList.toggle('hidden', !visible);

            if (visible) visibleCount++;
        });

        document.getElementById('scholarship-result-count').textContent =
            visibleCount + ' Program Ditemukan';

        document.getElementById('pagination-result-count').textContent =
            visibleCount;

        document.getElementById('pagination-total-count').textContent =
            cards.length;

        const emptyState = document.getElementById('scholarship-empty-state');

        emptyState.classList.toggle('hidden', visibleCount > 0);

        if (showingBookmarks && savedIds.size === 0) {
            emptyState.textContent =
                'Belum ada beasiswa yang disimpan. Tekan tombol bookmark pada kartu beasiswa.';
        } else {
            emptyState.textContent =
                'Tidak ada beasiswa yang cocok dengan pilihan filter saat ini.';
        }

        document.getElementById('show-all-scholarships')
            .classList.toggle('hidden', !showingBookmarks);

        renderFilterChips();
    }

    function resetFilters() {
        searchInput.value = '';
        headerSearchInput.value = '';

        filterForm.querySelectorAll('input[type="checkbox"]').forEach(function (input) {
            input.checked = false;
        });

        const firstEducationCheckbox =
            filterGroups.education.querySelector('input[type="checkbox"]');

        if (firstEducationCheckbox) {
            firstEducationCheckbox.checked = true;
        }

        showingBookmarks = false;
        applyFilters();
    }

    document.getElementById('reset-filter-btn')
        .addEventListener('click', resetFilters);

    document.getElementById('clear-all-filter')
        .addEventListener('click', resetFilters);

    filterForm.addEventListener('submit', function (event) {
        event.preventDefault();
        applyFilters();
    });

    searchInput.addEventListener('input', function () {
        headerSearchInput.value = searchInput.value;
        applyFilters();
    });

    headerSearchInput.addEventListener('input', function () {
        searchInput.value = headerSearchInput.value;
        applyFilters();
    });

    // Pilihan "Semua Jenjang" tidak digabung dengan jenjang lainnya.
    Object.values(filterGroups).forEach(function (group) {
        if (!group) return;

        group.querySelectorAll('input[type="checkbox"]').forEach(function (input) {
            input.addEventListener('change', function () {
                if (group.dataset.filterGroup === 'education') {
                    const allCheckboxes = Array.from(
                        group.querySelectorAll('input[type="checkbox"]')
                    );

                    const isAll = normalize(
                        input.closest('label')?.textContent
                    ).includes('semua jenjang');

                    if (isAll && input.checked) {
                        allCheckboxes.forEach(function (checkbox) {
                            if (checkbox !== input) checkbox.checked = false;
                        });
                    } else if (!isAll && input.checked) {
                        allCheckboxes[0].checked = false;
                    }
                }

                applyFilters();
            });
        });
    });

    document.getElementById('show-all-scholarships')
        .addEventListener('click', function () {
            showingBookmarks = false;
            applyFilters();
        });

    // ================= SORTING =================

    document.getElementById('sort-scholarships')
        .addEventListener('change', function (event) {
            const sortType = event.target.value;

            const sortedCards = [...cards].sort(function (a, b) {
                if (sortType === 'title') {
                    return a.dataset.scholarshipTitle.localeCompare(
                        b.dataset.scholarshipTitle
                    );
                }

                if (sortType === 'newest') {
                    return Number(b.dataset.scholarshipId) -
                        Number(a.dataset.scholarshipId);
                }

                const dateA = a.dataset.scholarshipDeadline || '9999-12-31';
                const dateB = b.dataset.scholarshipDeadline || '9999-12-31';

                return dateA.localeCompare(dateB);
            });

            sortedCards.forEach(function (card) {
                cardContainer.insertBefore(
                    card,
                    document.getElementById('scholarship-empty-state')
                );
            });
        });

    // ================= MODAL DETAIL =================

    function openModal(card) {
        activeScholarshipId = String(card.dataset.scholarshipId);

        document.getElementById('modal-scholarship-title').textContent =
            card.dataset.scholarshipTitle || 'Nama Beasiswa';

        document.getElementById('modal-scholarship-provider').textContent =
            card.dataset.scholarshipProvider || '-';

        document.getElementById('modal-scholarship-description').textContent =
            card.dataset.scholarshipDescription || 'Belum ada deskripsi.';

        document.getElementById('modal-scholarship-status').textContent =
            card.dataset.status === 'active' ? 'Aktif' : 'Ditutup';

        document.getElementById('modal-scholarship-level').textContent =
            card.dataset.scholarshipLevel || '-';

        document.getElementById('modal-scholarship-funding').textContent =
            card.dataset.scholarshipFunding || '-';

        document.getElementById('modal-scholarship-location').textContent =
            card.dataset.scholarshipLocation || '-';

        document.getElementById('modal-scholarship-deadline').textContent =
            card.dataset.scholarshipDeadline || 'Belum ditentukan';

        const portalLink = document.getElementById('modal-portal-link');
        const officialUrl = card.dataset.scholarshipUrl;

        if (officialUrl && /^https?:\/\//i.test(officialUrl)) {
            portalLink.href = officialUrl;
            portalLink.classList.remove('pointer-events-none', 'opacity-50');
        } else {
            portalLink.href = '#';
            portalLink.classList.add('pointer-events-none', 'opacity-50');
        }

        updateModalBookmarkButton();

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('modal-open');
    }

    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.classList.remove('modal-open');
        activeScholarshipId = null;
    }

    function updateModalBookmarkButton() {
        const button = document.getElementById('modal-bookmark-toggle');

        if (!activeScholarshipId) return;

        const isSaved = savedIds.has(activeScholarshipId);

        button.querySelector('.material-symbols-outlined').textContent =
            isSaved ? 'bookmark_added' : 'bookmark_add';

        button.querySelector('span:last-child').textContent =
            isSaved ? 'Tersimpan' : 'Simpan ke Favorit';
    }

    cards.forEach(function (card) {
        const detailButton = card.querySelector('.detail-button');

        if (detailButton) {
            detailButton.addEventListener('click', function () {
                openModal(card);
            });
        }
    });

    document.querySelectorAll('.close-modal').forEach(function (button) {
        button.addEventListener('click', closeModal);
    });

    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });

    document.getElementById('modal-bookmark-toggle')
        .addEventListener('click', function () {
            if (!activeScholarshipId) return;

            const card = cards.find(function (item) {
                return String(item.dataset.scholarshipId) === activeScholarshipId;
            });

            if (card) {
                toggleBookmark(card);
                updateModalBookmarkButton();
            }
        });

    // ================= INISIALISASI =================

    const keywordFromUrl = new URLSearchParams(window.location.search)
        .get('keyword');

    if (keywordFromUrl) {
        searchInput.value = keywordFromUrl;
        headerSearchInput.value = keywordFromUrl;
    }

    updateBookmarkButtons();
    applyFilters();
});
</script>

</body>
</html>
