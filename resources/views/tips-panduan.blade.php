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
                        "surface-bright": "#f8f9ff",
                        "primary": "#00236f",
                        "secondary-container": "#86f2e4",
                        "surface-container-low": "#eff4ff",
                        "on-tertiary-container": "#ef9900",
                        "surface": "#f8f9ff",
                        "on-secondary-fixed": "#00201d",
                        "outline-variant": "#c5c5d3",
                        "on-primary-fixed-variant": "#264191",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#dce9ff",
                        "on-surface-variant": "#444651",
                        "on-primary-container": "#90a8ff",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "outline": "#757682",
                        "surface-dim": "#ccdbf3",
                        "surface-tint": "#4059aa",
                        "inverse-surface": "#233144",
                        "on-primary-fixed": "#00164e",
                        "surface-container-highest": "#d5e3fc",
                        "on-surface": "#0d1c2e",
                        "primary-fixed": "#dce1ff",
                        "inverse-primary": "#b6c4ff",
                        "on-tertiary-fixed-variant": "#653e00",
                        "primary-container": "#1e3a8a",
                        "primary-fixed-dim": "#b6c4ff",
                        "on-background": "#0d1c2e",
                        "surface-container": "#e6eeff",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#89f5e7",
                        "background": "#f8f9ff",
                        "on-error": "#ffffff",
                        "tertiary-container": "#5c3800",
                        "tertiary-fixed": "#ffddb8",
                        "on-tertiary-fixed": "#2a1700",
                        "inverse-on-surface": "#eaf1ff",
                        "on-secondary-container": "#006f66",
                        "on-primary": "#ffffff",
                        "secondary": "#006a61",
                        "tertiary": "#3e2400",
                        "tertiary-fixed-dim": "#ffb95f",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed-variant": "#005049",
                        "surface-variant": "#d5e3fc",
                        "secondary-fixed-dim": "#6bd8cb",
                        "on-secondary": "#ffffff"
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                    spacing: {
                        "margin": "2rem", "margin-mobile": "1rem", "space-md": "1rem", "space-lg": "1.5rem",
                        "space-xl": "2.5rem", "gutter": "1.5rem", "space-sm": "0.5rem", "gutter-mobile": "1rem", "space-xs": "0.25rem"
                    },
                    fontFamily: {
                        "headline-xl-mobile": ["Plus Jakarta Sans"], "body-lg": ["Plus Jakarta Sans"], "display-hero": ["Plus Jakarta Sans"],
                        "display-hero-mobile": ["Plus Jakarta Sans"], "label-md": ["Plus Jakarta Sans"], "label-lg": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"], "headline-xl": ["Plus Jakarta Sans"], "body-sm": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], "body-md": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "headline-xl-mobile": ["26px", { "lineHeight": "34px", "fontWeight": "700" }],
                        "body-lg": ["16px", { "lineHeight": "26px", "fontWeight": "400" }],
                        "display-hero": ["48px", { "lineHeight": "56px", "fontWeight": "800" }],
                        "display-hero-mobile": ["32px", { "lineHeight": "40px", "fontWeight": "800" }],
                        "label-md": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "fontWeight": "600" }],
                        "label-sm": ["11px", { "lineHeight": "14px", "fontWeight": "700" }],
                        "headline-xl": ["36px", { "lineHeight": "44px", "fontWeight": "700" }],
                        "body-sm": ["13px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "headline-md": ["22px", { "lineHeight": "30px", "fontWeight": "600" }],
                        "headline-lg": ["28px", { "lineHeight": "36px", "fontWeight": "700" }],
                        "body-md": ["14px", { "lineHeight": "22px", "fontWeight": "400" }],
                        "headline-sm": ["18px", { "lineHeight": "26px", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased">
    <!-- Header Navigasi -->
    <header class="fixed top-0 w-full z-50 bg-surface-container-lowest/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="h-20 max-w-7xl mx-auto px-margin flex items-center justify-between gap-gutter">
            <div class="flex items-center gap-space-md">
                <img alt="CariBeasiswa Brand Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/ALJJyrDyYTXdMdxcKMwBBX4Dm47m265guyKMeLdM2duGN95k3bp8MfmUOSG40jK9NbSUV2w1tbGukD6Qzw53RCFEoEN5PKUqVjHe2NE5y8hVtL3-O5kloeqYXXBXHknt1N4HJW2v5GLLVnep1M_XO-NS9OYF7YigXrhrQ_JQDb1CS8qKbYsXjnyqSkFeGVqdvJ8vhTpHczLlIUQ33XnCRCCJvFblter7XHLy8yZtbpiskYM9_Q" onerror="this.onerror=null;this.src='https://placehold.co/32x32/00236f/ffffff?text=CB';"/>
                <a class="flex items-center" data-path="beranda" href="{{ route('home') }}">
                    <span class="font-headline-sm text-headline-sm text-primary tracking-tight font-bold">CariBeasiswa</span>
                    <span class="font-label-sm text-label-sm text-secondary bg-secondary-fixed/50 px-space-xs py-0.5 rounded ml-space-xs">ID</span>
                </a>
            </div>
            <!-- Menu Beranda -->
<a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-blue-100 text-blue-900 px-4 py-2 rounded-xl font-bold' : 'text-gray-600 hover:text-blue-900 px-4 py-2' }}">
    Beranda
</a>

<!-- Menu Cari Beasiswa -->
<a href="{{ route('cari.beasiswa') }}" class="{{ request()->routeIs('cari.beasiswa*') ? 'bg-blue-100 text-blue-900 px-4 py-2 rounded-xl font-bold' : 'text-gray-600 hover:text-blue-900 px-4 py-2' }}">
    Cari Beasiswa
</a>

<!-- Menu Bookmark -->
<a href="{{ route('bookmark') }}" class="{{ request()->routeIs('bookmark*') ? 'bg-blue-100 text-blue-900 px-4 py-2 rounded-xl font-bold' : 'text-gray-600 hover:text-blue-900 px-4 py-2' }}">
    Bookmark
</a>

<!-- Menu Tips & Panduan -->
<a href="{{ route('guides') }}" class="{{ request()->routeIs('guides*') ? 'bg-blue-100 text-blue-900 px-4 py-2 rounded-xl font-bold' : 'text-gray-600 hover:text-blue-900 px-4 py-2' }}">
    Tips &amp; Panduan
</a>

<!-- Menu Kontak -->
<a href="{{ route('contact') }}" class="{{ request()->routeIs('contact*') ? 'bg-blue-100 text-blue-900 px-4 py-2 rounded-xl font-bold' : 'text-gray-600 hover:text-blue-900 px-4 py-2' }}">
    Kontak
</a>
            <div class="flex items-center gap-space-md">
                <div class="relative hidden md:block w-56 lg:w-64">
                    <input class="w-full bg-surface-container-low text-on-surface font-body-sm text-body-sm rounded-lg pl-9 pr-space-md py-space-sm placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-container-lowest transition-colors" placeholder="Cari beasiswa, jenjang..." type="text"/>
                    <span class="material-symbols-outlined text-on-surface-variant text-base absolute left-space-sm top-1/2 -translate-y-1/2 pointer-events-none">search</span>
                </div>
                <a class="relative p-space-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low rounded-lg transition-colors" data-path="bookmark" href="{{ route('bookmark') }}" title="Simpanan Beasiswa">
                    <span class="material-symbols-outlined">bookmark</span>
                    <span class="absolute top-1 right-1 w-4 h-4 rounded-full bg-secondary text-on-secondary font-label-sm text-[10px] flex items-center justify-center font-bold">0</span>
                </a>
                <button class="relative p-space-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low rounded-lg transition-colors" title="Notifikasi" type="button">
                    
                </button>
                <div class="flex items-center pl-space-xs">
                    <a class="flex items-center gap-space-xs p-1 rounded-full hover:bg-surface-container-low transition-colors" data-path="kontak-tentang" href="{{ route('login') }}">
                        
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="w-full pt-20 bg-surface min-h-screen">
        <div class="flex flex-col w-full">
            <!-- Top Editorial Header & Intro -->
            <section class="relative w-full bg-gradient-to-b from-surface-container-high/40 via-surface to-surface overflow-hidden py-space-xl">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="flex items-center gap-space-xs font-label-md text-label-md text-secondary font-bold uppercase tracking-wider mb-space-sm">
                        <span class="inline-flex items-center justify-center w-2 h-2 rounded-full bg-secondary"></span>
                        <span>Akademi &amp; Panduan Awardee</span>
                        <span class="text-outline-variant">/</span>
                        <span class="text-on-surface-variant font-medium">Kurasi Resmi LPDP, Chevening, MEXT &amp; AAS</span>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
                        <div class="lg:col-span-8">
                            <h1 class="font-headline-xl text-headline-xl text-primary font-extrabold tracking-tight mb-space-sm">
                                Tips &amp; Panduan Sukses Raih Beasiswa
                            </h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl leading-relaxed">
                                Kurasi strategi lolos seleksi berkas, esai &amp; <em>motivation letter</em>, tes kemampuan bahasa (IELTS/TOEFL), serta teknik wawancara komprehensif langsung dari para alumni dan awardee universitas top dunia.
                            </p>
                        </div>
                        <div class="lg:col-span-4 flex justify-start lg:justify-end">
                            <div class="bg-surface-container-lowest shadow-sm rounded-xl p-space-md flex items-center gap-space-md w-full sm:w-auto">
                                <div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">military_tech</span>
                                </div>
                                <div>
                                    <div class="font-headline-sm text-headline-sm font-bold text-primary">94.2%</div>
                                    <div class="font-body-sm text-body-sm text-on-surface-variant">Rasio lolos tahap berkas pembaca</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Interactive Roadmap Visual Section -->
            <section class="w-full py-space-lg bg-surface">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm mb-space-lg">
                            <div>
                                <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Roadmap Sukses</span>
                                <h2 class="font-headline-md text-headline-md text-on-surface font-bold">5 Tahapan Kunci Menuju Beasiswa Impian</h2>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
                                <span class="material-symbols-outlined text-base text-secondary">info</span>
                                Rekomendasi persiapan: 6 - 9 bulan sebelum pendaftaran dibuka
                            </span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-space-md relative">
                            <div class="relative bg-surface-container-low/70 rounded-lg p-space-md flex flex-col justify-between hover:bg-surface-container-high transition-colors group">
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="w-7 h-7 rounded-full bg-primary text-on-primary font-label-md text-label-md font-bold flex items-center justify-center">1</span>
                                    <span class="material-symbols-outlined text-primary text-xl">travel_explore</span>
                                </div>
                                <div class="font-label-lg text-label-lg font-bold text-primary mb-1">Riset &amp; Target</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-snug">Identifikasi jurusan, negara tujuan, skema fully-funded, dan syarat minimal IPK.</p>
                            </div>
                            <div class="relative bg-surface-container-low/70 rounded-lg p-space-md flex flex-col justify-between hover:bg-surface-container-high transition-colors group">
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="w-7 h-7 rounded-full bg-primary text-on-primary font-label-md text-label-md font-bold flex items-center justify-center">2</span>
                                    <span class="material-symbols-outlined text-primary text-xl">folder_managed</span>
                                </div>
                                <div class="font-label-lg text-label-lg font-bold text-primary mb-1">Berkas &amp; Legalisir</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-snug">Legalisir transkrip, surat rekomendasi, CV format ATS/Europass, dan SKCK.</p>
                            </div>
                            <div class="relative bg-surface-container-low/70 rounded-lg p-space-md flex flex-col justify-between hover:bg-surface-container-high transition-colors group">
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="w-7 h-7 rounded-full bg-primary text-on-primary font-label-md text-label-md font-bold flex items-center justify-center">3</span>
                                    <span class="material-symbols-outlined text-primary text-xl">translate</span>
                                </div>
                                <div class="font-label-lg text-label-lg font-bold text-primary mb-1">Tes Bahasa Resmi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-snug">Target skor IELTS minimal 6.5 - 7.5 atau TOEFL iBT 90+ sesuai kriteria kampus.</p>
                            </div>
                            <div class="relative bg-surface-container-low/70 rounded-lg p-space-md flex flex-col justify-between hover:bg-surface-container-high transition-colors group">
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="w-7 h-7 rounded-full bg-primary text-on-primary font-label-md text-label-md font-bold flex items-center justify-center">4</span>
                                    <span class="material-symbols-outlined text-primary text-xl">history_edu</span>
                                </div>
                                <div class="font-label-lg text-label-lg font-bold text-primary mb-1">Esai &amp; LoA</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-snug">Merancang narasi kontribusi yang tajam, rencana studi realistis, &amp; perburuan LoA.</p>
                            </div>
                            <div class="relative bg-surface-container-low/70 rounded-lg p-space-md flex flex-col justify-between hover:bg-surface-container-high transition-colors group">
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="w-7 h-7 rounded-full bg-secondary text-on-secondary font-label-md text-label-md font-bold flex items-center justify-center">5</span>
                                    <span class="material-symbols-outlined text-secondary text-xl">how_to_reg</span>
                                </div>
                                <div class="font-label-lg text-label-lg font-bold text-secondary mb-1">Submit &amp; Wawancara</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-snug">Simulasi mock-interview, validasi data portal, dan pengiriman tepat sebelum tenggat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Filter Category Tabs -->
            <section class="w-full pt-space-md pb-space-sm bg-surface">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="flex flex-wrap items-center gap-space-xs" id="categoryTabContainer">
                        <button class="filter-tab px-space-md py-space-sm rounded-lg font-label-lg text-label-lg bg-primary text-on-primary shadow-sm transition-all" data-category="all">
                            Semua Panduan
                        </button>
                        <button class="filter-tab px-space-md py-space-sm rounded-lg font-label-lg text-label-lg bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all" data-category="esai">
                            Penulisan Esai &amp; LoA
                        </button>
                        <button class="filter-tab px-space-md py-space-sm rounded-lg font-label-lg text-label-lg bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all" data-category="bahasa">
                            Sertifikasi Bahasa
                        </button>
                        <button class="filter-tab px-space-md py-space-sm rounded-lg font-label-lg text-label-lg bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all" data-category="wawancara">
                            Strategi Wawancara
                        </button>
                        <button class="filter-tab px-space-md py-space-sm rounded-lg font-label-lg text-label-lg bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all" data-category="dokumen">
                            Persiapan Dokumen &amp; Administrasi
                        </button>
                    </div>
                </div>
            </section>

            <!-- Featured Guides Interactive Cards Stream -->
            <section class="w-full py-space-md bg-surface">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg" id="guidesGrid">
                        <!-- Guide 1 -->
                        <article class="guide-item group bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden" data-category="esai">
                            <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDjvzaU3pQEy_8TRglW0pvSvGT69KsKx7LfZ7Fz_dceoZGSg3H0qGeGitd-3itqWvnxDiYDWG5Pfke2ly7rQ6L4lABHs3hO1PbMqxWnzcAvPKwLBJV5wcyoNrjc7V_8sq4I2XBljsuNV-3cobmOxEjy_sEJgYQ2GhhBYguyZrnrf-yVTnW0nLv5fLIW9oI6vH120_c--2lXTiEYS_MbWCv-xScC3-H4XDFtlODwAsyx')"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent"></div>
                                <span class="absolute top-space-sm left-space-sm bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm px-space-sm py-1 rounded-full font-bold">
                                    Esai &amp; LoA
                                </span>
                                <span class="absolute bottom-space-sm left-space-sm text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 12 Menit Baca
                                </span>
                            </div>
                            <div class="p-space-lg flex flex-col flex-1 justify-between">
                                <div>
                                    <div class="flex items-center gap-space-xs mb-space-xs text-secondary font-label-sm text-label-sm font-bold">
                                        <span class="material-symbols-outlined text-sm">verified</span>
                                        Bedah Panduan LPDP 2025
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors leading-snug mb-space-xs">
                                        Formula Lolos Esai Kontribusi LPDP: Struktur Paragraf &amp; Bukti Konkrit
                                    </h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 mb-space-md">
                                        Urai strategi STAR (Situation, Task, Action, Result) yang terbukti memikat reviewer. Dilengkapi template Word, poin kontribusi realistis, dan kesalahan fatal yang harus dihindari.
                                    </p>
                                </div>
                                <div class="pt-space-sm flex items-center justify-between bg-surface-container-low/50 -mx-space-lg -mb-space-lg px-space-lg py-space-sm">
                                    <span class="font-label-sm text-label-sm text-secondary font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base">file_download</span> Termasuk Template .docx
                                    </span>
                                    <button class="text-primary font-label-lg text-label-lg font-bold flex items-center gap-0.5 hover:gap-1.5 transition-all" type="button">
                                        Baca Selengkapnya
                                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <!-- Guide 2 -->
                        <article class="guide-item group bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden" data-category="bahasa">
                            <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDlnVDd2B8g2brpeUQbPK_CM3LS7C1A4g6Yx7m-XVOlkehQ3GBEYjAwO2EpvVtj-O05xs_Vj_J-r2AJyo_GNQvzOOkmqHwgps-Lbu0KanF1GQThwqJmTrfPHe9fh9A9kGpeB6orrWHfJxB7cARr0gJn09ea7PklptbZWXiXp4syYLmZkeK7Fkmj52Vg7ettdPCu7V8aRCPdbyuY1aMHTRvJbFfzlDpjUZFN-Ma8BGrY')"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent"></div>
                                <span class="absolute top-space-sm left-space-sm bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm px-space-sm py-1 rounded-full font-bold">
                                    Sertifikasi Bahasa
                                </span>
                                <span class="absolute bottom-space-sm left-space-sm text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 15 Menit Baca
                                </span>
                            </div>
                            <div class="p-space-lg flex flex-col flex-1 justify-between">
                                <div>
                                    <div class="flex items-center gap-space-xs mb-space-xs text-secondary font-label-sm text-label-sm font-bold">
                                        <span class="material-symbols-outlined text-sm">verified</span>
                                        Chevening &amp; Oxford Criteria
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors leading-snug mb-space-xs">
                                        Bedah Soal &amp; Trik Skor IELTS 7.5+ dalam 60 Hari Belajar Mandiri
                                    </h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 mb-space-md">
                                        Jadwal belajar harian untuk Listening &amp; Reading, bank frasa kohesif untuk Writing Task 2, dan teknik menjawab lancar tanpa 'filler' pada sesi Speaking Part 3.
                                    </p>
                                </div>
                                <div class="pt-space-sm flex items-center justify-between bg-surface-container-low/50 -mx-space-lg -mb-space-lg px-space-lg py-space-sm">
                                    <span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base">calendar_month</span> Jadwal Belajar 60 Hari
                                    </span>
                                    <button class="text-primary font-label-lg text-label-lg font-bold flex items-center gap-0.5 hover:gap-1.5 transition-all" type="button">
                                        Baca Selengkapnya
                                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <!-- Guide 3 -->
                        <article class="guide-item group bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden" data-category="esai">
                            <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDyf1O_19hgS0cULuZXFmn683AvTatUsvKH-M3BJTTbOp8SyWCTCOltPbf-phSri3aOogE8OW1OBBQyjZh1PlTWByXuLmIzn7eLWjTpmZ1D0o7nvynf8QsyhL4GfMSm01jhVUUro8lK_Hvg5xKJ0PBo2wB8tRuJmDjM9vyciqzQ8w-qwWlRDDX7C9RFcJsTeeXLRmXRd_ozN_uo575rP-qxUTU21f31nHFDcEAWG-o8')"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent"></div>
                                <span class="absolute top-space-sm left-space-sm bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm px-space-sm py-1 rounded-full font-bold">
                                    Esai &amp; LoA
                                </span>
                                <span class="absolute bottom-space-sm left-space-sm text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 10 Menit Baca
                                </span>
                            </div>
                            <div class="p-space-lg flex flex-col flex-1 justify-between">
                                <div>
                                    <div class="flex items-center gap-space-xs mb-space-xs text-secondary font-label-sm text-label-sm font-bold">
                                        <span class="material-symbols-outlined text-sm">verified</span>
                                        MEXT &amp; Research Track
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors leading-snug mb-space-xs">
                                        Cara Menghubungi Profesor Luar Negeri untuk Mendapatkan Letter of Acceptance (LoA)
                                    </h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 mb-space-md">
                                        Etika cold email yang efektif direspons. Cara menyelaraskan proposal penelitian Anda dengan publikasi terbaru calon profesor supervisor tanpa terdengar menggurui.
                                    </p>
                                </div>
                                <div class="pt-space-sm flex items-center justify-between bg-surface-container-low/50 -mx-space-lg -mb-space-lg px-space-lg py-space-sm">
                                    <span class="font-label-sm text-label-sm text-secondary font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base">mail</span> 3 Template Email
                                    </span>
                                    <button class="text-primary font-label-lg text-label-lg font-bold flex items-center gap-0.5 hover:gap-1.5 transition-all" type="button">
                                        Baca Selengkapnya
                                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <!-- Guide 4 -->
                        <article class="guide-item group bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden" data-category="wawancara">
                            <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDsX4-ns3O0LLhFd05L1K_Eb-pxr3t3zrIVyuI4_Z6lkFKwV-AaLjoU01ZD_xukLH4QUjI1xNWOVpHOZ0ACs9eZW20z6ZxUpNMhB9Fd7ELS2su16pUgTP5tv_JOOATC2NfEDW090I7rf3VQKgRR5peLyhJBV3rp117bjju3p5S98Xa-b_migMh5rxxLOTyiOJtdWvPuOr64pYsscvB97agT_bjJtWCTbtIk4104XiSV')"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent"></div>
                                <span class="absolute top-space-sm left-space-sm bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm px-space-sm py-1 rounded-full font-bold">
                                    Strategi Wawancara
                                </span>
                                <span class="absolute bottom-space-sm left-space-sm text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 18 Menit Baca
                                </span>
                            </div>
                            <div class="p-space-lg flex flex-col flex-1 justify-between">
                                <div>
                                    <div class="flex items-center gap-space-xs mb-space-xs text-secondary font-label-sm text-label-sm font-bold">
                                        <span class="material-symbols-outlined text-sm">verified</span>
                                        AAS, Chevening &amp; LPDP
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors leading-snug mb-space-xs">
                                        Simulasi 20 Pertanyaan Wawancara Paling Sering Muncul &amp; Cara Menjawabnya
                                    </h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 mb-space-md">
                                        Trik menjawab pertanyaan jebakan seperti "Mengapa bukan universitas di dalam negeri?" dan "Apa kelemahan terbesarmu?" dengan pembawaan autentik dan matang.
                                    </p>
                                </div>
                                <div class="pt-space-sm flex items-center justify-between bg-surface-container-low/50 -mx-space-lg -mb-space-lg px-space-lg py-space-sm">
                                    <span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base">forum</span> Video Mock Interview
                                    </span>
                                    <button class="text-primary font-label-lg text-label-lg font-bold flex items-center gap-0.5 hover:gap-1.5 transition-all" type="button">
                                        Baca Selengkapnya
                                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <!-- Guide 5 -->
                        <article class="guide-item group bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden" data-category="dokumen">
                            <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAZ3886SYZYm2oXtVoRVuK3Tt8vPMHrnNIh7CJ299-Rl44ij-81UpiT5xWakTeUhbbGbC0KADjpZJSapwYPSx37BM1IDrIWAFxmerOA_jUfFO3Hg7EqdaoMLCaFHFEnEo2a27Vk34b8xZIF3tj2JK6_zdPuL1Cb7nfW7f05dKC-B0-fb95gG-3zBEy7FCtvCtTMobYIEYR_ivQ-K4ZelYnsXtakRPD8d--r_1CBX4u4')"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent"></div>
                                <span class="absolute top-space-sm left-space-sm bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm px-space-sm py-1 rounded-full font-bold">
                                    Dokumen &amp; Administrasi
                                </span>
                                <span class="absolute bottom-space-sm left-space-sm text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 8 Menit Baca
                                </span>
                            </div>
                            <div class="p-space-lg flex flex-col flex-1 justify-between">
                                <div>
                                    <div class="flex items-center gap-space-xs mb-space-xs text-secondary font-label-sm text-label-sm font-bold">
                                        <span class="material-symbols-outlined text-sm">verified</span>
                                        Penerjemah Tersumpah &amp; Apostille
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors leading-snug mb-space-xs">
                                        Checklist Legalisir Ijazah &amp; Transkrip untuk Beasiswa Luar Negeri
                                    </h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 mb-space-md">
                                        Alur lengkap Kemenkumham, Kemenlu, hingga layanan Apostille. Memahami perbedaan sworn translation dan legalisir biasa agar berkas tidak ditolak di seleksi awal.
                                    </p>
                                </div>
                                <div class="pt-space-sm flex items-center justify-between bg-surface-container-low/50 -mx-space-lg -mb-space-lg px-space-lg py-space-sm">
                                    <span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base">checklist</span> Checklist PDF Interaktif
                                    </span>
                                    <button class="text-primary font-label-lg text-label-lg font-bold flex items-center gap-0.5 hover:gap-1.5 transition-all" type="button">
                                        Baca Selengkapnya
                                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <!-- Guide 6 -->
                        <article class="guide-item group bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden" data-category="dokumen">
                            <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCS8s9v87NWjd3ROpFBVt4ewTYT9in-h0Zy_Bun3KQPTYG1n3n7EnvGL7Ip_m1NNerryKprRGd2SnEslF8EsB-3u_Z7jQYvbrwicyKtoRpK3NbVL3WGgrGN_eFdcUe5Q9bjyZ0a1o8kMPJj14hk8m2oTFGZL5saehisKRM-MppFBisj0flb61-CwCwIc8FHGG6MLbUuGiSJIs9gKl2_P6sE1cw6zzpApOGLK3ayvLeC')"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent"></div>
                                <span class="absolute top-space-sm left-space-sm bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm px-space-sm py-1 rounded-full font-bold">
                                    Dokumen &amp; Administrasi
                                </span>
                                <span class="absolute bottom-space-sm left-space-sm text-on-primary font-label-sm text-label-sm flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 7 Menit Baca
                                </span>
                            </div>
                            <div class="p-space-lg flex flex-col flex-1 justify-between">
                                <div>
                                    <div class="flex items-center gap-space-xs mb-space-xs text-secondary font-label-sm text-label-sm font-bold">
                                        <span class="material-symbols-outlined text-sm">verified</span>
                                        Relasi Akademik &amp; Profesional
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors leading-snug mb-space-xs">
                                        Etika Meminta Surat Rekomendasi kepada Dosen/Atasan Kerja
                                    </h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 mb-space-md">
                                        Menyediakan <em>brag sheet</em> ringkas, durasi waktu ideal sebelum deadline, hingga template surat rekomendasi dwibahasa siap sunting untuk mempermudah pemberi rekomendasi.
                                    </p>
                                </div>
                                <div class="pt-space-sm flex items-center justify-between bg-surface-container-low/50 -mx-space-lg -mb-space-lg px-space-lg py-space-sm">
                                    <span class="font-label-sm text-label-sm text-secondary font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base">drafts</span> Template Brag Sheet
                                    </span>
                                    <button class="text-primary font-label-lg text-label-lg font-bold flex items-center gap-0.5 hover:gap-1.5 transition-all" type="button">
                                        Baca Selengkapnya
                                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Interactive Document Eligibility Simulator Widget -->
            <section class="w-full py-space-lg bg-surface">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="bg-surface-container-low rounded-xl p-space-lg lg:p-space-xl">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
                            <div class="lg:col-span-5">
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Self-Assessment Tool</span>
                                <h2 class="font-headline-lg text-headline-lg text-primary font-bold mt-1 mb-space-xs">
                                    Simulasi Kesiapan Berkas
                                </h2>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                                    Cek kelayakan dokumen sebelum mengajukan pendaftaran beasiswa. Centang berkas yang telah Anda persiapkan untuk melihat indeks skor kesiapan.
                                </p>
                                <div class="bg-surface-container-lowest rounded-lg p-space-md shadow-sm">
                                    <div class="flex items-center justify-between mb-space-xs">
                                        <span class="font-label-md text-label-md font-bold text-on-surface">Skor Kesiapan Anda</span>
                                        <span class="font-headline-sm text-headline-sm font-extrabold text-primary" id="scoreText">60%</span>
                                    </div>
                                    <div class="w-full h-2.5 bg-surface-container-high rounded-full overflow-hidden">
                                        <div class="h-full bg-secondary transition-all duration-500 rounded-full" id="progressBar" style="width: 60%;"></div>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-secondary font-medium mt-space-xs" id="scoreFeedback">
                                        Cukup siap! Lengkapi LoA dan draf esai untuk mencapai 100%.
                                    </p>
                                </div>
                            </div>
                            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-space-sm" id="checklistForm">
                                <label class="flex items-center gap-space-sm bg-surface-container-lowest p-space-md rounded-lg shadow-sm cursor-pointer hover:bg-surface-container-high/40 transition-colors">
                                    <input checked="" class="w-5 h-5 rounded text-primary focus:ring-primary check-item" data-val="20" type="checkbox"/>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg font-bold text-on-surface">Ijazah &amp; Transkrip Legalisir</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Terjemahan tersumpah &amp; IPK ≥ 3.25</span>
                                    </div>
                                </label>
                                <label class="flex items-center gap-space-sm bg-surface-container-lowest p-space-md rounded-lg shadow-sm cursor-pointer hover:bg-surface-container-high/40 transition-colors">
                                    <input checked="" class="w-5 h-5 rounded text-primary focus:ring-primary check-item" data-val="20" type="checkbox"/>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg font-bold text-on-surface">Sertifikat Resmi Bahasa</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">IELTS ≥ 6.5 atau TOEFL ≥ 90</span>
                                    </div>
                                </label>
                                <label class="flex items-center gap-space-sm bg-surface-container-lowest p-space-md rounded-lg shadow-sm cursor-pointer hover:bg-surface-container-high/40 transition-colors">
                                    <input checked="" class="w-5 h-5 rounded text-primary focus:ring-primary check-item" data-val="20" type="checkbox"/>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg font-bold text-on-surface">Surat Rekomendasi (2x)</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Dari dosen pembimbing atau atasan</span>
                                    </div>
                                </label>
                                <label class="flex items-center gap-space-sm bg-surface-container-lowest p-space-md rounded-lg shadow-sm cursor-pointer hover:bg-surface-container-high/40 transition-colors">
                                    <input class="w-5 h-5 rounded text-primary focus:ring-primary check-item" data-val="20" type="checkbox"/>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg font-bold text-on-surface">Motivation Letter / Esai</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Sesuai format STAR &amp; rencana kontribusi</span>
                                    </div>
                                </label>
                                <label class="flex items-center gap-space-sm bg-surface-container-lowest p-space-md rounded-lg shadow-sm cursor-pointer hover:bg-surface-container-high/40 transition-colors sm:col-span-2">
                                    <input class="w-5 h-5 rounded text-primary focus:ring-primary check-item" data-val="20" type="checkbox"/>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg font-bold text-on-surface">Letter of Acceptance (LoA) / Rencana Studi Khusus</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Surat penerimaan kampus sasaran (Conditional / Unconditional)</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FLOWCHART SYSTEM TRIGGER BANNER -->
            <section class="w-full py-space-xl bg-surface">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="relative overflow-hidden rounded-xl bg-primary text-on-primary shadow-xl">
                        <div class="absolute -right-16 -top-16 w-80 h-80 rounded-full bg-secondary-container/20 blur-3xl pointer-events-none"></div>
                        <div class="absolute -left-12 -bottom-12 w-64 h-64 rounded-full bg-on-primary-container/20 blur-2xl pointer-events-none"></div>
                        <div class="relative z-10 px-space-lg py-space-xl lg:px-space-xl flex flex-col lg:flex-row items-center justify-between gap-space-lg">
                            <div class="max-w-2xl text-left">
                                <div class="inline-flex items-center gap-space-xs bg-secondary/35 backdrop-blur-sm px-space-sm py-1 rounded-full text-secondary-fixed mb-space-sm">
                                    <span class="material-symbols-outlined text-sm animate-pulse">rocket_launch</span>
                                    <span class="font-label-sm text-label-sm tracking-wide uppercase font-bold">Sudah Paham Panduannya? Sistem Siap Berburu Beasiswa!</span>
                                </div>
                                <h2 class="font-headline-xl text-headline-xl text-on-primary font-extrabold tracking-tight mb-space-sm leading-tight">
                                    Siap Berburu Beasiswa Impianmu Sekarang?
                                </h2>
                                <p class="font-body-lg text-body-lg text-primary-fixed leading-relaxed">
                                    Terapkan tips dan strategi yang telah Anda pelajari langsung ke puluhan beasiswa berpendanaan penuh (fully-funded) yang sedang membuka pendaftaran bulan ini.
                                </p>
                                <div class="flex flex-wrap items-center gap-space-md mt-space-md text-primary-fixed-dim font-label-md text-label-md">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base text-secondary-fixed">check_circle</span> 120+ Program Aktif
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base text-secondary-fixed">check_circle</span> Filter Jenjang S1, S2, S3
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base text-secondary-fixed">check_circle</span> Notifikasi Deadline Harian
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row lg:flex-col gap-space-sm w-full lg:w-auto shrink-0">
                                <a class="inline-flex items-center justify-center gap-space-sm px-space-xl py-space-md bg-secondary text-on-secondary rounded-lg font-label-lg text-label-lg font-bold shadow-lg hover:bg-secondary-container hover:text-on-secondary-container transition-all transform hover:-translate-y-0.5 text-center" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">
                                    <span>Siap Berburu Beasiswa</span>
                                    <span class="material-symbols-outlined text-xl">travel_explore</span>
                                </a>
                                <a class="inline-flex items-center justify-center gap-space-sm px-space-lg py-space-md bg-surface-container-lowest/10 hover:bg-surface-container-lowest/20 text-on-primary rounded-lg font-label-lg text-label-lg font-medium transition-colors text-center" data-path="bookmark" href="{{ route('bookmark') }}">
                                    <span class="material-symbols-outlined text-lg">bookmark</span>
                                    <span>Cek Simpanan Saya ()</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Comprehensive FAQ Section -->
            <section class="w-full py-space-xl bg-surface">
                <div class="max-w-4xl mx-auto px-margin">
                    <div class="text-center mb-space-lg">
                        <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">Pusat Tanya Jawab</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold mt-1">
                            Pertanyaan Umum Seputar Persiapan Beasiswa
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                            Jawaban langsung mengenai kendala yang kerap dihadapi pendaftar Indonesia.
                        </p>
                    </div>
                    <div class="flex flex-col gap-space-sm">
                        <details class="group bg-surface-container-lowest rounded-xl p-space-md shadow-sm transition-all open:bg-surface-container-low/50">
                            <summary class="flex items-center justify-between cursor-pointer font-headline-sm text-headline-sm font-bold text-on-surface select-none list-none">
                                <span>Berapa lama waktu ideal yang dibutuhkan untuk mempersiapkan beasiswa fully funded?</span>
                                <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <div class="mt-space-sm font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                Waktu ideal adalah 6 hingga 12 bulan sebelum batas akhir pendaftaran dibuka. Waktu ini dialokasikan untuk tes bahasa (2-3 bulan), perolehan Letter of Acceptance/LoA (2-4 bulan), penulisan dan peer-review esai kontribusi (1-2 bulan), serta legalisasi berkas di lembaga berwenang.
                            </div>
                        </details>
                        <details class="group bg-surface-container-lowest rounded-xl p-space-md shadow-sm transition-all open:bg-surface-container-low/50">
                            <summary class="flex items-center justify-between cursor-pointer font-headline-sm text-headline-sm font-bold text-on-surface select-none list-none">
                                <span>Apakah saya bisa mendaftar beasiswa tanpa memiliki LoA terlebih dahulu?</span>
                                <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <div class="mt-space-sm font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                Bisa. Sebagian besar beasiswa bergengsi seperti LPDP (jalur Non-LoA), Chevening, Australia Awards (AAS), dan GKS menyediakan skema seleksi bagi pendaftar yang belum memiliki surat penerimaan universitas. Namun, memiliki LoA Unconditional seringkali memberikan nilai tambah dan memperpendek proses seleksi final.
                            </div>
                        </details>
                        <details class="group bg-surface-container-lowest rounded-xl p-space-md shadow-sm transition-all open:bg-surface-container-low/50">
                            <summary class="flex items-center justify-between cursor-pointer font-headline-sm text-headline-sm font-bold text-on-surface select-none list-none">
                                <span>Bagaimana jika IPK sarjana saya di bawah 3.00? Apakah masih ada peluang?</span>
                                <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <div class="mt-space-sm font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                Peluang tetap terbuka pada beasiswa yang menekankan pengalaman kerja dan dampak kepemimpinan (seperti Chevening atau AAS), atau beasiswa yang membuka kuota afirmasi daerah 3T / prasejahtera. Anda dapat mengimbangi IPK dengan skor IELTS yang tinggi, portofolio riset yang kuat, publikasi ilmiah, atau pengalaman kerja relevan di atas 3 tahun.
                            </div>
                        </details>
                        <details class="group bg-surface-container-lowest rounded-xl p-space-md shadow-sm transition-all open:bg-surface-container-low/50">
                            <summary class="flex items-center justify-between cursor-pointer font-headline-sm text-headline-sm font-bold text-on-surface select-none list-none">
                                <span>Apakah sertifikat TOEFL ITP masih diakui untuk mendaftar universitas luar negeri?</span>
                                <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <div class="mt-space-sm font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                Untuk perguruan tinggi luar negeri, umumnya hanya menerima tes berstandar internasional seperti TOEFL iBT, IELTS Academic, atau PTE Academic. TOEFL ITP biasanya hanya dapat digunakan untuk tahap seleksi awal beasiswa tertentu (seperti LPDP Dalam Negeri) atau program pertukaran jangka pendek regional Asia.
                            </div>
                        </details>
                    </div>
                    <div class="mt-space-xl bg-surface-container-lowest rounded-xl p-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md shadow-sm">
                        <div class="flex items-center gap-space-md">
                            <div class="w-12 h-12 rounded-full bg-secondary-fixed/50 text-secondary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-2xl">support_agent</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm font-bold text-on-surface">Masih Memiliki Pertanyaan Lain?</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Hubungi tim kurator beasiswa kami atau tanyakan via forum awardee CariBeasiswa.</p>
                            </div>
                        </div>
                        <a class="px-space-md py-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-primary font-label-lg text-label-lg font-bold transition-colors whitespace-nowrap" data-path="kontak-tentang" href="{{ route('contact') }}">
                            Hubungi Mentor
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- JavaScript Interactions -->
    <script>
      (function() {
        // 1. Category Filtering
        const tabs = document.querySelectorAll('.filter-tab');
        const items = document.querySelectorAll('.guide-item');

        tabs.forEach(tab => {
          tab.addEventListener('click', () => {
            const cat = tab.getAttribute('data-category');

            tabs.forEach(t => {
              t.classList.remove('bg-primary', 'text-on-primary', 'shadow-sm');
              t.classList.add('bg-surface-container-low', 'text-on-surface-variant');
            });
            tab.classList.remove('bg-surface-container-low', 'text-on-surface-variant');
            tab.classList.add('bg-primary', 'text-on-primary', 'shadow-sm');

            items.forEach(item => {
              const itemCat = item.getAttribute('data-category');
              if (cat === 'all' || itemCat === cat) {
                item.style.display = 'flex';
              } else {
                item.style.display = 'none';
              }
            });
          });
        });

        // 2. Interactive Document Readiness Calculator
        const checkItems = document.querySelectorAll('.check-item');
        const scoreText = document.getElementById('scoreText');
        const progressBar = document.getElementById('progressBar');
        const scoreFeedback = document.getElementById('scoreFeedback');

        function updateScore() {
          let currentScore = 0;
          checkItems.forEach(box => {
            if (box.checked) {
              currentScore += parseInt(box.getAttribute('data-val'), 10);
            }
          });

          if (scoreText) scoreText.textContent = currentScore + '%';
          if (progressBar) progressBar.style.width = currentScore + '%';

          if (scoreFeedback) {
            if (currentScore === 100) {
              scoreFeedback.textContent = 'Luar biasa! Portofolio Anda 100% lengkap dan siap berburu beasiswa sekarang.';
              scoreFeedback.className = 'font-body-sm text-body-sm text-secondary font-bold mt-space-xs';
            } else if (currentScore >= 60) {
              scoreFeedback.textContent = 'Cukup siap! Lengkapi berkas esai atau LoA untuk memaksimalkan peluang seleksi.';
              scoreFeedback.className = 'font-body-sm text-body-sm text-secondary font-medium mt-space-xs';
            } else {
              scoreFeedback.textContent = 'Persiapan awal. Mulai pelajari panduan di atas secara berurutan.';
              scoreFeedback.className = 'font-body-sm text-body-sm text-error font-medium mt-space-xs';
            }
          }
        }

        checkItems.forEach(box => {
          box.addEventListener('change', updateScore);
        });
      })();
    </script>

    <!-- Footer Navigasi -->
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
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="tips-panduan" href="{{ route('guides') }}">Panduan Motivation Letter</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="tips-panduan" href="{{ route('guides') }}">Simulasi Tes IELTS / TOEFL</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="tips-panduan" href="{{ route('guides') }}">Wawancara Beasiswa</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="tips-panduan" href="{{ route('guides') }}">Kalender Pendaftaran</a>
                </div>
                <div class="flex flex-col gap-space-xs">
                    <div class="font-label-lg text-label-lg text-on-surface font-bold mb-space-xs">Bantuan &amp; Kontak</div>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="kontak-tentang" href="{{ route('contact') }}">Kontak</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="kontak-tentang" href="{{ route('contact') }}">Laporkan Kendala</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="kontak-tentang" href="{{ route('contact') }}">Chat Admin Bantuan</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" data-path="kontak-tentang" href="{{ route('contact') }}">Kemitraan Institusi</a>
                </div>
            </div>
            <div class="pt-space-md flex flex-col md:flex-row items-center justify-between gap-space-sm font-body-sm text-body-sm text-on-surface-variant border-t border-surface-container-high">
                <p>© 2025 CariBeasiswa Indonesia. Hak cipta dilindungi undang-undang.</p>
                <div class="flex items-center gap-space-md">
                    <a class="hover:text-primary transition-colors" data-path="kontak-tentang" href="{{ route('contact') }}">Kebijakan Privasi</a>
                    <a class="hover:text-primary transition-colors" data-path="kontak-tentang" href="{{ route('contact') }}">Syarat &amp; Ketentuan</a>
                    <a class="hover:text-primary transition-colors" data-path="kontak-tentang" href="{{ route('contact') }}">Bantuan Layanan</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>