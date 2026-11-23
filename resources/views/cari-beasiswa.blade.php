    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="web_standard" name="shell-type"/>
        <link href="https://fonts.googleapis.com" rel="preconnect"/>
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
        <style>
            @layer base {
                html, body { margin: 0; padding: 0; }
                body { overscroll-behavior: none; }
                main > :first-child { margin-top: 0 !important; }
                main > :last-child { margin-bottom: 0 !important; }
            }
            ::-webkit-scrollbar { display: none; }
        </style>
        <script src="https://cdn.tailwindcss.com"></script>
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "on-primary-fixed": "#00164e",
                            "on-secondary-fixed": "#00201d",
                            "surface-container-highest": "#d5e3fc",
                            "on-secondary-container": "#006f66",
                            "on-tertiary-fixed": "#2a1700",
                            "surface-bright": "#f8f9ff",
                            "primary-fixed": "#dce1ff",
                            "surface": "#f8f9ff",
                            "on-background": "#0d1c2e",
                            "on-primary": "#ffffff",
                            "secondary-fixed-dim": "#6bd8cb",
                            "primary-fixed-dim": "#b6c4ff",
                            "on-tertiary-fixed-variant": "#653e00",
                            "on-tertiary": "#ffffff",
                            "on-surface": "#0d1c2e",
                            "on-error": "#ffffff",
                            "error-container": "#ffdad6",
                            "outline-variant": "#c5c5d3",
                            "inverse-surface": "#233144",
                            "surface-dim": "#ccdbf3",
                            "surface-container-high": "#dce9ff",
                            "on-secondary": "#ffffff",
                            "surface-variant": "#d5e3fc",
                            "inverse-primary": "#b6c4ff",
                            "surface-container-lowest": "#ffffff",
                            "on-secondary-fixed-variant": "#005049",
                            "on-primary-container": "#90a8ff",
                            "error": "#ba1a1a",
                            "surface-container": "#e6eeff",
                            "secondary-fixed": "#89f5e7",
                            "on-primary-fixed-variant": "#264191",
                            "surface-container-low": "#eff4ff",
                            "surface-tint": "#4059aa",
                            "on-tertiary-container": "#ef9900",
                            "secondary": "#006a61",
                            "on-error-container": "#93000a",
                            "tertiary": "#3e2400",
                            "secondary-container": "#86f2e4",
                            "primary": "#00236f",
                            "tertiary-fixed-dim": "#ffb95f",
                            "outline": "#757682",
                            "tertiary-container": "#5c3800",
                            "background": "#f8f9ff",
                            "on-surface-variant": "#444651",
                            "inverse-on-surface": "#eaf1ff",
                            "tertiary-fixed": "#ffddb8",
                            "primary-container": "#1e3a8a"
                        },
                        borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                        spacing: {
                            "margin-mobile": "1rem", "margin": "2rem", "space-lg": "1.5rem", "space-md": "1rem",
                            "gutter-mobile": "1rem", "space-xl": "2.5rem", "space-sm": "0.5rem", "space-xs": "0.25rem", "gutter": "1.5rem"
                        },
                        fontFamily: {
                            "body-lg": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], "label-md": ["Plus Jakarta Sans"],
                            "body-sm": ["Plus Jakarta Sans"], "headline-xl-mobile": ["Plus Jakarta Sans"], "headline-sm": ["Plus Jakarta Sans"],
                            "display-hero-mobile": ["Plus Jakarta Sans"], "label-sm": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"],
                            "label-lg": ["Plus Jakarta Sans"], "display-hero": ["Plus Jakarta Sans"], "headline-xl": ["Plus Jakarta Sans"],
                            "body-md": ["Plus Jakarta Sans"]
                        },
                        fontSize: {
                            "body-lg": ["16px", { "lineHeight": "26px", "fontWeight": "400" }],
                            "headline-lg": ["28px", { "lineHeight": "36px", "fontWeight": "700" }],
                            "label-md": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                            "body-sm": ["13px", { "lineHeight": "18px", "fontWeight": "400" }],
                            "headline-xl-mobile": ["26px", { "lineHeight": "34px", "fontWeight": "700" }],
                            "headline-sm": ["18px", { "lineHeight": "26px", "fontWeight": "600" }],
                            "display-hero-mobile": ["32px", { "lineHeight": "40px", "fontWeight": "800" }],
                            "label-sm": ["11px", { "lineHeight": "14px", "fontWeight": "700" }],
                            "headline-md": ["22px", { "lineHeight": "30px", "fontWeight": "600" }],
                            "label-lg": ["14px", { "lineHeight": "20px", "fontWeight": "600" }],
                            "display-hero": ["48px", { "lineHeight": "56px", "fontWeight": "800" }],
                            "headline-xl": ["36px", { "lineHeight": "44px", "fontWeight": "700" }],
                            "body-md": ["14px", { "lineHeight": "22px", "fontWeight": "400" }]
                        }
                    }
                }
            }

            // Dropdown Navbar Mobile
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuIcon = document.getElementById('mobile-menu-icon');

if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', function () {
        const isHidden = mobileMenu.classList.toggle('hidden');

        mobileMenuButton.setAttribute('aria-expanded', String(!isHidden));
        mobileMenuButton.setAttribute(
            'aria-label',
            isHidden ? 'Buka menu' : 'Tutup menu'
        );

        if (mobileMenuIcon) {
            mobileMenuIcon.textContent = isHidden ? 'menu' : 'close';
        }
    });
}
        </script>

        
    </head>
    <body class="bg-surface font-body-md text-on-surface antialiased">
        
