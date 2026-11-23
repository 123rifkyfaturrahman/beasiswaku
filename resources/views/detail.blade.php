@php
    $detailTitle = $scholarship->title ?? 'Beasiswa';
    $isLegacyLpdpDetail = false;
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@if ($isLegacyLpdpDetail) Detail Beasiswa LPDP Reguler 2025 - CariBeasiswa ID @else Detail {{ $detailTitle }} - CariBeasiswa ID @endif</title>
    <!-- Google Fonts: Plus Jakarta Sans & Material Symbols Outlined -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
        ::-webkit-scrollbar { display: none; }
    </style>
    <!-- Tailwind CSS CDN & Custom Design Tokens -->
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
        <div class="h-20 max-w-7xl mx-auto px-4 sm:px-margin flex items-center justify-between gap-gutter">
            <div class="flex items-center gap-space-md">
                <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center text-on-primary shadow-xs">
                    <span class="material-symbols-outlined text-xl">school</span>
                </div>
                <a class="flex items-center" href="{{ route('home') }}">
                    <span class="font-headline-sm text-headline-sm text-primary tracking-tight font-bold">CariBeasiswa</span>
                    <span class="font-label-sm text-label-sm text-secondary bg-secondary-fixed/50 px-space-xs py-0.5 rounded ml-space-xs">ID</span>
                </a>
            </div>
            <!-- Navigasi Utama (Fokus Informasi Beasiswa) -->
            <nav class="hidden lg:flex items-center gap-space-xs">
                <a class="px-space-md py-space-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all font-label-lg text-label-lg rounded-lg" href="{{ route('home') }}">Beranda</a>
                <a aria-current="page" class="px-space-md py-space-sm transition-all bg-surface-container-high text-primary font-label-lg font-bold rounded-lg shadow-sm" href="{{ route('cari.beasiswa') }}">Cari Beasiswa</a>
                <a class="px-space-md py-space-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all font-label-lg text-label-lg rounded-lg" href="{{ route('bookmark') }}">Bookmark</a>
                <a class="px-space-md py-space-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all font-label-lg text-label-lg rounded-lg" href="{{ route('contact') }}">Kontak</a>
            </nav>
            <div class="flex items-center gap-space-md">
                <form action="{{ route('cari.beasiswa') }}" class="relative hidden md:block w-56 lg:w-64" method="GET">
                    <input class="w-full bg-surface-container-low text-on-surface font-body-sm text-body-sm rounded-lg pl-9 pr-space-md py-space-sm placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-container-lowest transition-colors" name="keyword" placeholder="Cari beasiswa, jenjang..." type="text"/>
                    <span class="material-symbols-outlined text-on-surface-variant text-base absolute left-space-sm top-1/2 -translate-y-1/2 pointer-events-none">search</span>
                </form>
                <a class="relative p-space-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low rounded-lg transition-colors" href="{{ route('bookmark') }}" title="Simpanan Beasiswa">
                    <span class="material-symbols-outlined">bookmark</span>
                    <span id="headerBookmarkCount" class="absolute top-1 right-1 w-4 h-4 rounded-full bg-secondary text-on-secondary font-label-sm text-[10px] flex items-center justify-center font-bold">3</span>
                </a>
                <button class="relative p-space-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low rounded-lg transition-colors" title="Notifikasi" type="button" onclick="showToast('Tidak ada notifikasi baru saat ini.')">
                    
                    
                </button>
                <div class="flex items-center pl-space-xs">
                    
                </div>
            </div>
        </div>
    </header>

    <!-- Toast Notification (Pengganti Alert) -->
    <div id="toastNotification" class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none">
        <div class="bg-inverse-surface text-inverse-on-surface px-space-md py-space-sm rounded-xl shadow-xl flex items-center gap-space-sm">
            <span class="material-symbols-outlined text-secondary-fixed-dim text-lg">check_circle</span>
            <span id="toastMessage" class="font-body-md text-body-md">Tautan berhasil disalin!</span>
        </div>
    </div>

    <main class="w-full pt-20 bg-surface min-h-screen">
        @if (! $isLegacyLpdpDetail)
            <div class="flex flex-col w-full">
                <section class="max-w-7xl mx-auto w-full px-4 sm:px-margin py-space-md">
                    <nav aria-label="Breadcrumb" class="flex flex-wrap items-center gap-space-xs font-body-sm text-body-sm text-on-surface-variant">
                        <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}">
                            <span class="material-symbols-outlined text-base">home</span>
                            <span>Beranda</span>
                        </a>
                        <span class="material-symbols-outlined text-sm text-outline-variant">chevron_right</span>
                        <a class="hover:text-primary transition-colors" href="{{ route('cari.beasiswa') }}">Cari Beasiswa</a>
                        <span class="material-symbols-outlined text-sm text-outline-variant">chevron_right</span>
                        <span class="text-on-surface font-semibold truncate max-w-xs md:max-w-md">{{ $detailTitle }}</span>
                    </nav>
                </section>

                <section class="max-w-7xl mx-auto w-full px-4 sm:px-margin pb-space-lg">
                    <div class="bg-surface-container-lowest rounded-xl shadow-md p-space-md md:p-space-xl flex flex-col gap-space-lg relative overflow-hidden">
                        <div class="absolute -right-24 -top-24 w-80 h-80 rounded-full bg-secondary-fixed/30 blur-3xl pointer-events-none"></div>
                        <div class="absolute left-1/3 -bottom-20 w-64 h-64 rounded-full bg-primary-fixed/20 blur-3xl pointer-events-none"></div>
                        <div class="relative z-10 flex flex-col lg:flex-row lg:items-start justify-between gap-space-lg">
                            <div class="flex flex-col sm:flex-row items-start gap-space-md max-w-3xl">
                                <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-xl bg-surface-container flex items-center justify-center p-3 shadow-inner shrink-0">
                                    <div class="w-full h-full rounded-lg bg-primary text-on-primary flex items-center justify-center font-bold text-xl">
                                        🎓
                                    </div>
                                </div>
                                <div class="flex flex-col gap-space-xs">
                                    <div class="flex flex-wrap items-center gap-space-xs">
                                        <span class="font-label-md text-label-md text-on-secondary-fixed bg-secondary-fixed px-space-sm py-0.5 rounded-full font-bold flex items-center gap-1">
                                            <span class="material-symbols-outlined text-xs">school</span>
                                            {{ $scholarship['program_type'] ?? 'Informasi Beasiswa' }}
                                        </span>
                                        <span class="font-label-md text-label-md text-primary bg-primary-fixed px-space-sm py-0.5 rounded-full font-bold flex items-center gap-1">
                                            <span class="material-symbols-outlined text-xs">verified</span>
                                            Sumber resmi penyelenggara
                                        </span>
                                    </div>
                                    <h1 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-primary font-bold tracking-tight mt-space-xs">
                                        {{ $detailTitle }}
                                    </h1>
                                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                                        {{ $scholarship['provider'] ?? 'Penyelenggara beasiswa' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-sm">
                            <div class="bg-surface-container-low p-space-sm rounded-lg flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Jenjang Studi</span>
                                <span class="font-label-lg text-label-lg text-primary font-bold">{{ $scholarship['level'] ?? 'Belum dicantumkan' }}</span>
                            </div>
                            <div class="bg-surface-container-low p-space-sm rounded-lg flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Jenis Pendanaan</span>
                                <span class="font-label-lg text-label-lg text-secondary font-bold">{{ $scholarship['funding'] ?? 'Cek ketentuan resmi' }}</span>
                            </div>
                            <div class="bg-surface-container-low p-space-sm rounded-lg flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Lokasi Studi</span>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">{{ $scholarship['location'] ?? 'Cek ketentuan resmi' }}</span>
                            </div>
                            <div class="bg-surface-container-low p-space-sm rounded-lg flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Jadwal</span>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">{{ $scholarship['deadline'] ?? 'Periksa pengumuman resmi' }}</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="max-w-7xl mx-auto w-full px-4 sm:px-margin pb-space-xl">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
                        <div class="lg:col-span-8 flex flex-col gap-space-lg">
                            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                                <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold">Tentang Beasiswa Ini</h2>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    {{ $scholarship['description'] ?? 'Informasi rinci program belum dicantumkan. Silakan periksa persyaratan dan pengumuman terbaru pada portal resmi penyelenggara.' }}
                                </p>
                                <div class="bg-surface-container-low rounded-lg p-space-md flex flex-col gap-space-xs">
                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">Status Pendaftaran</span>
                                    <p class="font-body-md text-body-md text-on-surface-variant">
                                       {{ $scholarship->status === 'active' ? 'Pendaftaran aktif' : 'Pendaftaran ditutup' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <aside class="lg:col-span-4 flex flex-col gap-space-md">
                            <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-md">
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Langkah Berikutnya</h2>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Pastikan persyaratan dan jadwal terbaru sudah dikonfirmasi langsung kepada penyelenggara.
                                </p>
                               @if ($scholarship->source_url)
    <a
        href="{{ $scholarship->source_url }}"
        target="_blank"
        rel="noopener noreferrer"
        class="w-full px-space-md py-space-sm rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg font-bold flex items-center justify-center gap-space-xs transition-colors shadow-sm"
    >
        <span>Lihat Portal Resmi</span>
        <span class="material-symbols-outlined text-base">open_in_new</span>
    </a>
@endif
                                <a class="w-full px-space-md py-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-primary font-label-lg text-label-lg font-bold flex items-center justify-center gap-space-xs transition-colors" href="{{ route('cari.beasiswa') }}">
                                    Cari Beasiswa Lain
                                </a>
                                <a class="w-full px-space-md py-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-primary font-label-lg text-label-lg font-bold flex items-center justify-center gap-space-xs transition-colors" href="{{ route('bookmark') }}">
                                    Buka Bookmark
                                </a>
                            </div>
                        </aside>
                    </div>
                </section>
            </div>
        @else
        <div class="flex flex-col w-full">
            <!-- Interactive Modal: Confirmation to External Official Portal -->
            <div class="fixed inset-0 z-50 hidden items-center justify-center bg-inverse-surface/60 backdrop-blur-sm p-4" id="redirectModal">
                <div class="w-full max-w-lg bg-surface-container-lowest rounded-xl shadow-2xl p-space-lg flex flex-col gap-space-md">
                    <div class="flex items-center justify-between pb-space-xs">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed">
                                <span class="material-symbols-outlined text-xl">open_in_new</span>
                            </div>
                            <div>
                                <div class="font-headline-sm text-headline-sm text-on-surface">Pindah ke Portal Resmi</div>
                                <div class="font-body-sm text-body-sm text-on-surface-variant">Langkah terakhir alur pendaftaran beasiswa</div>
                            </div>
                        </div>
                        <button class="p-1 rounded-full hover:bg-surface-container-high text-on-surface-variant transition-colors" onclick="toggleRedirectModal(false)">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                    <div class="bg-surface-container-low rounded-lg p-space-md flex flex-col gap-space-xs">
                        <div class="flex items-center gap-space-xs text-primary font-label-md text-label-md">
                            <span class="material-symbols-outlined text-base">verified</span>
                            Domain Terverifikasi Resmi:
                        </div>
                        <a class="font-label-lg text-label-lg text-primary underline truncate font-semibold" href="https://beasiswalpdp.kemenkeu.go.id" rel="noopener noreferrer" target="_blank">
                            https://beasiswalpdp.kemenkeu.go.id
                        </a>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                            Anda akan diarahkan ke luar sistem <strong>CariBeasiswa ID</strong> langsung menuju portal seleksi daring resmi LPDP Kementerian Keuangan Republik Indonesia. Pastikan dokumen format PDF Anda telah disiapkan.
                        </p>
                    </div>
                    <div class="flex items-start gap-space-sm text-on-surface-variant text-body-sm font-body-sm bg-surface-bright p-space-sm rounded-lg">
                        <span class="material-symbols-outlined text-tertiary-fixed-variant text-lg mt-0.5">info</span>
                        <span>Akun pendaftaran LPDP dibuat secara mandiri di portal resmi tersebut. Seluruh data seleksi bersifat rahasia dan aman di bawah regulasi Kemenkeu RI.</span>
                    </div>
                    <div class="flex items-center justify-end gap-space-sm pt-space-xs">
                        <button class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container transition-colors" onclick="toggleRedirectModal(false)">
                            Batal &amp; Periksa Berkas
                        </button>
                        <a class="px-space-lg py-space-sm bg-primary hover:bg-primary-container text-on-primary rounded-lg font-label-lg text-label-lg font-bold flex items-center gap-space-xs transition-colors shadow-sm" href="https://beasiswalpdp.kemenkeu.go.id" rel="noopener noreferrer" target="_blank">
                            <span>Lanjut ke Website Resmi</span>
                            <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Breadcrumbs & Quick Utility Bar -->
            <section class="max-w-7xl mx-auto w-full px-4 sm:px-margin py-space-md">
                <div class="flex flex-wrap items-center justify-between gap-space-sm">
                    <nav aria-label="Breadcrumb" class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface-variant">
                        <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}">
                            <span class="material-symbols-outlined text-base">home</span>
                            <span>Beranda</span>
                        </a>
                        <span class="material-symbols-outlined text-sm text-outline-variant">chevron_right</span>
                        <a class="hover:text-primary transition-colors" href="{{ route('cari.beasiswa') }}">Cari Beasiswa</a>
                        <span class="material-symbols-outlined text-sm text-outline-variant">chevron_right</span>
                        <span class="text-on-surface font-semibold truncate max-w-xs md:max-w-md">LPDP Beasiswa Reguler Magister &amp; Doktoral 2025</span>
                    </nav>
                    <div class="flex items-center gap-space-sm">
                        <span class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-surface-container-high text-on-surface-variant flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                            Diperbarui: 3 Februari 2025
                        </span>
                    </div>
                </div>
            </section>

            <!-- Hero Header Card with Action Matrix -->
            <section class="max-w-7xl mx-auto w-full px-4 sm:px-margin pb-space-lg">
                <div class="bg-surface-container-lowest rounded-xl shadow-md p-space-md md:p-space-xl flex flex-col gap-space-lg relative overflow-hidden">
                    <div class="absolute -right-24 -top-24 w-80 h-80 rounded-full bg-secondary-fixed/30 blur-3xl pointer-events-none"></div>
                    <div class="absolute left-1/3 -bottom-20 w-64 h-64 rounded-full bg-primary-fixed/20 blur-3xl pointer-events-none"></div>
                    <div class="relative z-10 flex flex-col lg:flex-row lg:items-start justify-between gap-space-lg">
                        <div class="flex flex-col sm:flex-row items-start gap-space-md max-w-3xl">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-xl bg-surface-container flex items-center justify-center p-3 shadow-inner shrink-0 overflow-hidden">
                                <div class="w-full h-full rounded-lg bg-primary text-on-primary flex flex-col items-center justify-center font-bold">
                                    <span class="text-xs tracking-widest opacity-80">RI</span>
                                    <span class="text-lg tracking-tight">LPDP</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex flex-wrap items-center gap-space-xs">
                                    <span class="font-label-md text-label-md text-on-secondary-fixed bg-secondary-fixed px-space-sm py-0.5 rounded-full font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-xs">monetization_on</span>
                                        Fully Funded
                                    </span>
                                    <span class="font-label-md text-label-md text-primary bg-primary-fixed px-space-sm py-0.5 rounded-full font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-xs">verified</span>
                                        Terverifikasi Resmi Kemenkeu RI
                                    </span>
                                    <span class="font-label-md text-label-md text-on-tertiary-fixed bg-tertiary-fixed px-space-sm py-0.5 rounded-full font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-xs">hourglass_top</span>
                                        Pendaftaran Dibuka (Tahap 1)
                                    </span>
                                </div>
                                <h1 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-primary font-bold tracking-tight mt-space-xs">
                                    Beasiswa LPDP Reguler Program Magister &amp; Doktoral Luar Negeri 2025
                                </h1>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Program beasiswa penuh dari Lembaga Pengelola Dana Pendidikan untuk putra-putri terbaik bangsa melanjutkan studi jenjang S2 dan S3 di perguruan tinggi unggulan dunia.
                                </p>
                                <div class="flex flex-wrap items-center gap-x-space-lg gap-y-space-xs pt-space-xs font-body-sm text-body-sm text-on-surface-variant">
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base text-primary">school</span>
                                        <span>Jenjang: <strong>Magister (S2) &amp; Doktor (S3)</strong></span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base text-secondary">public</span>
                                        <span>Tujuan: <strong>Luar Negeri (Top Global Universities)</strong></span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base text-tertiary-fixed-variant">event</span>
                                        <span>Batas Akhir: <strong>28 Februari 2025</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row lg:flex-col gap-space-sm shrink-0 min-w-[260px]">
                            <button class="w-full px-space-lg py-space-sm bg-primary hover:bg-primary-container text-on-primary rounded-lg font-label-lg text-label-lg font-bold flex items-center justify-center gap-space-xs transition-transform active:scale-95 shadow-sm group" onclick="toggleRedirectModal(true)">
                                <span>Daftar di Website Resmi</span>
                                <span class="material-symbols-outlined text-lg group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">open_in_new</span>
                            </button>
                            <button class="w-full px-space-md py-space-sm rounded-lg font-label-lg text-label-lg font-semibold flex items-center justify-center gap-space-xs transition-colors bg-surface-container text-secondary hover:bg-surface-container-high" id="bookmarkHeroBtn" onclick="toggleBookmarkState()">
                                <span class="material-symbols-outlined text-lg" id="bookmarkHeroIcon">bookmark_add</span>
                                <span id="bookmarkHeroText">Simpan ke Bookmark</span>
                            </button>
                            <button class="w-full px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container transition-colors flex items-center justify-center gap-space-xs" onclick="shareScholarship()">
                                <span class="material-symbols-outlined text-lg">share</span>
                                <span>Bagikan Beasiswa</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Asymmetric Workspace Layout -->
            <section class="max-w-7xl mx-auto w-full px-4 sm:px-margin pb-space-xl">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
                    <!-- Left 8 Columns: Dynamic Tabs & Structured Information -->
                    <div class="lg:col-span-8 flex flex-col gap-space-lg">
                        <div class="bg-surface-container-lowest rounded-xl p-space-xs shadow-sm flex items-center gap-space-xs overflow-x-auto">
                            <button class="tab-button active px-space-md py-space-sm rounded-lg font-label-lg text-label-lg font-bold transition-all bg-primary text-on-primary shadow-xs shrink-0 flex items-center gap-1.5" onclick="switchTab('tab-benefit', this)">
                                <span class="material-symbols-outlined text-base">featured_play_list</span>
                                <span>Ringkasan &amp; Benefit</span>
                            </button>
                            <button class="tab-button px-space-md py-space-sm rounded-lg font-label-lg text-label-lg font-medium text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all shrink-0 flex items-center gap-1.5" onclick="switchTab('tab-kualifikasi', this)">
                                <span class="material-symbols-outlined text-base">checklist</span>
                                <span>Syarat &amp; Kualifikasi</span>
                            </button>
                            <button class="tab-button px-space-md py-space-sm rounded-lg font-label-lg text-label-lg font-medium text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all shrink-0 flex items-center gap-1.5" onclick="switchTab('tab-dokumen', this)">
                                <span class="material-symbols-outlined text-base">folder_open</span>
                                <span>Berkas &amp; Dokumen</span>
                            </button>
                            <button class="tab-button px-space-md py-space-sm rounded-lg font-label-lg text-label-lg font-medium text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all shrink-0 flex items-center gap-1.5" onclick="switchTab('tab-timeline', this)">
                                <span class="material-symbols-outlined text-base">calendar_month</span>
                                <span>Timeline Seleksi</span>
                            </button>
                        </div>

                        <!-- TAB 1: Ringkasan & Benefit -->
                        <div class="tab-pane flex flex-col gap-space-lg" id="tab-benefit">
                            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold">Tentang Beasiswa Reguler LPDP</h2>
                                    <span class="font-label-sm text-label-sm text-secondary bg-secondary-fixed/50 px-space-sm py-1 rounded">Skema Afirmasi &amp; Reguler</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    Beasiswa Reguler diperuntukkan bagi Warga Negara Republik Indonesia yang telah menyelesaikan studi program sarjana (S1) atau sarjana terapan (D4) untuk beasiswa magister; atau program magister (S2) untuk beasiswa doktor. Pendaftar berhak memilih kampus tujuan dari daftar universitas terbaik dunia yang ditetapkan oleh LPDP (World Top 200).
                                </p>
                                <div class="w-full h-56 rounded-xl overflow-hidden shadow-xs relative bg-primary-container">
                                    <img class="w-full h-full object-cover" src="https://placehold.co/900x350/00236f/ffffff?text=Top+Global+Universities+LPDP+2025" alt="Ilustrasi Kampus" onerror="this.style.display='none'"/>
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/30 to-transparent flex items-end p-space-md">
                                        <span class="font-label-lg text-label-lg text-on-primary font-bold">Membuka Akses Lebih dari 150 Universitas Top Global</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm pt-space-xs">
                                    <div class="bg-surface-container-low p-space-sm rounded-lg flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Durasi Magister</span>
                                        <span class="font-headline-sm text-headline-sm text-primary font-bold">Maks. 24 Bln</span>
                                    </div>
                                    <div class="bg-surface-container-low p-space-sm rounded-lg flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Durasi Doktoral</span>
                                        <span class="font-headline-sm text-headline-sm text-primary font-bold">Maks. 48 Bln</span>
                                    </div>
                                    <div class="bg-surface-container-low p-space-sm rounded-lg flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Tunjangan Bulanan</span>
                                        <span class="font-headline-sm text-headline-sm text-secondary font-bold">s/d 25 Juta/bln</span>
                                    </div>
                                    <div class="bg-surface-container-low p-space-sm rounded-lg flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Pilihan Negara</span>
                                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold">30+ Negara</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                                <h3 class="font-headline-md text-headline-md text-on-surface font-bold">Cakupan Pembiayaan Lengkap (Fully Funded)</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Semua penerima beasiswa (awardee) menerima pendanaan komprehensif tanpa biaya pengembalian pasca studi:
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md pt-space-xs">
                                    <div class="bg-surface-container-low p-space-md rounded-xl flex items-start gap-space-sm hover:shadow-xs transition-shadow">
                                        <div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center text-primary shrink-0">
                                            <span class="material-symbols-outlined text-2xl">account_balance</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-label-lg text-label-lg font-bold text-on-surface">Biaya Pendidikan Penuh (Tuition Fee)</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-1">Ditanggung 100% langsung ke universitas tujuan mencakup biaya pendaftaran, SPP, dan tunjangan buku riset tahunan.</span>
                                        </div>
                                    </div>
                                    <div class="bg-surface-container-low p-space-md rounded-xl flex items-start gap-space-sm hover:shadow-xs transition-shadow">
                                        <div class="w-12 h-12 rounded-lg bg-secondary-fixed flex items-center justify-center text-secondary shrink-0">
                                            <span class="material-symbols-outlined text-2xl">payments</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-label-lg text-label-lg font-bold text-on-surface">Biaya Hidup (Living Allowance)</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-1">Tunjangan bulanan berkisar Rp 20.000.000 s/d Rp 35.000.000 (disesuaikan indeks kota studi).</span>
                                        </div>
                                    </div>
                                    <div class="bg-surface-container-low p-space-md rounded-xl flex items-start gap-space-sm hover:shadow-xs transition-shadow">
                                        <div class="w-12 h-12 rounded-lg bg-tertiary-fixed flex items-center justify-center text-tertiary shrink-0">
                                            <span class="material-symbols-outlined text-2xl">flight_takeoff</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-label-lg text-label-lg font-bold text-on-surface">Tiket Pesawat PP &amp; Visa</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-1">Tiket penerbangan kelas ekonomi dari domisili asal ke negara tujuan pulang-pergi, serta biaya aplikasi visa studi.</span>
                                        </div>
                                    </div>
                                    <div class="bg-surface-container-low p-space-md rounded-xl flex items-start gap-space-sm hover:shadow-xs transition-shadow">
                                        <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
                                            <span class="material-symbols-outlined text-2xl">health_and_safety</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-label-lg text-label-lg font-bold text-on-surface">Asuransi Kesehatan Internasional</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-1">Perlindungan kesehatan premium selama masa studi aktif serta tunjangan keadaan darurat.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAB 2: Syarat & Kualifikasi -->
                        <div class="tab-pane hidden flex flex-col gap-space-lg" id="tab-kualifikasi">
                            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                                <h3 class="font-headline-md text-headline-md text-on-surface font-bold">Kualifikasi Pelamar</h3>
                                <div class="space-y-space-md">
                                    <div class="flex items-start gap-space-md p-space-md rounded-lg bg-surface-container-low">
                                        <div class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-sm shrink-0">1</div>
                                        <div>
                                            <h4 class="font-label-lg text-label-lg font-bold text-on-surface">Status Kewarganegaraan</h4>
                                            <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">Warga Negara Indonesia (WNI) yang setia pada Pancasila dan UUD 1945, serta berkomitmen kembali berkontribusi di tanah air.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-space-md p-space-md rounded-lg bg-surface-container-low">
                                        <div class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-sm shrink-0">2</div>
                                        <div>
                                            <h4 class="font-label-lg text-label-lg font-bold text-on-surface">Indeks Prestasi Kumulatif (IPK) Minimum</h4>
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm mt-2">
                                                <div class="bg-surface-container-lowest p-space-sm rounded border-l-4 border-primary">
                                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Pelamar Magister (S2)</span>
                                                    <div class="font-headline-sm text-headline-sm font-bold text-primary">Min. 3.00 <span class="text-body-sm font-normal text-on-surface-variant">/ 4.00</span></div>
                                                </div>
                                                <div class="bg-surface-container-lowest p-space-sm rounded border-l-4 border-secondary">
                                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Pelamar Doktoral (S3)</span>
                                                    <div class="font-headline-sm text-headline-sm font-bold text-secondary">Min. 3.25 <span class="text-body-sm font-normal text-on-surface-variant">/ 4.00</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-space-md p-space-md rounded-lg bg-surface-container-low">
                                        <div class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-sm shrink-0">3</div>
                                        <div>
                                            <h4 class="font-label-lg text-label-lg font-bold text-on-surface">Kemampuan Bahasa Asing (Sertifikat Resmi)</h4>
                                            <p class="font-body-md text-body-md text-on-surface-variant mt-0.5 mb-2">Sertifikat kemampuan bahasa Inggris yang diterbitkan maksimal 2 (dua) tahun terakhir:</p>
                                            <div class="flex flex-wrap gap-space-sm">
                                                <span class="px-space-md py-1 rounded bg-surface-container-highest font-label-md text-label-md text-on-surface font-semibold">IELTS™: Min. 6.5</span>
                                                <span class="px-space-md py-1 rounded bg-surface-container-highest font-label-md text-label-md text-on-surface font-semibold">TOEFL iBT®: Min. 80</span>
                                                <span class="px-space-md py-1 rounded bg-surface-container-highest font-label-md text-label-md text-on-surface font-semibold">PTE Academic: Min. 58</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-space-md p-space-md rounded-lg bg-surface-container-low">
                                        <div class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-sm shrink-0">4</div>
                                        <div>
                                            <h4 class="font-label-lg text-label-lg font-bold text-on-surface">Batas Usia Maksimal per 31 Desember 2025</h4>
                                            <p class="font-body-md text-body-md text-on-surface-variant mt-0.5">
                                                Maksimal <strong>35 tahun</strong> untuk pelamar jenjang Magister (S2), dan maksimal <strong>40 tahun</strong> untuk pelamar jenjang Doktor (S3).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAB 3: Berkas & Dokumen -->
                        <div class="tab-pane hidden flex flex-col gap-space-lg" id="tab-dokumen">
                            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <h3 class="font-headline-md text-headline-md text-on-surface font-bold">Daftar Dokumen Pendaftaran</h3>
                                    <span class="font-label-sm text-label-sm text-primary font-semibold">Format Unggah: PDF (Maks. 2MB/file)</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Semua berkas diunggah secara digital langsung melalui website pendaftaran resmi LPDP Kementerian Keuangan.
                                </p>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md pt-space-xs">
                                    <div class="p-space-md rounded-lg bg-surface-container-low flex items-start gap-space-sm">
                                        <span class="material-symbols-outlined text-primary text-2xl">badge</span>
                                        <div>
                                            <div class="font-label-lg text-label-lg font-bold text-on-surface">KTP &amp; Kartu Keluarga Asli</div>
                                            <div class="font-body-sm text-body-sm text-on-surface-variant">Hasil pemindaian warna dokumen kependudukan resmi yang masih berlaku.</div>
                                        </div>
                                    </div>
                                    <div class="p-space-md rounded-lg bg-surface-container-low flex items-start gap-space-sm">
                                        <span class="material-symbols-outlined text-primary text-2xl">history_edu</span>
                                        <div>
                                            <div class="font-label-lg text-label-lg font-bold text-on-surface">Ijazah &amp; Transkrip Nilai Legalisir</div>
                                            <div class="font-body-sm text-body-sm text-on-surface-variant">Ijazah S1/S2 resmi beserta SK Penyetaraan Ijazah Luar Negeri jika lulusan LN.</div>
                                        </div>
                                    </div>
                                    <div class="p-space-md rounded-lg bg-surface-container-low flex items-start gap-space-sm">
                                        <span class="material-symbols-outlined text-secondary text-2xl">mail</span>
                                        <div>
                                            <div class="font-label-lg text-label-lg font-bold text-on-surface">Surat Rekomendasi Akademisi / Tokoh</div>
                                            <div class="font-body-sm text-body-sm text-on-surface-variant">Dari pimpinan atau dosen pembimbing akademis sesuai template resmi LPDP.</div>
                                        </div>
                                    </div>
                                    <div class="p-space-md rounded-lg bg-surface-container-low flex items-start gap-space-sm">
                                        <span class="material-symbols-outlined text-secondary text-2xl">description</span>
                                        <div>
                                            <div class="font-label-lg text-label-lg font-bold text-on-surface">Esai Komitmen Kembali ke Indonesia</div>
                                            <div class="font-body-sm text-body-sm text-on-surface-variant">Esai 1500–2000 kata mengenai rencana studi dan peran nyata pembangunan bangsa.</div>
                                        </div>
                                    </div>
                                    <div class="p-space-md rounded-lg bg-surface-container-low flex items-start gap-space-sm">
                                        <span class="material-symbols-outlined text-tertiary-fixed-variant text-2xl">science</span>
                                        <div>
                                            <div class="font-label-lg text-label-lg font-bold text-on-surface">Proposal Penelitian (Khusus S3 Doktor)</div>
                                            <div class="font-body-sm text-body-sm text-on-surface-variant">Proposal riset komprehensif mencakup hipotesis, metodologi, dan signifikansi.</div>
                                        </div>
                                    </div>
                                    <div class="p-space-md rounded-lg bg-surface-container-low flex items-start gap-space-sm">
                                        <span class="material-symbols-outlined text-tertiary-fixed-variant text-2xl">mark_email_read</span>
                                        <div>
                                            <div class="font-label-lg text-label-lg font-bold text-on-surface">LoA Unconditional (Jika Ada)</div>
                                            <div class="font-body-sm text-body-sm text-on-surface-variant">Surat penerimaan tanpa syarat dari perguruan tinggi tujuan LPDP yang masih valid.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAB 4: Timeline Seleksi -->
                        <div class="tab-pane hidden flex flex-col gap-space-lg" id="tab-timeline">
                            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                                <h3 class="font-headline-md text-headline-md text-on-surface font-bold">Jadwal Tahapan Seleksi LPDP 2025</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Rangkaian proses seleksi resmi tahap 1 berlangsung transparan dan bertingkat:
                                </p>
                                <div class="relative pl-6 space-y-space-lg before:absolute before:left-2 before:top-2 before:bottom-2 before:w-0.5 before:bg-surface-container-highest">
                                    <div class="relative flex flex-col gap-1">
                                        <div class="absolute -left-6 top-1.5 w-4 h-4 rounded-full bg-secondary ring-4 ring-secondary-fixed/50"></div>
                                        <div class="flex flex-wrap items-center gap-2">
                                            <span class="font-label-lg text-label-lg font-bold text-secondary">Tahap 1: Pembukaan &amp; Pendaftaran Online</span>
                                            <span class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-bold">Sedang Berlangsung</span>
                                        </div>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">15 Januari – 28 Februari 2025</span>
                                        <p class="font-body-md text-body-md text-on-surface mt-1">Pembuatan akun pelamar, pengisian formulir, dan upload berkas di website resmi LPDP.</p>
                                    </div>
                                    <div class="relative flex flex-col gap-1">
                                        <div class="absolute -left-6 top-1.5 w-4 h-4 rounded-full bg-primary"></div>
                                        <span class="font-label-lg text-label-lg font-bold text-on-surface">Tahap 2: Seleksi Administrasi &amp; Verifikasi</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">1 Maret – 15 Maret 2025</span>
                                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">Pemeriksaan keaslian dan kelengkapan dokumen pendaftaran oleh tim kurator pusat LPDP.</p>
                                    </div>
                                    <div class="relative flex flex-col gap-1">
                                        <div class="absolute -left-6 top-1.5 w-4 h-4 rounded-full bg-surface-variant"></div>
                                        <span class="font-label-lg text-label-lg font-bold text-on-surface">Tahap 3: Tes Bakat Skolastik (TBS)</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">25 Maret – 5 April 2025</span>
                                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">Ujian penalaran verbal, kuantitatif, dan logika pemecahan masalah secara terpusat.</p>
                                    </div>
                                    <div class="relative flex flex-col gap-1">
                                        <div class="absolute -left-6 top-1.5 w-4 h-4 rounded-full bg-surface-variant"></div>
                                        <span class="font-label-lg text-label-lg font-bold text-on-surface">Tahap 4: Seleksi Substansi &amp; Wawancara</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">20 April – 30 Mei 2025</span>
                                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">Wawancara panel ahli akademik, psikologi kepribadian, serta klarifikasi komitmen kebangsaan.</p>
                                    </div>
                                    <div class="relative flex flex-col gap-1">
                                        <div class="absolute -left-6 top-1.5 w-4 h-4 rounded-full bg-surface-variant"></div>
                                        <span class="font-label-lg text-label-lg font-bold text-on-surface">Pengumuman Kelulusan Akhir</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">10 Juni 2025</span>
                                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">Penetapan Surat Keterangan Calon Penerima Beasiswa (Letter of Sponsorship).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right 4 Columns: Sticky Sidebar Companion & Quick Actions -->
                    <aside class="lg:col-span-4 flex flex-col gap-space-lg">
                        <div class="sticky top-28 bg-surface-container-lowest rounded-xl shadow-md p-space-md flex flex-col gap-space-md">
                            <!-- Deadline Countdown Timer Widget -->
                            <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col gap-space-xs">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm font-bold text-on-tertiary-fixed bg-tertiary-fixed px-space-xs py-0.5 rounded flex items-center gap-1">
                                        <span class="material-symbols-outlined text-xs">timer</span>
                                        Batas Waktu
                                    </span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">28 Feb 2025, 23:59 WIB</span>
                                </div>
                                <div class="grid grid-cols-4 gap-2 text-center pt-2">
                                    <div class="bg-surface-container-lowest p-2 rounded shadow-xs">
                                        <span class="font-headline-sm text-headline-sm font-bold text-primary" id="timerDays">24</span>
                                        <span class="block font-label-sm text-[10px] text-on-surface-variant">Hari</span>
                                    </div>
                                    <div class="bg-surface-container-lowest p-2 rounded shadow-xs">
                                        <span class="font-headline-sm text-headline-sm font-bold text-primary" id="timerHours">12</span>
                                        <span class="block font-label-sm text-[10px] text-on-surface-variant">Jam</span>
                                    </div>
                                    <div class="bg-surface-container-lowest p-2 rounded shadow-xs">
                                        <span class="font-headline-sm text-headline-sm font-bold text-primary" id="timerMinutes">45</span>
                                        <span class="block font-label-sm text-[10px] text-on-surface-variant">Menit</span>
                                    </div>
                                    <div class="bg-surface-container-lowest p-2 rounded shadow-xs">
                                        <span class="font-headline-sm text-headline-sm font-bold text-secondary" id="timerSeconds">30</span>
                                        <span class="block font-label-sm text-[10px] text-on-surface-variant">Detik</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col gap-space-xs">
                                <div class="font-label-md text-label-md text-on-surface font-bold uppercase tracking-wider">
                                    Langkah Menuju Portal Resmi
                                </div>
                                <ul class="text-body-sm font-body-sm text-on-surface-variant space-y-2">
                                    <li class="flex items-start gap-2">
                                        <span class="material-symbols-outlined text-base text-secondary shrink-0 mt-0.5">check_circle</span>
                                        <span>Pastikan Anda telah membaca syarat dan mengunduh format esai LPDP.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="material-symbols-outlined text-base text-secondary shrink-0 mt-0.5">check_circle</span>
                                        <span>Klik tombol di bawah untuk diarahkan ke server Kementerian Keuangan.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="material-symbols-outlined text-base text-secondary shrink-0 mt-0.5">check_circle</span>
                                        <span>Buat akun baru atau masuk bila sudah memiliki akun SIAP LPDP.</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="flex flex-col gap-space-sm pt-space-xs">
                                <button class="w-full py-space-sm px-space-md bg-primary hover:bg-primary-container text-on-primary rounded-lg font-label-lg text-label-lg font-bold flex items-center justify-center gap-space-xs transition-colors shadow-sm group" onclick="toggleRedirectModal(true)">
                                    <span>Kunjungi Website Resmi Pendaftaran</span>
                                    <span class="material-symbols-outlined text-lg group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">open_in_new</span>
                                </button>
                                <button class="w-full py-space-sm px-space-md rounded-lg font-label-lg text-label-lg font-semibold flex items-center justify-center gap-space-xs transition-colors bg-surface-container text-secondary hover:bg-surface-container-high" id="bookmarkSidebarBtn" onclick="toggleBookmarkState()">
                                    <span class="material-symbols-outlined text-lg" id="bookmarkSidebarIcon">bookmark_add</span>
                                    <span id="bookmarkSidebarText">Simpan ke Bookmark Saya</span>
                                </button>
                            </div>
                            <div class="bg-surface-container-high/60 rounded-lg p-space-sm flex items-center gap-space-xs">
                                <span class="material-symbols-outlined text-sm text-on-surface-variant">shield</span>
                                <span class="font-label-sm text-[11px] text-on-surface-variant leading-tight">
                                    Pendaftaran resmi LPDP tidak memungut biaya apapun (Gratis 100%).
                                </span>
                            </div>
                        </div>

                        <!-- Relevant Similar Scholarships Bento Box -->
                        <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-md flex flex-col gap-space-md">
                            <div class="flex items-center justify-between">
                                <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">Beasiswa Serupa</h4>
                                <a class="font-label-md text-label-md text-primary hover:underline" href="{{ route('cari.beasiswa') }}">Semua</a>
                            </div>
                            <div class="flex flex-col gap-space-sm">
                                <div class="p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors flex items-center justify-between group cursor-pointer" onclick="showToast('Membuka detail Chevening Scholarship UK...')">
                                    <div class="flex items-center gap-space-sm">
                                        <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-primary font-bold text-xs shrink-0">UK</div>
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-lg text-on-surface font-semibold group-hover:text-primary transition-colors">Chevening Scholarship UK</span>
                                            <span class="font-body-sm text-[12px] text-on-surface-variant">S2 Master • Fully Funded</span>
                                        </div>
                                    </div>
                                    <span class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                                </div>
                                <div class="p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors flex items-center justify-between group cursor-pointer" onclick="showToast('Membuka detail Fulbright Foreign Student...')">
                                    <div class="flex items-center gap-space-sm">
                                        <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-primary font-bold text-xs shrink-0">USA</div>
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-lg text-on-surface font-semibold group-hover:text-primary transition-colors">Fulbright Foreign Student</span>
                                            <span class="font-body-sm text-[12px] text-on-surface-variant">S2 &amp; S3 Amerika • Fully Funded</span>
                                        </div>
                                    </div>
                                    <span class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                                </div>
                                <div class="p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors flex items-center justify-between group cursor-pointer" onclick="showToast('Membuka detail Australia Awards (AAS)...')">
                                    <div class="flex items-center gap-space-sm">
                                        <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-primary font-bold text-xs shrink-0">AUS</div>
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-lg text-on-surface font-semibold group-hover:text-primary transition-colors">Australia Awards (AAS)</span>
                                            <span class="font-body-sm text-[12px] text-on-surface-variant">S2 &amp; S3 Australia • Fully Funded</span>
                                        </div>
                                    </div>
                                    <span class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>
        </div>
        @endif
    </main>

    <!-- Footer Navigasi (Tanpa menu Tips & Panduan) -->
    <footer class="w-full bg-surface-container-low text-on-surface-variant pt-space-xl pb-space-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-margin">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg mb-space-xl">
                <div class="lg:col-span-2 flex flex-col gap-space-sm">
                    <div class="flex items-center gap-space-xs mb-space-xs">
                        <div class="w-7 h-7 rounded-md bg-primary flex items-center justify-center text-on-primary">
                            <span class="material-symbols-outlined text-base">school</span>
                        </div>
                        <span class="font-headline-sm text-headline-sm text-primary font-bold tracking-tight">CariBeasiswa</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-sm">Pusat kurasi informasi beasiswa terpadu untuk pelajar dan mahasiswa Indonesia dalam meraih peluang studi terbaik di dalam negeri maupun luar negeri.</p>
                    <div class="flex flex-wrap items-center gap-space-sm mt-space-sm">
                        <span class="font-label-md text-label-md text-secondary bg-surface-container-high px-space-sm py-1 rounded-full">Terverifikasi Resmi</span>
                        <span class="font-label-md text-label-md text-on-surface-variant bg-surface-container-highest px-space-sm py-1 rounded-full">Kemendikbudristek &amp; LPDP Sync</span>
                    </div>
                </div>
                <div class="flex flex-col gap-space-xs">
                    <div class="font-label-lg text-label-lg text-on-surface font-bold mb-space-xs">Eksplorasi Beasiswa</div>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" href="{{ route('cari.beasiswa') }}">Semua Beasiswa</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" href="{{ route('cari.beasiswa') }}">Beasiswa S1 Sarjana</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" href="{{ route('cari.beasiswa') }}">Beasiswa S2 &amp; S3 Magister/Doktor</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" href="{{ route('cari.beasiswa') }}">Fully Funded Programs</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" href="{{ route('bookmark') }}">Daftar Disimpan</a>
                </div>
                <div class="flex flex-col gap-space-xs">
                    <div class="font-label-lg text-label-lg text-on-surface font-bold mb-space-xs">Bantuan &amp; Mitra</div>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" href="{{ route('contact') }}">Kontak</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" href="{{ route('contact') }}">Helpdesk &amp; Pengaduan</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" href="{{ route('contact') }}">Live Chat Admin</a>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors py-0.5" href="{{ route('contact') }}">Kemitraan Institusi</a>
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

    <!-- JavaScript Interactivity -->
    <script>
        // Toast Notification Utility (No alert())
        let toastTimeout;
        function showToast(msg) {
            const toast = document.getElementById('toastNotification');
            const toastMsg = document.getElementById('toastMessage');
            if (!toast || !toastMsg) return;

            toastMsg.textContent = msg;
            toast.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
            toast.classList.add('translate-y-0', 'opacity-100');

            clearTimeout(toastTimeout);
            toastTimeout = setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
            }, 3000);
        }

        // Tab Switching Logic
        function switchTab(targetId, activeBtn) {
            document.querySelectorAll('.tab-pane').forEach(el => el.classList.add('hidden'));
            const activePane = document.getElementById(targetId);
            if (activePane) {
                activePane.classList.remove('hidden');
            }

            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('bg-primary', 'text-on-primary', 'shadow-xs', 'font-bold');
                btn.classList.add('text-on-surface-variant', 'font-medium');
            });

            activeBtn.classList.add('bg-primary', 'text-on-primary', 'shadow-xs', 'font-bold');
            activeBtn.classList.remove('text-on-surface-variant', 'font-medium');
        }

        // Modal Confirmation Controller
        function toggleRedirectModal(show) {
            const modal = document.getElementById('redirectModal');
            if (!modal) return;
            if (show) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            } else {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
            }
        }

        // Bookmark Toggle State
        let isBookmarked = false;
        let bookmarkCount = 3;
        function toggleBookmarkState() {
            isBookmarked = !isBookmarked;

            const heroIcon = document.getElementById('bookmarkHeroIcon');
            const heroText = document.getElementById('bookmarkHeroText');
            const heroBtn = document.getElementById('bookmarkHeroBtn');

            const sideIcon = document.getElementById('bookmarkSidebarIcon');
            const sideText = document.getElementById('bookmarkSidebarText');
            const sideBtn = document.getElementById('bookmarkSidebarBtn');
            const badge = document.getElementById('headerBookmarkCount');

            if (isBookmarked) {
                const activeClass = ['bg-secondary', 'text-on-secondary'];
                
                heroBtn.classList.remove('bg-surface-container', 'text-secondary');
                heroBtn.classList.add(...activeClass);
                heroIcon.innerText = 'bookmark_added';
                heroIcon.style.fontVariationSettings = "'FILL' 1";
                heroText.innerText = 'Tersimpan di Bookmark';

                sideBtn.classList.remove('bg-surface-container', 'text-secondary');
                sideBtn.classList.add(...activeClass);
                sideIcon.innerText = 'bookmark_added';
                sideIcon.style.fontVariationSettings = "'FILL' 1";
                sideText.innerText = 'Tersimpan di Bookmark';

                bookmarkCount++;
                if (badge) badge.innerText = bookmarkCount;
                showToast('Beasiswa LPDP ditambahkan ke Bookmark Anda.');
            } else {
                heroBtn.classList.add('bg-surface-container', 'text-secondary');
                heroBtn.classList.remove('bg-secondary', 'text-on-secondary');
                heroIcon.innerText = 'bookmark_add';
                heroIcon.style.fontVariationSettings = "'FILL' 0";
                heroText.innerText = 'Simpan ke Bookmark';

                sideBtn.classList.add('bg-surface-container', 'text-secondary');
                sideBtn.classList.remove('bg-secondary', 'text-on-secondary');
                sideIcon.innerText = 'bookmark_add';
                sideIcon.style.fontVariationSettings = "'FILL' 0";
                sideText.innerText = 'Simpan ke Bookmark Saya';

                bookmarkCount--;
                if (badge) badge.innerText = bookmarkCount;
                showToast('Beasiswa dihapus dari daftar Bookmark.');
            }
        }

        // Share Link Handler (Using execCommand fallback for iframe compatibility)
        function shareScholarship() {
            const dummyInput = document.createElement('input');
            document.body.appendChild(dummyInput);
            dummyInput.value = window.location.href;
            dummyInput.select();
            try {
                document.execCommand('copy');
                showToast('Tautan beasiswa berhasil disalin ke clipboard!');
            } catch (err) {
                showToast('Gagal menyalin tautan.');
            }
            document.body.removeChild(dummyInput);
        }

        // Live Countdown Simulation
        setInterval(() => {
            const secEl = document.getElementById('timerSeconds');
            if (secEl) {
                let sec = parseInt(secEl.innerText, 10);
                if (sec > 0) {
                    secEl.innerText = String(sec - 1).padStart(2, '0');
                } else {
                    secEl.innerText = '59';
                }
            }
        }, 1000);
    </script>
</body>
</html>