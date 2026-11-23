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
                    <span class="absolute top-1 right-1 w-4 h-4 rounded-full bg-secondary text-on-secondary font-label-sm text-[10px] flex items-center justify-center font-bold" id="bookmark-header-count">0</span>
                </a>
                <button class="relative p-space-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low rounded-lg transition-colors" title="Notifikasi" type="button">
                    
                <div class="flex items-center pl-space-xs">
                    <a class="flex items-center gap-space-xs p-1 rounded-full hover:bg-surface-container-low transition-colors" data-path="profil-pengguna" href="{{ route('login') }}">
                        
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="w-full pt-20 bg-surface min-h-screen">
        <div class="flex flex-col w-full"> 
            <div class="w-full bg-gradient-to-b from-surface-container-low to-surface py-space-xl">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-lg">
                        <div>
                            <div class="flex items-center gap-space-xs text-secondary font-label-md text-label-md mb-space-xs uppercase tracking-wider">
                                <span class="material-symbols-outlined text-base">bookmark_check</span>
                                <span>Bookmark Pribadi</span>
                            </div>
                            <h1 class="font-headline-xl text-headline-xl text-primary font-bold tracking-tight">Beasiswa Tersimpan Saya</h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mt-space-xs max-w-2xl">
                                Kelola program yang Anda simpan dari Beranda maupun Cari Beasiswa. Data bookmark tersimpan di browser ini.
                            </p>
                        </div>
                        <a class="inline-flex items-center justify-center gap-space-xs bg-primary text-on-primary hover:bg-primary-container font-label-lg text-label-lg px-space-md py-space-sm rounded-lg shadow-sm transition-all group shrink-0" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">
                            <span class="material-symbols-outlined text-lg transition-transform group-hover:-translate-x-0.5">explore</span>
                            <span>Jelajahi Beasiswa Lainnya</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md">
                        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md relative overflow-hidden">
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">bookmarks</span>
                            </div>
                            <div>
                                <div class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wide">Total Tersimpan</div>
                                <div class="font-headline-lg text-headline-lg text-primary font-bold leading-none mt-1" id="stat-total">0</div>
                                <div class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Tersimpan di browser ini</div>
                            </div>
                            <div class="absolute -right-3 -bottom-3 text-surface-container-high/40 pointer-events-none">
                                <span class="material-symbols-outlined text-7xl">bookmark</span>
                            </div>
                        </div>
                        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md relative overflow-hidden">
                            <div class="w-12 h-12 rounded-lg bg-error-container flex items-center justify-center text-error shrink-0">
                                <span class="material-symbols-outlined text-2xl">timer</span>
                            </div>
                            <div>
                                <div class="font-label-sm text-label-sm text-error uppercase tracking-wide font-bold">Jadwal Tercantum</div>
                                <div class="font-headline-lg text-headline-lg text-error font-bold leading-none mt-1" id="stat-deadline">0</div>
                                <div class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Cek jadwal terbaru di portal resmi</div>
                            </div>
                            <div class="absolute -right-3 -bottom-3 text-error-container/40 pointer-events-none">
                                <span class="material-symbols-outlined text-7xl">hourglass_top</span>
                            </div>
                        </div>
                        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md relative overflow-hidden">
                            <div class="w-12 h-12 rounded-lg bg-secondary-fixed/50 flex items-center justify-center text-secondary shrink-0">
                                <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">verified</span>
                            </div>
                            <div>
                                <div class="font-label-sm text-label-sm text-secondary uppercase tracking-wide font-bold">Dari Katalog</div>
                                <div class="font-headline-lg text-headline-lg text-on-surface font-bold leading-none mt-1" id="stat-campus">0</div>
                                <div class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Disimpan dari katalog beasiswa</div>
                            </div>
                            <div class="absolute -right-3 -bottom-3 text-secondary-fixed/20 pointer-events-none">
                                <span class="material-symbols-outlined text-7xl">payments</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="max-w-7xl mx-auto px-margin py-space-lg w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                    <div class="lg:col-span-8 flex flex-col gap-space-md">
                        <div class="bg-surface-container-lowest p-1.5 rounded-xl shadow-sm flex flex-wrap items-center justify-between gap-space-sm">
                            <div class="flex items-center gap-1 overflow-x-auto">
                                <button class="tab-btn px-space-md py-space-xs rounded-lg font-label-lg text-label-lg bg-primary text-on-primary shadow-xs transition-colors flex items-center gap-space-xs" onclick="filterTab('all', this)" type="button">
                                    <span>Semua</span>
                                    <span class="bg-primary-container text-on-primary text-label-sm font-bold px-1.5 py-0.5 rounded-full" id="tab-count-all">0</span>
                                </button>
                                <button class="tab-btn px-space-md py-space-xs rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors flex items-center gap-space-xs" onclick="filterTab('kampus', this)" type="button">
                                    <span>Dari Katalog</span>
                                    <span class="bg-surface-container text-on-surface-variant text-label-sm font-bold px-1.5 py-0.5 rounded-full" id="tab-count-kampus">0</span>
                                </button>
                                <button class="tab-btn px-space-md py-space-xs rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors flex items-center gap-space-xs" onclick="filterTab('beranda', this)" type="button">
                                    <span>Pilihan Beranda</span>
                                    <span class="bg-error-container text-error text-label-sm font-bold px-1.5 py-0.5 rounded-full" id="tab-count-beranda">0</span>
                                </button>
                            </div>
                            <div class="flex items-center gap-space-xs pr-space-xs text-on-surface-variant font-body-sm text-body-sm">
                                <span class="material-symbols-outlined text-base">sort</span>
                                <span class="hidden sm:inline">Urutkan:</span>
                                <select class="bg-transparent font-label-sm text-label-sm text-on-surface font-semibold focus:outline-none cursor-pointer">
                                    <option>Deadline Terdekat</option>
                                    <option>Baru Disimpan</option>
                                    <option>Nama Beasiswa</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-col gap-space-md" id="bookmark-list"></div>

                        <!-- Card 3: Djarum Beasiswa Plus -->
                        <div class="bookmark-item hidden bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all relative flex flex-col gap-space-md" data-bookmark-placeholder data-category="urgent" id="bookmark-card-3">
                            <div class="flex items-start justify-between gap-space-md">
                                <div class="flex items-start gap-space-md min-w-0">
                                    <div class="w-14 h-14 rounded-xl bg-surface-container-high flex items-center justify-center text-primary font-bold text-headline-sm shrink-0 overflow-hidden shadow-xs">
                                        <span class="material-symbols-outlined text-3xl text-secondary">school</span>
                                    </div>
                                    <div class="min-w-0">
                                        <div class="flex flex-wrap items-center gap-space-xs mb-1">
                                            <span class="bg-error-container text-error font-label-sm text-label-sm px-2 py-0.5 rounded-full flex items-center gap-1 font-bold animate-pulse">
                                                <span class="material-symbols-outlined text-xs">alarm</span>
                                                Deadline Segera (6 Hari Lagi)
                                            </span>
                                            <span class="bg-surface-container text-primary font-label-sm text-label-sm px-2 py-0.5 rounded-full">S1 (Semester 4)</span>
                                            <span class="bg-secondary-fixed/50 text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full">Partial + Pelatihan Soft Skills</span>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold truncate">Djarum Beasiswa Plus 2025</h3>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Djarum Foundation • Dalam Negeri (Nasional)</p>
                                    </div>
                                </div>
                                <button class="p-space-xs rounded-lg text-outline hover:text-error hover:bg-error-container/40 transition-colors shrink-0" onclick="removeBookmark('bookmark-card-3')" title="Hapus dari Bookmark" type="button">
                                    <span class="material-symbols-outlined text-xl">delete</span>
                                </button>
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm p-space-sm bg-surface-container-low rounded-lg">
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Batas Akhir</span>
                                    <span class="font-label-md text-label-md text-error font-bold">28 Mei 2025</span>
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Minimal IPK</span>
                                    <span class="font-label-md text-label-md text-on-surface font-semibold">3.00 (Skala 4.00)</span>
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Status Portofolio</span>
                                    <span class="font-label-md text-label-md text-on-surface font-semibold">Wajib CV Prestasi</span>
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Kuota Tersedia</span>
                                    <span class="font-label-md text-label-md text-secondary font-bold">500+ Mahasiswa</span>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-sm pt-space-xs">
                                <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                                    <span class="material-symbols-outlined text-base text-error">notification_important</span>
                                    <span>Lengkapi tes daring &amp; berkas sebelum sistem ditutup</span>
                                </div>
                                <div class="flex items-center gap-space-xs">
                                    <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg px-space-md py-space-sm rounded-lg transition-all shadow-xs group" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">
                                        <span>Lihat Detail Beasiswa</span>
                                        <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 1: LPDP Beasiswa Reguler -->
                        <div class="bookmark-item hidden bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all relative flex flex-col gap-space-md" data-bookmark-placeholder data-category="active" id="bookmark-card-1">
                            <div class="flex items-start justify-between gap-space-md">
                                <div class="flex items-start gap-space-md min-w-0">
                                    <div class="w-14 h-14 rounded-xl bg-surface-container-high flex items-center justify-center text-primary font-bold text-headline-sm shrink-0 overflow-hidden shadow-xs">
                                        <span class="material-symbols-outlined text-3xl text-primary">account_balance</span>
                                    </div>
                                    <div class="min-w-0">
                                        <div class="flex flex-wrap items-center gap-space-xs mb-1">
                                            <span class="bg-secondary-fixed/50 text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full font-bold">Fully Funded</span>
                                            <span class="bg-surface-container text-primary font-label-sm text-label-sm px-2 py-0.5 rounded-full">S2 / S3</span>
                                            <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded-full">Dalam &amp; Luar Negeri</span>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold truncate">LPDP Beasiswa Reguler 2025</h3>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Kementerian Keuangan RI • Terverifikasi Resmi</p>
                                    </div>
                                </div>
                                <button class="p-space-xs rounded-lg text-outline hover:text-error hover:bg-error-container/40 transition-colors shrink-0" onclick="removeBookmark('bookmark-card-1')" title="Hapus dari Bookmark" type="button">
                                    <span class="material-symbols-outlined text-xl">delete</span>
                                </button>
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm p-space-sm bg-surface-container-low rounded-lg">
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Batas Akhir</span>
                                    <span class="font-label-md text-label-md text-primary font-bold">15 Juli 2025</span>
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Sisa Waktu</span>
                                    <span class="font-label-md text-label-md text-secondary font-bold">45 Hari Lagi</span>
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Persyaratan Bahasa</span>
                                    <span class="font-label-md text-label-md text-on-surface font-semibold">IELTS 6.5 / TOEFL 500</span>
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Dokumen Wajib</span>
                                    <span class="font-label-md text-label-md text-on-surface font-semibold">Esai &amp; LoA (Opsional)</span>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-sm pt-space-xs">
                                <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                                    <span class="material-symbols-outlined text-base text-secondary">check_circle</span>
                                    <span>Pendaftaran tahap daring sedang berlangsung</span>
                                </div>
                                <div class="flex items-center gap-space-xs">
                                    <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg px-space-md py-space-sm rounded-lg transition-all shadow-xs group" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">
                                        <span>Lihat Detail Beasiswa</span>
                                        <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Chevening Scholarship UK -->
                        <div class="bookmark-item hidden bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all relative flex flex-col gap-space-md" data-bookmark-placeholder data-category="active" id="bookmark-card-2">
                            <div class="flex items-start justify-between gap-space-md">
                                <div class="flex items-start gap-space-md min-w-0">
                                    <div class="w-14 h-14 rounded-xl bg-surface-container-high flex items-center justify-center text-primary font-bold text-headline-sm shrink-0 overflow-hidden shadow-xs">
                                        <span class="material-symbols-outlined text-3xl text-primary">public</span>
                                    </div>
                                    <div class="min-w-0">
                                        <div class="flex flex-wrap items-center gap-space-xs mb-1">
                                            <span class="bg-secondary-fixed/50 text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full font-bold">Fully Funded</span>
                                            <span class="bg-surface-container text-primary font-label-sm text-label-sm px-2 py-0.5 rounded-full">S2 Master Degree</span>
                                            <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded-full">United Kingdom (UK)</span>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold truncate">Chevening Scholarship UK 2025/2026</h3>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Foreign, Commonwealth &amp; Development Office (FCDO)</p>
                                    </div>
                                </div>
                                <button class="p-space-xs rounded-lg text-outline hover:text-error hover:bg-error-container/40 transition-colors shrink-0" onclick="removeBookmark('bookmark-card-2')" title="Hapus dari Bookmark" type="button">
                                    <span class="material-symbols-outlined text-xl">delete</span>
                                </button>
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm p-space-sm bg-surface-container-low rounded-lg">
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Batas Akhir</span>
                                    <span class="font-label-md text-label-md text-primary font-bold">5 November 2025</span>
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Sisa Waktu</span>
                                    <span class="font-label-md text-label-md text-on-surface font-semibold">158 Hari Lagi</span>
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Pengalaman Kerja</span>
                                    <span class="font-label-md text-label-md text-on-surface font-semibold">Min. 2 Tahun (2.800 Jam)</span>
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant block">Cakupan</span>
                                    <span class="font-label-md text-label-md text-secondary font-bold">Tuition + Living + Tiket</span>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-sm pt-space-xs">
                                <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                                    <span class="material-symbols-outlined text-base text-secondary">info</span>
                                    <span>Persiapkan 4 esai wajib sebelum portal dibuka</span>
                                </div>
                                <div class="flex items-center gap-space-xs">
                                    <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg px-space-md py-space-sm rounded-lg transition-all shadow-xs group" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">
                                        <span>Lihat Detail Beasiswa</span>
                                        <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Empty State (Hidden by default) -->
                        <div class="hidden bg-surface-container-lowest p-space-xl rounded-xl shadow-sm text-center flex-col items-center justify-center gap-space-sm" id="empty-state">
                            <div class="w-16 h-16 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant mb-space-xs">
                                <span class="material-symbols-outlined text-3xl">bookmark_remove</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm text-primary font-bold">Tidak ada beasiswa di kategori ini</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-md">Anda belum memiliki beasiswa tersimpan untuk kriteria filter ini atau telah menghapus bookmark.</p>
                            <a class="mt-space-xs inline-flex items-center gap-space-xs bg-primary text-on-primary font-label-lg text-label-lg px-space-md py-space-sm rounded-lg" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">
                                <span class="material-symbols-outlined text-base">search</span>
                                <span>Cari Beasiswa Baru</span>
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Kanan -->
                    <div class="lg:col-span-4 flex flex-col gap-space-md sticky top-24">
                        <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm">
                            <div class="flex items-center gap-space-xs mb-space-sm text-primary font-bold font-headline-sm text-headline-sm">
                                <span class="material-symbols-outlined text-secondary">checklist</span>
                                <h3>Panduan Kesiapan Berkas</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pantau progres dokumen krusial untuk program beasiswa yang Anda simpan.
                            </p>
                            <div class="space-y-space-sm">
                                <div class="p-space-sm bg-surface-container-low rounded-lg">
                                    <div class="flex items-center justify-between font-label-md text-label-md mb-1.5">
                                        <span class="text-primary font-bold">Motivation Letter / Esai</span>
                                        <span class="text-secondary font-bold">65% Siap</span>
                                    </div>
                                    <div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
                                        <div class="bg-secondary h-full rounded-full transition-all duration-500" style="width: 65%;"></div>
                                    </div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant mt-1.5 block">Sesuaikan esai dengan persyaratan program yang Anda pilih</span>
                                </div>
                                <div class="p-space-sm bg-surface-container-low rounded-lg">
                                    <div class="flex items-center justify-between font-label-md text-label-md mb-1.5">
                                        <span class="text-primary font-bold">Sertifikat Bahasa (IELTS / TOEFL)</span>
                                        <span class="text-primary font-bold">100% Siap</span>
                                    </div>
                                    <div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full rounded-full" style="width: 100%;"></div>
                                    </div>
                                    <span class="font-body-sm text-body-sm text-secondary mt-1.5 block font-semibold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">check</span> Skor IELTS 7.0 Terverifikasi
                                    </span>
                                </div>
                                <div class="p-space-sm bg-surface-container-low rounded-lg">
                                    <div class="flex items-center justify-between font-label-md text-label-md mb-1.5">
                                        <span class="text-primary font-bold">Surat Rekomendasi Akademik</span>
                                        <span class="text-error font-bold">Perlu Tindakan</span>
                                    </div>
                                    <div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
                                        <div class="bg-error h-full rounded-full" style="width: 30%;"></div>
                                    </div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant mt-1.5 block">1 dari 2 rekomendasi dosen telah didapat</span>
                                </div>
                            </div>
                            <a class="mt-space-md w-full inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-primary font-label-lg text-label-lg py-space-sm rounded-lg transition-colors" data-path="tips-&amp;-panduan" href="{{ route('guides') }}">
                                <span class="material-symbols-outlined text-base">menu_book</span>
                                <span>Baca Tips &amp; Trik Berkas</span>
                            </a>
                        </div>

                        <!-- Smart Reminder -->
                        <div class="bg-primary text-on-primary p-space-md sm:p-space-lg rounded-xl shadow-sm relative overflow-hidden">
                            <div class="relative z-10">
                                <span class="font-label-sm text-label-sm bg-primary-container text-on-primary-container px-2 py-0.5 rounded font-bold uppercase tracking-wider">
                                    Smart Reminder
                                </span>
                                <h4 class="font-headline-sm text-headline-sm font-bold mt-space-xs text-on-primary">
                                    Periksa Kembali Jadwal Beasiswa
                                </h4>
                                <p class="font-body-sm text-body-sm text-primary-fixed mt-1">
                                    Jadwal dan persyaratan dapat berubah. Pastikan Anda memeriksa informasi terbaru di portal resmi masing-masing program.
                                </p>
                                <div class="mt-space-md flex items-center gap-space-xs">
                                    <a class="bg-surface-container-lowest text-primary hover:bg-surface-bright font-label-md text-label-md font-bold px-space-md py-space-xs rounded-lg transition-colors inline-flex items-center gap-1" data-path="cari-beasiswa" href="{{ route('cari.beasiswa') }}">
                                        <span>Periksa Syarat Sekarang</span>
                                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute -right-6 -bottom-6 text-primary-container/40 pointer-events-none">
                                <span class="material-symbols-outlined text-9xl">alarm_on</span>
                            </div>
                        </div>

                        <!-- Penyimpanan Bookmark -->
                        <div class="bg-surface-container-low p-space-md rounded-xl flex items-center justify-between gap-space-sm">
                            <div class="flex items-center gap-space-xs">
                                <span class="material-symbols-outlined text-secondary text-2xl">sync</span>
                                <div>
                                    <div class="font-label-md text-label-md text-on-surface font-bold">Penyimpanan Lokal Aktif</div>
                                    <div class="font-body-sm text-body-sm text-on-surface-variant">Data tersimpan di browser pada perangkat ini</div>
                                </div>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary bg-secondary-fixed/50 px-2 py-0.5 rounded font-semibold">Lokal</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Toast Notification -->
            <div class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none" id="toast-notification">
                <div class="bg-inverse-surface text-inverse-on-surface px-space-md py-space-sm rounded-lg shadow-xl flex items-center gap-space-sm">
                    <span class="material-symbols-outlined text-secondary-fixed-dim text-lg">check_circle</span>
                    <span class="font-body-md text-body-md" id="toast-text">Beasiswa berhasil dihapus dari bookmark.</span>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript Interaksi -->
    <script>
        const bookmarkStorageKey = 'caribeasiswa:bookmarks:v1';
        const bookmarkDetailsStorageKey = 'caribeasiswa:bookmark-details:v1';
        const scholarshipDetailRoute = @json(route('scholarships.show', ['id' => '__SCHOLARSHIP_ID__']));
        const bookmarkList = document.getElementById('bookmark-list');
        const emptyState = document.getElementById('empty-state');
        let activeBookmarkCategory = 'all';

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

        function createTextElement(tagName, className, text) {
            const element = document.createElement(tagName);
            element.className = className;
            element.textContent = text || '-';
            return element;
        }

        function showToast(message) {
            const toast = document.getElementById('toast-notification');
            const toastText = document.getElementById('toast-text');
            if (!toast || !toastText) {
                return;
            }

            toastText.textContent = message;
            toast.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
            toast.classList.add('translate-y-0', 'opacity-100');
            setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
            }, 3000);
        }

        function readBookmarkIds() {
            const storedIds = localStorage.getItem(bookmarkStorageKey);
            const bookmarkIds = storedIds === null ? [] : JSON.parse(storedIds);
            if (!Array.isArray(bookmarkIds)) {
                throw new TypeError('Data bookmark harus berupa daftar ID.');
            }

            return Array.from(new Set(bookmarkIds.filter((bookmarkId) => typeof bookmarkId === 'string')));
        }

        function readBookmarkDetails() {
            const storedDetails = localStorage.getItem(bookmarkDetailsStorageKey);
            const bookmarkDetails = storedDetails === null ? {} : JSON.parse(storedDetails);
            if (bookmarkDetails === null || Array.isArray(bookmarkDetails) || typeof bookmarkDetails !== 'object') {
                throw new TypeError('Detail bookmark harus berupa objek.');
            }

            return bookmarkDetails;
        }

        function renderBookmarkCard(record) {
            const category = record.category === 'beranda' ? 'beranda' : 'kampus';
            const card = document.createElement('article');
            card.className = 'bookmark-item bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all relative flex flex-col gap-space-md';
            card.dataset.category = category;
            card.dataset.scholarshipId = record.id;

            const header = document.createElement('div');
            header.className = 'flex items-start justify-between gap-space-md';
            const identity = document.createElement('div');
            identity.className = 'flex items-start gap-space-md min-w-0';
            const icon = createTextElement('span', 'text-primary font-bold text-headline-sm', record.icon || 'bookmark');
            const iconContainer = document.createElement('div');
            iconContainer.className = 'w-14 h-14 rounded-xl bg-surface-container-high flex items-center justify-center shrink-0 overflow-hidden shadow-xs';
            iconContainer.appendChild(icon);

            const description = document.createElement('div');
            description.className = 'min-w-0';
            const badges = document.createElement('div');
            badges.className = 'flex flex-wrap items-center gap-space-xs mb-1';
            badges.appendChild(createTextElement(
                'span',
                'bg-surface-container text-primary font-label-sm text-label-sm px-2 py-0.5 rounded-full',
                category === 'beranda' ? 'Pilihan Beranda' : (record.programType || 'Dari Katalog')
            ));
            badges.appendChild(createTextElement(
                'span',
                'bg-surface-container text-primary font-label-sm text-label-sm px-2 py-0.5 rounded-full',
                record.level
            ));
            badges.appendChild(createTextElement(
                'span',
                'bg-secondary-fixed/50 text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full',
                record.funding
            ));
            description.appendChild(badges);
            description.appendChild(createTextElement(
                'h3',
                'font-headline-sm text-headline-sm text-primary font-bold',
                record.title || record.id
            ));
            description.appendChild(createTextElement(
                'p',
                'font-body-sm text-body-sm text-on-surface-variant mt-0.5',
                record.provider || 'Penyelenggara tidak tersedia'
            ));
            identity.append(iconContainer, description);

            const removeButton = document.createElement('button');
            removeButton.className = 'p-space-xs rounded-lg text-outline hover:text-error hover:bg-error-container/40 transition-colors shrink-0';
            removeButton.type = 'button';
            removeButton.title = 'Hapus dari Bookmark';
            removeButton.setAttribute('aria-label', `Hapus ${record.title || record.id} dari Bookmark`);
            removeButton.appendChild(createTextElement('span', 'material-symbols-outlined text-xl', 'delete'));
            removeButton.addEventListener('click', () => removeBookmark(record.id));
            header.append(identity, removeButton);

            const details = document.createElement('div');
            details.className = 'grid grid-cols-2 sm:grid-cols-4 gap-space-sm p-space-sm bg-surface-container-low rounded-lg';
            [
                ['Jenjang', record.level],
                ['Pendanaan', record.funding],
                ['Lokasi', record.location],
                ['Jadwal', record.deadline],
            ].forEach(([label, value]) => {
                const cell = document.createElement('div');
                cell.appendChild(createTextElement('span', 'font-label-sm text-label-sm text-on-surface-variant block', label));
                cell.appendChild(createTextElement('span', 'font-label-md text-label-md text-on-surface font-semibold', value));
                details.appendChild(cell);
            });

            const footer = document.createElement('div');
            footer.className = 'flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-sm pt-space-xs';
            footer.appendChild(createTextElement(
                'p',
                'font-body-sm text-body-sm text-on-surface-variant',
                record.status || 'Periksa informasi terbaru di portal resmi.'
            ));

            const detailLink = createTextElement(
                    'a',
                    'w-full sm:w-auto inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg px-space-md py-space-sm rounded-lg transition-all shadow-xs',
                    'Lihat Detail'
                );
            detailLink.href = scholarshipDetailUrl(record);
            detailLink.appendChild(createTextElement('span', 'material-symbols-outlined text-base', 'arrow_forward'));
            footer.appendChild(detailLink);

            card.append(header, details, footer);
            return card;
        }

        function updateBookmarkSummary(records) {
            const campusCount = records.filter((record) => record.category !== 'beranda').length;
            const berandaCount = records.length - campusCount;
            const deadlineCount = records.filter((record) => Boolean(record.deadline)).length;
            document.getElementById('stat-total').textContent = records.length;
            document.getElementById('stat-deadline').textContent = deadlineCount;
            document.getElementById('stat-campus').textContent = campusCount;
            document.getElementById('bookmark-header-count').textContent = records.length;
            document.getElementById('tab-count-all').textContent = records.length;
            document.getElementById('tab-count-kampus').textContent = campusCount;
            document.getElementById('tab-count-beranda').textContent = berandaCount;
        }

        function renderBookmarkCollection() {
            const bookmarkIds = readBookmarkIds();
            const bookmarkDetails = readBookmarkDetails();
            const records = bookmarkIds.map((bookmarkId) => {
                const details = bookmarkDetails[bookmarkId];
                return details && typeof details === 'object'
                    ? { ...details, id: bookmarkId }
                    : {
                        id: bookmarkId,
                        title: bookmarkId,
                        provider: 'Informasi detail tidak tersedia',
                        level: '',
                        funding: '',
                        location: '',
                        deadline: '',
                        status: '',
                        url: '',
                        icon: 'bookmark',
                        category: 'kampus',
                    };
            });

            document.querySelectorAll('[data-bookmark-placeholder]').forEach((placeholder) => placeholder.remove());
            bookmarkList.replaceChildren(...records.map(renderBookmarkCard));
            updateBookmarkSummary(records);
            filterTab(activeBookmarkCategory, document.querySelector('.tab-btn.bg-primary'));
        }

        function filterTab(category, btnElement) {
            activeBookmarkCategory = category;
            const buttons = document.querySelectorAll('.tab-btn');
            buttons.forEach((button) => {
                button.classList.remove('bg-primary', 'text-on-primary', 'shadow-xs');
                button.classList.add('text-on-surface-variant');
            });

            const activeButton = btnElement || document.querySelector(`.tab-btn[onclick*="'${category}'"]`);
            if (activeButton) {
                activeButton.classList.add('bg-primary', 'text-on-primary', 'shadow-xs');
                activeButton.classList.remove('text-on-surface-variant');
            }

            const items = document.querySelectorAll('#bookmark-list .bookmark-item');
            let visibleCount = 0;
            items.forEach((item) => {
                const isVisible = category === 'all' || item.dataset.category === category;
                item.style.display = isVisible ? 'flex' : 'none';
                if (isVisible) {
                    visibleCount++;
                }
            });

            if (visibleCount === 0) {
                emptyState.classList.remove('hidden');
                emptyState.classList.add('flex');
                const message = emptyState.querySelector('p');
                message.textContent = items.length === 0
                    ? 'Simpan beasiswa dari Beranda atau Cari Beasiswa untuk menampilkannya di sini.'
                    : 'Belum ada beasiswa tersimpan dalam kategori ini.';
            } else {
                emptyState.classList.add('hidden');
                emptyState.classList.remove('flex');
            }
        }

        function removeBookmark(scholarshipId) {
            const bookmarkIds = readBookmarkIds().filter((bookmarkId) => bookmarkId !== scholarshipId);
            const bookmarkDetails = readBookmarkDetails();
            delete bookmarkDetails[scholarshipId];
            localStorage.setItem(bookmarkStorageKey, JSON.stringify(bookmarkIds));
            localStorage.setItem(bookmarkDetailsStorageKey, JSON.stringify(bookmarkDetails));
            renderBookmarkCollection();
            showToast('Beasiswa berhasil dihapus dari daftar simpanan.');
        }

        window.addEventListener('storage', (event) => {
            if (event.key === bookmarkStorageKey || event.key === bookmarkDetailsStorageKey) {
                renderBookmarkCollection();
            }
        });

        renderBookmarkCollection();
    </script>

    <!-- Footer -->
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
            <div class="pt-space-md flex flex-col md:flex-row items-center justify-between gap-space-sm font-body-sm text-body-sm text-on-surface-variant border-t border-surface-container-high">
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