<header class="fixed top-0 z-50 w-full bg-white/90 shadow-sm backdrop-blur-xl">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between gap-4 px-4 md:px-8">

        <!-- Logo -->
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
               class="{{ request()->routeIs('bookmark*') ? 'rounded-lg bg-surface-container-high px-4 py-2 text-sm font-bold text-primary' : 'rounded-lg px-4 py-2 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }}">
                Bookmark
            </a>

            <a href="{{ route('guides') }}"
               class="{{ request()->routeIs('guides*') ? 'rounded-lg bg-surface-container-high px-4 py-2 text-sm font-bold text-primary' : 'rounded-lg px-4 py-2 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }}">
                Tips &amp; Panduan
            </a>

            <a href="{{ route('contact') }}"
               class="{{ request()->routeIs('contact*') ? 'rounded-lg bg-surface-container-high px-4 py-2 text-sm font-bold text-primary' : 'rounded-lg px-4 py-2 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }}">
                Kontak
            </a>

        </nav>

        <!-- Bagian Kanan -->
        <div class="flex items-center gap-2">

            <!-- Pencarian Desktop -->
            <div class="relative hidden w-48 md:block lg:w-56">
                <input
                    aria-label="Cari beasiswa"
                    id="header-search-input"
                    type="search"
                    placeholder="Cari beasiswa..."
                    class="w-full rounded-lg bg-surface-container-low py-2 pl-9 pr-3 text-sm outline-none focus:bg-white focus:ring-2 focus:ring-primary/20"
                >

                <span class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-lg text-on-surface-variant">
                    search
                </span>
            </div>

            <!-- Bookmark -->
            <a href="{{ route('bookmark') }}"
               title="Bookmark"
               aria-label="Lihat beasiswa tersimpan"
               class="relative rounded-lg p-2 text-on-surface-variant hover:bg-surface-container-low hover:text-primary">

                <span class="material-symbols-outlined">bookmark</span>

                <span id="bookmark-count"
                      class="absolute right-0.5 top-0.5 flex h-4 min-w-4 items-center justify-center rounded-full bg-secondary px-1 text-[10px] font-bold text-white">
                    0
                </span>
            </a>

            <!-- Tombol Hamburger Mobile -->
            <button
                id="mobile-menu-button"
                type="button"
                aria-label="Buka menu"
                aria-expanded="false"
                aria-controls="mobile-menu"
                class="rounded-lg p-2 text-primary hover:bg-surface-container-low lg:hidden">

                <span id="mobile-menu-icon" class="material-symbols-outlined">
                    menu
                </span>
            </button>

        </div>
    </div>

    <!-- Dropdown Mobile -->
    <nav id="mobile-menu" class="hidden border-t border-surface-container-high bg-white px-4 py-3 shadow-lg lg:hidden">

        <div class="mx-auto flex max-w-7xl flex-col gap-1">

            <a href="{{ route('home') }}"
               class="rounded-lg px-3 py-3 font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary">
                Beranda
            </a>

            <a href="{{ route('cari.beasiswa') }}"
               class="rounded-lg bg-surface-container-low px-3 py-3 font-bold text-primary">
                Cari Beasiswa
            </a>

            <a href="{{ route('bookmark') }}"
               class="rounded-lg px-3 py-3 font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary">
                Bookmark
            </a>

            <a href="{{ route('guides') }}"
               class="rounded-lg px-3 py-3 font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary">
                Tips &amp; Panduan
            </a>

            <a href="{{ route('contact') }}"
               class="rounded-lg px-3 py-3 font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-primary">
                Kontak
            </a>

        </div>
    </nav>
</header>


        <main class="w-full pt-20 bg-surface min-h-screen">
            <div class="flex flex-col w-full">
                <!-- Subtle Ambient Glow -->
                <div class="relative w-full max-w-7xl mx-auto px-margin pt-space-lg pb-space-xl">
                    <div class="absolute -top-12 left-1/4 w-96 h-96 bg-primary-fixed/20 rounded-full blur-3xl pointer-events-none -z-10"></div>
                    <div class="absolute top-48 right-12 w-80 h-80 bg-secondary-fixed/30 rounded-full blur-3xl pointer-events-none -z-10"></div>

                    <!-- Page Header Sub-Bar / Status Strip -->
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm mb-space-lg">
                        <div>
                            <div class="flex items-center gap-space-xs text-secondary mb-1">
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">verified</span>
                                <span class="font-label-sm text-label-sm uppercase tracking-wider font-bold">Informasi dari Feed Resmi</span>
                            </div>
                            <h1 class="font-headline-xl text-headline-xl text-primary font-bold tracking-tight">Katalog Beasiswa</h1>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-0.5">
                                Beasiswa dari feed resmi yang dikonfigurasi. Periksa persyaratan dan jadwal terbaru pada portal penyelenggara.
                            </p>
                        </div>
                        <!-- Live Sync Tag -->
                        <div class="flex items-center gap-space-xs bg-surface-container-low px-space-md py-space-xs rounded-full shadow-sm self-start md:self-auto">
                            <span class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></span>
                            <span class="font-label-md text-label-md text-on-surface-variant">Katalog diperbarui otomatis dari feed resmi</span>
                        </div>
                    </div>

                    <!-- Main 2-Column Responsive Layout -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                        <!-- ================= SIDEBAR KIRI: Filter Panel ================= -->
                        <aside class="lg:col-span-4 xl:col-span-3 lg:sticky lg:top-24 bg-surface-container-lowest rounded-xl p-space-md shadow-sm transition-all">
                            <div class="flex items-center justify-between pb-space-sm mb-space-sm border-b border-surface-container-high/60">
                                <div class="flex items-center gap-space-xs">
                                    <span class="material-symbols-outlined text-primary text-xl">tune</span>
                                    <span class="font-headline-sm text-headline-sm text-primary font-bold">Filter Pencarian</span>
                                </div>
                                <button class="font-label-md text-label-md text-secondary hover:text-on-secondary-container transition-colors font-semibold" id="reset-filter-btn" type="button">
                                    Reset Semua
                                </button>
                            </div>
                            <form class="flex flex-col gap-space-md" id="filter-form" onsubmit="event.preventDefault();">
                                <!-- Search Input -->
                                <div>
                                    <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1" for="search-input">
                                        Kata Kunci
                                    </label>
                                    <div class="relative">
                                        <input class="w-full bg-surface-container-low text-on-surface font-body-sm text-body-sm rounded-lg pl-9 pr-space-md py-2.5 placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest transition-all" id="search-input" placeholder="Cari nama beasiswa / universitas..." type="search"/>
                                        <span class="material-symbols-outlined text-on-surface-variant text-base absolute left-2.5 top-1/2 -translate-y-1/2 pointer-events-none">search</span>
                                    </div>
                                </div>
                                <!-- Jenjang Pendidikan -->
                                <div class="pt-space-xs" data-filter-group="education">
                                    <div class="flex items-center justify-between cursor-pointer mb-2">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">Jenjang Pendidikan</span>
                                        <span class="material-symbols-outlined text-on-surface-variant text-sm">expand_less</span>
                                    </div>
                                    <div class="flex flex-col gap-1.5 pl-0.5">
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input checked="" class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors">Semua Jenjang</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors">SMA / SMK / Sederajat</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors">Diploma (D3 / D4)</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface font-medium group-hover:text-on-surface transition-colors">Sarjana (S1)</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface font-medium group-hover:text-on-surface transition-colors">Magister (S2)</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors">Doktoral (S3)</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- Tipe Pendanaan -->
                                <div class="pt-space-xs" data-filter-group="funding">
                                    <div class="flex items-center justify-between cursor-pointer mb-2">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">Tipe Pendanaan</span>
                                        <span class="material-symbols-outlined text-on-surface-variant text-sm">expand_less</span>
                                    </div>
                                    <div class="flex flex-col gap-1.5 pl-0.5">
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface font-medium">Penuh (Fully Funded)</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors">Sebagian (Partial Funded)</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors">Bantuan Riset / Tesis</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors">Biaya Hidup Saja</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- Lokasi Kampus -->
                                <div class="pt-space-xs" data-filter-group="location">
                                    <div class="flex items-center justify-between cursor-pointer mb-2">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">Wilayah &amp; Lokasi</span>
                                        <span class="material-symbols-outlined text-on-surface-variant text-sm">expand_less</span>
                                    </div>
                                    <div class="flex flex-col gap-1.5 pl-0.5">
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface font-medium">Dalam Negeri (Indonesia)</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface font-medium">Luar Negeri (Semua)</span>
                                        </label>
                                        <div class="ml-4 flex flex-col gap-1 mt-1 border-l-2 border-surface-container-high pl-2">
                                            <label class="flex items-center gap-2 cursor-pointer group">
                                                <input class="w-3.5 h-3.5 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface">Asia Timur &amp; Tenggara</span>
                                            </label>
                                            <label class="flex items-center gap-2 cursor-pointer group">
                                                <input class="w-3.5 h-3.5 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface">Eropa &amp; Inggris Raya</span>
                                            </label>
                                            <label class="flex items-center gap-2 cursor-pointer group">
                                                <input class="w-3.5 h-3.5 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface">Amerika Utara</span>
                                            </label>
                                            <label class="flex items-center gap-2 cursor-pointer group">
                                                <input class="w-3.5 h-3.5 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface">Australia &amp; Oceania</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Status Pendaftaran -->
                                <div class="pt-space-xs" data-filter-group="status">
                                    <span class="font-label-lg text-label-lg text-on-surface font-bold block mb-2">Status Pendaftaran</span>
                                    <div class="flex flex-col gap-1.5 pl-0.5">
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface font-medium">Buka Sekarang</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface">Segera Dibuka (Coming Soon)</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-tertiary-container font-semibold group-hover:text-tertiary flex items-center gap-1">
                                                <span class="material-symbols-outlined text-xs text-on-tertiary-container">timer</span>
                                                Deadline &lt; 14 Hari
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <!-- Persyaratan Khusus -->
                                <div class="pt-space-xs" data-filter-group="requirements">
                                    <span class="font-label-lg text-label-lg text-on-surface font-bold block mb-2">Persyaratan Khusus</span>
                                    <div class="flex flex-col gap-1.5 pl-0.5">
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface">Tanpa IELTS / TOEFL</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface">Min. IPK &lt; 3.00</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer group">
                                            <input class="w-4 h-4 rounded text-primary focus:ring-0 accent-primary cursor-pointer" type="checkbox"/>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface">Tanpa Wawancara</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- Action Buttons -->
                                <div class="pt-space-sm flex flex-col gap-2">
                                    <button class="w-full bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg font-bold py-2.5 rounded-lg shadow-sm transition-all flex items-center justify-center gap-2" type="submit">
                                        <span class="material-symbols-outlined text-sm">filter_alt</span>
                                        Terapkan Filter
                                    </button>
                                    <button class="w-full bg-surface-container hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md py-2 rounded-lg transition-colors" id="clear-all-filter" type="button">
                                        Batalkan Perubahan
                                    </button>
                                </div>
                            </form>
                        </aside>

                        <!-- ================= AREA KANAN: Hasil Pencarian & Daftar ================= -->
                        <section class="lg:col-span-8 xl:col-span-9 flex flex-col gap-space-md">
                            <!-- Results Bar: Chips & Sorting -->
                            <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
                                <div class="flex flex-col gap-1.5">
                                    <div class="flex items-center gap-2">
                                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold" id="scholarship-result-count">0 Program Ditemukan</span>
                                        <span class="bg-secondary-fixed/50 text-on-secondary-fixed font-label-sm text-label-sm px-2 py-0.5 rounded-full font-bold">Siklus {{ now()->year }}–{{ now()->addYear()->year }}</span>
                                    </div>
                                    <!-- Active Filter Chips -->
                                    <div class="flex flex-wrap items-center gap-1.5 mt-1" id="active-filter-chips">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant mr-1">Filter Aktif:</span>
                                    </div>
                                    <button class="font-label-sm text-label-sm text-secondary hover:underline ml-1 hidden" id="show-all-scholarships" type="button">Tampilkan semua beasiswa</button>
                                </div>
                                <!-- Sort Dropdown -->
                                <div class="flex items-center gap-2 self-end md:self-center shrink-0">
                                    <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Urutkan:</span>
                                    <div class="relative">
                                        <select class="bg-surface-container-low text-on-surface font-label-md text-label-md font-semibold rounded-lg px-3 py-2 pr-8 focus:outline-none cursor-pointer appearance-none">
                                            <option selected="" value="deadline">Deadline Terdekat</option>
                                            <option value="popular">Paling Populer</option>
                                            <option value="newest">Terbaru Ditambahkan</option>
                                            <option value="funding">Pendanaan Tertinggi</option>
                                        </select>
                                        <span class="material-symbols-outlined text-on-surface-variant text-sm absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none">arrow_drop_down</span>
                                    </div>
                                </div>
                            </div>

                            <!-- ================= CARD LIST STREAM ================= -->
                            <div class="flex flex-col gap-space-md" id="scholarship-cards-container">
                            
                              
                  
@foreach ($campusScholarships as $scholarship)
    <article
        class="group bg-surface-container-lowest hover:bg-surface-bright rounded-xl p-space-md shadow-sm hover:shadow-md transition-all duration-200"
        data-scholarship-id="{{ $scholarship->id }}"
        data-scholarship-title="{{ $scholarship->title }}"
        data-scholarship-provider="{{ $scholarship->institution }}"
        data-scholarship-level="{{ $scholarship->education_level ?? '-' }}"
        data-scholarship-funding="{{ $scholarship->funding_type ?? '-' }}"
        data-scholarship-location="{{ $scholarship->location ?? '-' }}"
        data-scholarship-deadline="{{ $scholarship->deadline?->format('Y-m-d') ?? '' }}"
        data-scholarship-url="{{ $scholarship->source_url }}"
        data-scholarship-icon="🎓"
        data-scholarship-description="{{ $scholarship->description }}"
        data-program-type="{{ $scholarship->category ?? 'Beasiswa' }}"
        data-status="{{ $scholarship->status }}"
    >
        <!-- Header Kartu -->
        <div class="flex items-start justify-between gap-space-sm mb-space-sm pb-space-sm border-b border-surface-container-high/60">
            <div class="flex items-center gap-space-sm">
                <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center p-1.5 shrink-0 font-label-sm text-label-sm text-primary font-bold">
                    🎓
                </div>

                <div>
                    <div class="flex items-center gap-2 flex-wrap">
                        <h2 class="font-headline-sm text-headline-sm text-primary font-bold group-hover:text-primary-container transition-colors">
                            {{ $scholarship->title }}
                        </h2>

                        <span class="bg-secondary-fixed/60 text-on-secondary-fixed font-label-sm text-label-sm px-2 py-0.5 rounded-full font-bold">
                            {{ $scholarship->category ?? 'Beasiswa' }}
                        </span>
                    </div>

                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                        {{ $scholarship->institution }}
                    </p>
                </div>
            </div>

            <!-- Tombol Bookmark -->
            <button
                class="bookmark-btn p-2 rounded-lg text-outline hover:text-secondary hover:bg-surface-container transition-colors"
                data-saved="false"
                title="Simpan ke Bookmark"
                type="button"
            >
                <span class="material-symbols-outlined text-xl">
                    bookmark_add
                </span>
            </button>
        </div>

        <!-- Informasi Beasiswa -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm py-2 mb-space-sm bg-surface-container-low/60 rounded-lg px-space-md">

            <div>
                <span class="font-label-sm text-label-sm text-on-surface-variant block">
                    Jenjang Studi
                </span>

                <span class="font-label-md text-label-md text-primary font-bold">
                    {{ $scholarship->education_level ?? '-' }}
                </span>
            </div>

            <div>
                <span class="font-label-sm text-label-sm text-on-surface-variant block">
                    Tipe Pendanaan
                </span>

                <span class="font-label-md text-label-md text-secondary font-bold">
                    {{ $scholarship->funding_type ?? '-' }}
                </span>
            </div>

            <div>
                <span class="font-label-sm text-label-sm text-on-surface-variant block">
                    Cakupan Wilayah
                </span>

                <span class="font-label-md text-label-md text-on-surface font-semibold">
                    {{ $scholarship->location ?? '-' }}
                </span>
            </div>

            <div>
                <span class="font-label-sm text-label-sm text-on-surface-variant block">
                    Batas Pendaftaran
                </span>

                <span class="font-label-md text-label-md text-on-surface font-semibold">
                    {{ $scholarship->deadline?->format('d-m-Y') ?? 'Belum ditentukan' }}
                </span>
            </div>

        </div>

        <!-- Deskripsi -->
        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
            {{ $scholarship->description ?? 'Belum ada deskripsi.' }}
        </p>

        <!-- Kategori dan Status -->
        <div class="flex flex-wrap items-center gap-space-xs mb-space-md">
            <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2.5 py-1 rounded">
                {{ $scholarship->category ?? 'Beasiswa' }}
            </span>

            <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2.5 py-1 rounded">
                {{ $scholarship->status === 'active' ? 'Aktif' : 'Ditutup' }}
            </span>
        </div>

        <!-- Tombol Lihat Detail -->
        <div class="flex items-center justify-between pt-space-xs gap-space-sm">
            <span class="font-body-sm text-body-sm text-on-surface-variant">
                {{ $scholarship->status === 'active' ? 'Aktif' : 'Ditutup' }}
            </span>

            <a
                class="bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md font-bold px-space-md py-2 rounded-lg transition-colors flex items-center gap-1.5 shadow-sm shrink-0"
                data-scholarship-detail-link
                href="{{ route('scholarships.show', ['id' => $scholarship->id]) }}"
            >
                Lihat Detail

                <span class="material-symbols-outlined text-sm">
                    arrow_forward
                </span>
            </a>
        </div>

    </article>
@endforeach

<!-- Pesan Jika Tidak Ada Beasiswa -->
<div
    class="hidden rounded-xl bg-surface-container-lowest p-space-lg text-center text-on-surface-variant"
    id="scholarship-empty-state"
    role="status"
>
    Tidak ada beasiswa yang cocok dengan pilihan filter saat ini.
</div>

                        <!-- ================= PAGINATION ================= -->
                        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col sm:flex-row items-center justify-between gap-space-sm mt-space-sm">
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Menampilkan <span class="font-semibold text-on-surface" id="pagination-result-count">0</span> dari <span class="font-semibold text-on-surface" id="pagination-total-count">0</span> program pilihan
                            </p>
                        </div>
                    </section>
                </div>
            </div>

            <!-- ================= MODAL DETAIL BEASISWA ================= -->
            <div class="fixed inset-0 z-50 bg-inverse-surface/60 backdrop-blur-sm hidden flex items-center justify-center p-4" id="scholarship-detail-modal">
                <div class="bg-surface-container-lowest max-w-2xl w-full rounded-2xl shadow-2xl overflow-hidden flex flex-col max-h-[921px] animate-in fade-in zoom-in-95 duration-200">
                    <!-- Modal Header -->
                    <div class="p-space-md bg-surface-container flex items-center justify-between border-b border-surface-container-high/60">
                        <div class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary">verified_user</span>
                            <span class="font-label-md text-label-md font-bold text-secondary uppercase tracking-wider">Informasi Program Resmi</span>
                        </div>
                        <button class="w-8 h-8 rounded-full hover:bg-surface-container-high text-on-surface-variant flex items-center justify-center transition-colors" onclick="closeScholarshipModal()" type="button">
                            <span class="material-symbols-outlined text-lg">close</span>
                        </button>
                    </div>
                    <!-- Modal Body -->
                    <div class="p-space-md overflow-y-auto flex flex-col gap-space-md">
                        <div>
                            <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider block mb-1">Informasi Terpilih</span>
                            <h3 class="font-headline-lg text-headline-lg text-primary font-bold" id="modal-scholarship-title">Beasiswa {{ now()->year }}–{{ now()->addYear()->year }}</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1" id="modal-scholarship-description">
                                Jadwal dan persyaratan dapat berubah. Periksa informasi terbaru di portal resmi penyelenggara.
                            </p>
                        </div>
                        <!-- Highlight Table -->
                        <div class="bg-surface-container-low rounded-xl p-space-md grid grid-cols-2 gap-space-sm">
                            <div>
                                <span class="font-label-sm text-label-sm text-on-surface-variant block">Status / Jadwal</span>
                                <span class="font-label-lg text-label-lg text-on-surface-variant font-bold mt-0.5" id="modal-scholarship-status">-</span>
                            </div>
                            <div>
                                <span class="font-label-sm text-label-sm text-on-surface-variant block">Jenjang Studi</span>
                                <span class="font-label-lg text-label-lg text-on-surface font-semibold mt-0.5" id="modal-scholarship-level">-</span>
                            </div>
                            <div>
                                <span class="font-label-sm text-label-sm text-on-surface-variant block">Pendanaan / Biaya</span>
                                <span class="font-label-lg text-label-lg text-on-surface font-semibold mt-0.5" id="modal-scholarship-funding">-</span>
                            </div>
                            <div>
                                <span class="font-label-sm text-label-sm text-on-surface-variant block">Cakupan Wilayah</span>
                                <span class="font-label-lg text-label-lg text-on-surface font-semibold mt-0.5" id="modal-scholarship-location">-</span>
                            </div>
                        </div>
                        <div class="bg-surface-bright p-space-md rounded-xl border border-surface-container-high/40">
                            <div class="font-label-lg text-label-lg text-primary font-bold mb-1">Informasi Resmi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Kartu ini merangkum informasi program. Persyaratan, jadwal, dan mekanisme pendaftaran terbaru mengikuti situs resmi penyelenggara.
                            </p>
                        </div>
                    </div>
                    <!-- Modal Footer -->
                    <div class="p-space-md bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-sm border-t border-surface-container-high/60">
                        <button class="w-full sm:w-auto px-space-md py-2.5 rounded-lg border border-secondary text-secondary hover:bg-secondary/10 font-label-md text-label-md font-bold flex items-center justify-center gap-2 transition-colors" id="modal-bookmark-toggle" type="button">
                            <span class="material-symbols-outlined text-base">bookmark</span>
                            Simpan ke Favorit
                        </button>
                        <div class="flex items-center gap-space-xs w-full sm:w-auto">
                            <button class="w-full sm:w-auto px-space-md py-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md font-semibold transition-colors" onclick="closeScholarshipModal()" type="button">
                                Tutup
                            </button>
                            <a id="modal-portal-link" class="w-full sm:w-auto px-space-md py-2.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md font-bold flex items-center justify-center gap-2 shadow-sm transition-colors" href="https://lpdp.kemenkeu.go.id/" target="_blank" rel="noopener noreferrer">
                                Kunjungi Portal Resmi
                                <span class="material-symbols-outlined text-sm">open_in_new</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inline Micro-interactions Script -->
            <script>
                const bookmarkStorageKey = 'caribeasiswa:bookmarks:v1';
                const bookmarkDetailsStorageKey = 'caribeasiswa:bookmark-details:v1';
                const scholarshipDetailRoute = @json(route('scholarships.show', ['id' => '__SCHOLARSHIP_ID__']));
                const filterForm = document.getElementById('filter-form');
                const searchInput = document.getElementById('search-input');
                const headerSearchInput = document.getElementById('header-search-input');
                const cardContainer = document.getElementById('scholarship-cards-container');
                const scholarshipCards = Array.from(cardContainer.querySelectorAll('article[data-scholarship-id]'));
                document.getElementById('pagination-total-count').textContent = scholarshipCards.length;
                const filterGroups = Object.fromEntries(
                    Array.from(filterForm.querySelectorAll('[data-filter-group]')).map((group) => [group.dataset.filterGroup, group])
                );
                const storedBookmarks = localStorage.getItem(bookmarkStorageKey);
                const storedBookmarkIds = storedBookmarks === null
                    ? scholarshipCards
                        .filter((card) => card.querySelector('.bookmark-btn')?.dataset.saved === 'true')
                        .map((card) => card.dataset.scholarshipId)
                    : JSON.parse(storedBookmarks);
                const savedScholarships = new Set(
                    Array.isArray(storedBookmarkIds)
                        ? storedBookmarkIds.filter((scholarshipId) => typeof scholarshipId === 'string')
                        : []
                );
                const bookmarkDetails = JSON.parse(localStorage.getItem(bookmarkDetailsStorageKey) || '{}');
                let showingBookmarks = false;
                let activeModalScholarshipId = null;

                function normalizeText(value) {
                    return (value || '').toLowerCase().replace(/[^a-z0-9\s]/g, ' ').replace(/\s+/g, ' ').trim();
                }

                function scholarshipDetails(card) {
                    return {
                        id: card.dataset.scholarshipId,
                        title: card.dataset.scholarshipTitle,
                        provider: card.dataset.scholarshipProvider,
                        level: card.dataset.scholarshipLevel,
                        funding: card.dataset.scholarshipFunding,
                        location: card.dataset.scholarshipLocation,
                        deadline: card.dataset.scholarshipDeadline,
                        status: card.dataset.status,
                        url: card.dataset.scholarshipUrl,
                        icon: card.dataset.scholarshipIcon,
                        programType: card.dataset.programType,
                        description: card.dataset.scholarshipDescription,
                        category: 'kampus',
                    };
                }

                function scholarshipDetailUrl(record) {
                    const path = scholarshipDetailRoute.replace('__SCHOLARSHIP_ID__', encodeURIComponent(record.id));
                    const url = new URL(path, window.location.origin);
                    const fields = {
                        title: record.title,
                        provider: record.provider,
                        level: record.level,
                        funding: record.funding,
                        location: record.location,
                        deadline: record.deadline,
                        status: record.status,
                        url: record.url,
                        icon: record.icon,
                        program_type: record.programType,
                        description: record.description,
                        category: record.category,
                    };

                    Object.entries(fields).forEach(([key, value]) => {
                        if (value) {
                            url.searchParams.set(key, value);
                        }
                    });

                    return url.toString();
                }

                function labelTextForCheckbox(input) {
                    const label = input.closest('label');
                    return normalizeText(label ? label.textContent : '');
                }

                function selectedValues(groupNode) {
                    const checkedInputs = Array.from(groupNode.querySelectorAll('input[type="checkbox"]:checked'));
                    if (checkedInputs.some((input) => labelTextForCheckbox(input).includes('semua'))) {
                        return [];
                    }

                    return checkedInputs.map(labelTextForCheckbox);
                }

                function groupMatches(cardText, values, matcher) {
                    if (!values.length) {
                        return true;
                    }

                    return values.some((value) => matcher(cardText, value));
                }

                function matchesEducationRule(cardText, value) {
                    if (value.includes('sma') || value.includes('smk')) return /sma|smk|sekolah|senior/.test(cardText);
                    if (value.includes('diploma') || value.includes('d3') || value.includes('d4')) return /d3|d4|diploma/.test(cardText);
                    if (value.includes('s1') || value.includes('sarjana')) return /s1|sarjana|undergraduate/.test(cardText);
                    if (value.includes('s2') || value.includes('magister')) return /s2|magister|master/.test(cardText);
                    if (value.includes('s3') || value.includes('doktoral')) return /s3|doktoral|doctoral|phd/.test(cardText);
                    return false;
                }

                function matchesFundingRule(cardText, value) {
                    if (value.includes('fully') || value.includes('penuh')) return /fully funded|full funded|full scholarship|penuh|100%|pembebasan/.test(cardText);
                    if (value.includes('partial') || value.includes('sebagian')) return /partial|sebagi/.test(cardText);
                    if (value.includes('riset') || value.includes('tesis')) return /riset|tesis|research/.test(cardText);
                    if (value.includes('biaya hidup') || value.includes('hidup')) return /biaya hidup|living|uang saku/.test(cardText);
                    return false;
                }

                function matchesLocationRule(cardText, value) {
                    if (value.includes('dalam negeri') || value.includes('indonesia')) return /indonesia|dalam negeri|domestik/.test(cardText);
                    if (value.includes('luar negeri')) return /luar negeri|jepang|japan|uk|britania|eropa|europe|amerika|australia/.test(cardText);
                    if (value.includes('asia') || value.includes('jepang')) return /asia|jepang|japan|singapura|thailand|taiwan|malaysia/.test(cardText);
                    if (value.includes('eropa') || value.includes('inggris')) return /eropa|uk|united kingdom|inggris|europe|britania/.test(cardText);
                    if (value.includes('amerika')) return /amerika|usa|united states|north america/.test(cardText);
                    if (value.includes('australia')) return /australia|oceania/.test(cardText);
                    return false;
                }

                function matchesStatusRule(cardText, value) {
                    if (value.includes('buka sekarang')) return /buka pendaftaran|deadline dekat|deadline dalam/.test(cardText);
                    if (value.includes('segera dibuka')) return /segera dibuka|coming soon|dibuka:/.test(cardText);
                    if (value.includes('deadline')) {
                        const deadline = cardText.match(/(?:sisa waktu:\s*|deadline dalam\s*)(\d+)\s*hari/);
                        return deadline !== null && Number(deadline[1]) < 14;
                    }
                    return false;
                }

                function matchesRequirementRule(cardText, value) {
                    if (value.includes('ielts') || value.includes('toefl')) return /tanpa ielts|tanpa toefl/.test(cardText);
                    if (value.includes('ipk')) return /ipk kurang dari 3|ipk di bawah 3|min ipk 2/.test(cardText);
                    if (value.includes('wawancara')) return /tanpa wawancara|tidak ada wawancara/.test(cardText);
                    return false;
                }

                function renderBookmarkButton(button, isSaved) {
                    const icon = button.querySelector('.material-symbols-outlined');
                    const text = button.querySelector('span:not(.material-symbols-outlined)');
                    button.dataset.saved = String(isSaved);
                    button.classList.toggle('text-secondary', isSaved);
                    button.classList.toggle('text-outline', !isSaved);
                    button.title = isSaved ? 'Hapus dari Bookmark' : 'Simpan ke Bookmark';
                    icon.textContent = isSaved ? 'bookmark' : 'bookmark_add';
                    icon.style.fontVariationSettings = isSaved ? "'FILL' 1" : "'FILL' 0";
                    if (text) text.textContent = isSaved ? 'Tersimpan' : 'Simpan';
                }

                function persistBookmarks() {
                    localStorage.setItem(bookmarkStorageKey, JSON.stringify(Array.from(savedScholarships)));
                    scholarshipCards.forEach((card) => {
                        const scholarshipId = card.dataset.scholarshipId;
                        if (savedScholarships.has(scholarshipId)) {
                            bookmarkDetails[scholarshipId] = scholarshipDetails(card);
                        } else {
                            delete bookmarkDetails[scholarshipId];
                        }
                    });
                    localStorage.setItem(bookmarkDetailsStorageKey, JSON.stringify(bookmarkDetails));
                    document.getElementById('bookmark-count').textContent = savedScholarships.size;
                    scholarshipCards.forEach((card) => {
                        renderBookmarkButton(card.querySelector('.bookmark-btn'), savedScholarships.has(card.dataset.scholarshipId));
                    });
                    if (activeModalScholarshipId) updateModalBookmarkButton();
                }

                scholarshipCards.forEach((card) => {
                    const detailLink = card.querySelector('[data-scholarship-detail-link]');
                    if (detailLink) {
                        detailLink.href = scholarshipDetailUrl(scholarshipDetails(card));
                    }
                });

                function updateModalBookmarkButton() {
                    const button = document.getElementById('modal-bookmark-toggle');
                    const icon = button.querySelector('.material-symbols-outlined');
                    const isSaved = savedScholarships.has(activeModalScholarshipId);
                    button.dataset.saved = String(isSaved);
                    icon.textContent = isSaved ? 'bookmark_added' : 'bookmark_add';
                    button.lastChild.textContent = isSaved ? ' Tersimpan' : ' Simpan ke Favorit';
                }

                function appendFilterChip(container, label, onRemove) {
                    const chip = document.createElement('span');
                    chip.className = 'inline-flex items-center gap-1 bg-surface-container-high text-primary font-label-sm text-label-sm px-2.5 py-1 rounded-full';
                    chip.append(document.createTextNode(label));

                    const removeButton = document.createElement('button');
                    removeButton.className = 'hover:text-error transition-colors';
                    removeButton.title = 'Hapus filter';
                    removeButton.type = 'button';
                    removeButton.innerHTML = '<span class="material-symbols-outlined text-xs">close</span>';
                    removeButton.addEventListener('click', onRemove);
                    chip.append(removeButton);
                    container.append(chip);
                }

                function renderActiveFilterChips() {
                    const container = document.getElementById('active-filter-chips');
                    container.replaceChildren();
                    const heading = document.createElement('span');
                    heading.className = 'font-label-sm text-label-sm text-on-surface-variant mr-1';
                    heading.textContent = 'Filter Aktif:';
                    container.append(heading);

                    if (searchInput.value.trim()) {
                        appendFilterChip(container, 'Kata kunci: ' + searchInput.value.trim(), () => {
                            searchInput.value = '';
                            headerSearchInput.value = '';
                            applyScholarshipFilters();
                        });
                    }

                    Object.values(filterGroups).forEach((group) => {
                        Array.from(group.querySelectorAll('input[type="checkbox"]:checked')).forEach((input) => {
                            const value = labelTextForCheckbox(input);
                            if (value.includes('semua')) return;
                            appendFilterChip(container, input.closest('label').textContent.trim(), () => {
                                input.checked = false;
                                applyScholarshipFilters();
                            });
                        });
                    });

                    if (showingBookmarks) {
                        appendFilterChip(container, 'Bookmark saya', () => {
                            showingBookmarks = false;
                            applyScholarshipFilters();
                        });
                    }

                    if (container.childElementCount === 1) {
                        const emptyLabel = document.createElement('span');
                        emptyLabel.className = 'font-label-sm text-label-sm text-on-surface-variant';
                        emptyLabel.textContent = 'Tidak ada';
                        container.append(emptyLabel);
                    }
                }

                function applyScholarshipFilters() {
                    const keyword = normalizeText(searchInput.value);
                    const educationValues = selectedValues(filterGroups.education);
                    const fundingValues = selectedValues(filterGroups.funding);
                    const locationValues = selectedValues(filterGroups.location);
                    const statusValues = selectedValues(filterGroups.status);
                    const requirementValues = selectedValues(filterGroups.requirements);
                    let visibleCount = 0;

                    scholarshipCards.forEach((card) => {
                        const text = normalizeText(card.textContent);
                        const matchesKeyword = !keyword || keyword.split(' ').every((word) => text.includes(word));
                        const isVisible = matchesKeyword
                            && groupMatches(text, educationValues, matchesEducationRule)
                            && groupMatches(text, fundingValues, matchesFundingRule)
                            && groupMatches(text, locationValues, matchesLocationRule)
                            && groupMatches(text, statusValues, matchesStatusRule)
                            && groupMatches(text, requirementValues, matchesRequirementRule)
                            && (!showingBookmarks || savedScholarships.has(card.dataset.scholarshipId));

                        card.style.display = isVisible ? '' : 'none';
                        if (isVisible) visibleCount++;
                    });

                    document.getElementById('scholarship-result-count').textContent = visibleCount + ' Program Ditemukan';
                    document.getElementById('pagination-result-count').textContent = visibleCount;
                    const emptyState = document.getElementById('scholarship-empty-state');
                    emptyState.classList.toggle('hidden', visibleCount > 0);
                    emptyState.textContent = showingBookmarks && savedScholarships.size === 0
                        ? 'Belum ada beasiswa yang disimpan. Tekan tombol Simpan pada beasiswa untuk menambahkannya.'
                        : 'Tidak ada beasiswa yang cocok dengan pilihan filter saat ini.';
                    document.getElementById(    'show-all-scholarships').classList.toggle('hidden', !showingBookmarks);
                    renderActiveFilterChips();
                }

                // Flowchart Detail Modal Handlers
                function showScholarshipModal(title, officialUrl) {
                    const modal = document.getElementById('scholarship-detail-modal');
                    const titleElem = document.getElementById('modal-scholarship-title');
                    const portalLink = document.getElementById('modal-portal-link');
                    const normalizedTitle = normalizeText(title);
                    const card = scholarshipCards.find((item) => normalizeText(item.querySelector('h2').textContent).startsWith(normalizedTitle));

                    if (titleElem && title) {
                        titleElem.textContent = title;
                    }

                    if (card) {
                        document.getElementById('modal-scholarship-description').textContent =
                            'Jadwal dan persyaratan dapat berubah. Periksa informasi terbaru di portal resmi penyelenggara.';
                        document.getElementById('modal-scholarship-status').textContent = card.dataset.status;
                        document.getElementById('modal-scholarship-level').textContent =
                            card.querySelector('.grid-cols-2 > div:nth-child(1) .font-label-md').textContent.trim();
                        document.getElementById('modal-scholarship-funding').textContent =
                            card.querySelector('.grid-cols-2 > div:nth-child(2) .font-label-md').textContent.trim();
                        document.getElementById('modal-scholarship-location').textContent =
                            card.querySelector('.grid-cols-2 > div:nth-child(3) .font-label-md').textContent.trim();
                    }

                    activeModalScholarshipId = card ? card.dataset.scholarshipId : null;
                    if (activeModalScholarshipId) updateModalBookmarkButton();

                    if (portalLink) {
                        portalLink.href = officialUrl || 'https://lpdp.kemenkeu.go.id/';
                        portalLink.target = '_blank';
                        portalLink.rel = 'noopener noreferrer';
                    }

                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                    document.getElementById('modal-bookmark-toggle').disabled = !activeModalScholarshipId;
                }

                function closeScholarshipModal() {
                    const modal = document.getElementById('scholarship-detail-modal');
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                    activeModalScholarshipId = null;
                }

                const modalNode = document.getElementById('scholarship-detail-modal');
                modalNode.addEventListener('click', (event) => {
                    if (event.target === modalNode) closeScholarshipModal();
                });
                document.addEventListener('keydown', (event) => {
                    if (event.key === 'Escape' && !modalNode.classList.contains('hidden')) closeScholarshipModal();
                });

                scholarshipCards.forEach((card) => {
                    card.querySelector('.bookmark-btn').addEventListener('click', (event) => {
                        event.stopPropagation();
                        const scholarshipId = card.dataset.scholarshipId;
                        if (savedScholarships.has(scholarshipId)) {
                            savedScholarships.delete(scholarshipId);
                        } else {
                            savedScholarships.add(scholarshipId);
                        }
                        persistBookmarks();
                        applyScholarshipFilters();
                    });
                });

                document.getElementById('modal-bookmark-toggle').addEventListener('click', () => {
                    if (!activeModalScholarshipId) return;
                    if (savedScholarships.has(activeModalScholarshipId)) {
                        savedScholarships.delete(activeModalScholarshipId);
                    } else {
                        savedScholarships.add(activeModalScholarshipId);
                    }
                    persistBookmarks();
                    applyScholarshipFilters();
                });

                document.querySelectorAll('[data-show-bookmarks]').forEach((link) => {
                    link.addEventListener('click', (event) => {
                        event.preventDefault();
                        showingBookmarks = true;
                        applyScholarshipFilters();
                        cardContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    });
                });

                document.getElementById('show-all-scholarships').addEventListener('click', () => {
                    showingBookmarks = false;
                    applyScholarshipFilters();
                });

                function resetFilters() {
                    searchInput.value = '';
                    headerSearchInput.value = '';
                    filterForm.querySelectorAll('input[type="checkbox"]').forEach((input) => {
                        input.checked = false;
                    });
                    filterGroups.education.querySelector('input[type="checkbox"]').checked = true;
                    showingBookmarks = false;
                    applyScholarshipFilters();
                }

                document.getElementById('reset-filter-btn').addEventListener('click', resetFilters);
                document.getElementById('clear-all-filter').addEventListener('click', resetFilters);
                filterForm.addEventListener('submit', (event) => {
                    event.preventDefault();
                    applyScholarshipFilters();
                });
                searchInput.addEventListener('input', () => {
                    headerSearchInput.value = searchInput.value;
                    applyScholarshipFilters();
                });
                headerSearchInput.addEventListener('input', () => {
                    searchInput.value = headerSearchInput.value;
                    applyScholarshipFilters();
                });

                filterForm.querySelectorAll('input[type="checkbox"]').forEach((input) => {
                    input.addEventListener('change', () => {
                        const group = input.closest('[data-filter-group]');
                        if (group.dataset.filterGroup === 'education') {
                            const checkboxes = Array.from(group.querySelectorAll('input[type="checkbox"]'));
                            if (labelTextForCheckbox(input).includes('semua') && input.checked) {
                                checkboxes.forEach((checkbox) => {
                                    if (checkbox !== input) checkbox.checked = false;
                                });
                            } else if (input.checked) {
                                checkboxes[0].checked = false;
                            }
                        }
                        applyScholarshipFilters();
                    });
                });

                const keywordFromUrl = new URLSearchParams(window.location.search).get('keyword');
                if (keywordFromUrl) {
                    searchInput.value = keywordFromUrl;
                    headerSearchInput.value = keywordFromUrl;
                }
                persistBookmarks();
                applyScholarshipFilters();
            </script>
        </div>
    </main>

    <footer class="w-full bg-surface-container-low text-on-surface-variant pt-space-xl pb-space-lg">
        <div class="max-w-7xl mx-auto px-margin">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-lg mb-space-xl">
                <div class="lg:col-span-2 flex flex-col gap-space-sm">
                    <div class="flex items-center gap-space-xs mb-space-xs">
                        <img alt="CariBeasiswa Brand Logo" class="h-7 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/ALJJyrDyYTXdMdxcKMwBBX4Dm47m265guyKMeLdM2duGN95k3bp8MfmUOSG40jK9NbSUV2w1tbGukD6Qzw53RCFEoEN5PKUqVjHe2NE5y8hVtL3-O5kloeqYXXBXHknt1N4HJW2v5GLLVnep1M_XO-NS9OYF7YigXrhrQ_JQDb1CS8qKbYsXjnyqSkFeGVqdvJ8vhTpHczLlIUQ33XnCRCCJvFblter7XHLy8yZtbpiskYM9_Q" onerror="this.onerror=null;this.src='https://placehold.co/28x28/00236f/ffffff?text=CB';"/>
                        <span class="font-headline-sm text-headline-sm text-primary font-bold tracking-tight">CariBeasiswa</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-sm">Pusat kurasi informasi beasiswa terpadu untuk pelajar dan mahasiswa Indonesia dalam meraih peluang studi terbaik di dalam negeri maupun luar negeri.</p>
                    <div class="flex items-center gap-space-sm mt-space-sm">
                        <span class="font-label-md text-label-md text-secondary bg-surface-container-high px-space-sm py-1 rounded-full">Terverifikasi Resmi</span>
                        <span class="font-label-md text-label-md text-on-surface-variant bg-surface-container-highest px-space-sm py-1 rounded-full">Kemendikbudristek &amp; LPDP Sync</span>
                    </div>
                </div>
                <div class="flex flex-col gap-space-xs">
                    <div class="font-label-lg text-label-lg text-on-surface font-bold mb-space-xs">Eksplorasi Beasiswa</div>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">Semua Beasiswa</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">Beasiswa S1 Sarjana</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">Beasiswa S2 &amp; S3 Magister/Doktor</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">Fully Funded Programs</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="bookmark" href="{{ route('bookmark') }}">Daftar Disimpan</a>
                </div>
                <div class="flex flex-col gap-space-xs">
                    <div class="font-label-lg text-label-lg text-on-surface font-bold mb-space-xs">Persiapan &amp; Panduan</div>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="tips-&amp;-panduan" href="{{ route('guides') }}">Panduan Motivation Letter</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="tips-&amp;-panduan" href="{{ route('guides') }}">Simulasi Tes IELTS / TOEFL</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="tips-&amp;-panduan" href="{{ route('guides') }}">Wawancara Beasiswa</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="tips-&amp;-panduan" href="{{ route('guides') }}">Kalender Pendaftaran</a>
                </div>
                <div class="flex flex-col gap-space-xs">
                    <div class="font-label-lg text-label-lg text-on-surface font-bold mb-space-xs">Bantuan &amp; Mitra</div>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="kontak-&amp;-tentang" href="{{ route('contact') }}">Kontak</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="kontak-&amp;-tentang" href="{{ route('contact') }}">Helpdesk &amp; Pengaduan</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="kontak-&amp;-tentang" href="{{ route('contact') }}">Live Chat Admin</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="kontak-&amp;-tentang" href="{{ route('contact') }}">Kemitraan Institusi</a>
                </div>
            </div>
            <div class="pt-space-md flex flex-col md:flex-row items-center justify-between gap-space-sm font-body-sm text-body-sm text-on-surface-variant">
                <p>© 2025 CariBeasiswa Indonesia. Hak cipta dilindungi undang-undang.</p>
                <div class="flex items-center gap-space-md">
                    <span class="hover:text-primary transition-colors cursor-pointer">Kebijakan Privasi</span>
                    <span class="hover:text-primary transition-colors cursor-pointer">Syarat &amp; Ketentuan</span>
                    <span class="hover:text-primary transition-colors cursor-pointer">Portal Resmi Pemerintah</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
