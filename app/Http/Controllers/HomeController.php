<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Scholarship;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(): View
    {
        $beasiswaRecords = Beasiswa::query()
            ->where('status', 'active')
            ->whereDate('deadline', '>=', today())
            ->orderBy('deadline')
            ->get()
            ->map(fn (Beasiswa $beasiswa): array => $this->toCatalogCardData($beasiswa))
            ->all();
        $legacyRecords = Scholarship::query()
            ->where('is_active', true)
            ->whereDate('deadline', '>=', today())
            ->orderBy('deadline')
            ->get()
            ->map(fn (Scholarship $scholarship): array => $this->toLegacyCatalogCardData($scholarship))
            ->all();
        $beasiswas = array_merge($beasiswaRecords, $legacyRecords);
        $featuredScholarships = $this->curatedScholarships();

        return view('welcome', compact('beasiswas', 'featuredScholarships'));
    }

    public function cariBeasiswa(Request $request): View
    {
        $query = Beasiswa::query();

        if ($request->filled('keyword')) {
            $keyword = $request->string('keyword')->toString();

            $query->where(function ($query) use ($keyword): void {
                $query->where('title', 'like', '%'.$keyword.'%')
                    ->orWhere('institution', 'like', '%'.$keyword.'%')
                    ->orWhere('description', 'like', '%'.$keyword.'%');
            });
        }

        if ($request->filled('education_level')) {
            $query->where('education_level', $request->string('education_level')->toString());
        }

        if ($request->filled('funding_type')) {
            $query->where('funding_type', $request->string('funding_type')->toString());
        }

        if ($request->filled('location')) {
            $query->where('location', $request->string('location')->toString());
        }

        $campusScholarships = $query->latest()
            ->get()
            ->map(fn (Beasiswa $beasiswa): array => $this->toCatalogCardData($beasiswa))
            ->all();
        $legacyQuery = Scholarship::query();

        if ($request->filled('keyword')) {
            $keyword = $request->string('keyword')->toString();

            $legacyQuery->where(function ($query) use ($keyword): void {
                $query->where('title', 'like', '%'.$keyword.'%')
                    ->orWhere('provider', 'like', '%'.$keyword.'%')
                    ->orWhere('description', 'like', '%'.$keyword.'%');
            });
        }

        if ($request->filled('education_level')) {
            $legacyQuery->where('education_level', $request->string('education_level')->toString());
        }

        if ($request->filled('funding_type')) {
            $legacyQuery->where('funding_type', $request->string('funding_type')->toString());
        }

        if ($request->filled('location')) {
            $legacyQuery->where('location', $request->string('location')->toString());
        }

        $legacyScholarships = $legacyQuery->latest()
            ->get()
            ->map(fn (Scholarship $scholarship): array => $this->toLegacyCatalogCardData($scholarship))
            ->all();
        $campusScholarships = array_merge($this->curatedScholarships(), $campusScholarships, $legacyScholarships);

        return view('cari-beasiswa', compact('campusScholarships'));
    }

    public function show(Request $request, string $id): View
    {
        if (ctype_digit($id)) {
            $beasiswa = Beasiswa::find((int) $id);

            if ($beasiswa) {
                $scholarship = array_merge($this->toCatalogCardData($beasiswa), [
                    'banner_image' => null,
                    'category' => 'database',
                ]);
            } else {
                $record = Scholarship::findOrFail((int) $id);
                $scholarship = [
                    'id' => (string) $record->id,
                    'title' => $record->title,
                    'provider' => $record->provider,
                    'level' => $record->education_level,
                    'funding' => $record->funding_type,
                    'location' => $record->location,
                    'deadline' => $record->deadline,
                    'status' => 'Informasi pendaftaran mengikuti ketentuan penyelenggara.',
                    'url' => $record->official_url,
                    'icon' => strtoupper(substr($record->provider, 0, 3)),
                    'program_type' => 'Beasiswa',
                    'description' => $record->description,
                    'banner_image' => $record->banner_image,
                    'category' => 'database',
                ];
            }
        } else {
            abort_unless($request->filled('title'), 404);

            $details = $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'provider' => ['nullable', 'string', 'max:255'],
                'level' => ['nullable', 'string', 'max:255'],
                'funding' => ['nullable', 'string', 'max:255'],
                'location' => ['nullable', 'string', 'max:255'],
                'deadline' => ['nullable', 'string', 'max:255'],
                'status' => ['nullable', 'string', 'max:500'],
                'url' => ['nullable', 'url', 'starts_with:https://'],
                'icon' => ['nullable', 'string', 'max:20'],
                'program_type' => ['nullable', 'string', 'max:100'],
                'description' => ['nullable', 'string', 'max:2000'],
                'category' => ['nullable', 'in:beranda,kampus'],
            ]);

            $scholarship = array_merge([
                'id' => $id,
                'provider' => null,
                'level' => null,
                'funding' => null,
                'location' => null,
                'deadline' => null,
                'status' => null,
                'url' => null,
                'icon' => null,
                'program_type' => null,
                'description' => null,
                'banner_image' => null,
                'category' => null,
            ], $details);
        }

        return view('detail', compact('scholarship'));
    }

    /**
     * @return array{
     *     id: string,
     *     title: string,
     *     provider: string,
     *     level: string,
     *     funding: string,
     *     location: string,
     *     deadline: string,
     *     status: string,
     *     url: string,
     *     icon: string,
     *     program_type: string,
     *     categoryLabel: string,
     *     description: string,
     *     tags: list<string>
     * }
     */
    private function toCatalogCardData(Beasiswa $beasiswa): array
    {
        $educationLevel = $beasiswa->education_level ?? 'Informasi tidak tersedia';
        $fundingType = $beasiswa->funding_type ?? 'Periksa ketentuan resmi';
        $location = $beasiswa->location ?? 'Periksa portal resmi';
        $statusLabel = match ($beasiswa->status) {
    'active' => (
        $beasiswa->deadline &&
        $beasiswa->deadline->isBefore(today())
    ) ? 'Pendaftaran ditutup' : 'Pendaftaran dibuka',

    'upcoming' => 'Segera Dibuka',

    'unannounced' => 'Jadwal Belum Diumumkan',

    'closed' => 'Pendaftaran Ditutup',

    default => 'Status Belum Diketahui',
};

        return [
            'id' => (string) $beasiswa->id,
            'title' => $beasiswa->title,
            'provider' => $beasiswa->institution,
            'level' => $educationLevel,
            'funding' => $fundingType,
            'location' => $location,
            'deadline' => $beasiswa->deadline?->format('d M Y') ?? 'Belum diumumkan',
            'status' => $statusLabel,
            'url' => $beasiswa->source_url,
            'icon' => Str::upper(Str::substr($beasiswa->institution, 0, 2)),
            'program_type' => $beasiswa->category,
            'categoryLabel' => $beasiswa->category,
            'description' => $beasiswa->description ?? '',
            'tags' => array_values(array_filter([
                $beasiswa->category,
                $beasiswa->education_level,
                $beasiswa->funding_type,
                $beasiswa->location,
            ])),
        ];
    }

    /**
     * @return array{
     *     id: string,
     *     title: string,
     *     provider: string,
     *     level: string,
     *     funding: string,
     *     location: string,
     *     deadline: string,
     *     status: string,
     *     url: string,
     *     icon: string,
     *     program_type: string,
     *     categoryLabel: string,
     *     description: string,
     *     tags: list<string>
     * }
     */
    private function toLegacyCatalogCardData(Scholarship $scholarship): array
    {
        $deadline = Carbon::parse($scholarship->deadline);
        $isActive = $scholarship->is_active && ! $deadline->isBefore(today());

        return [
            'id' => 'legacy-'.$scholarship->id,
            'title' => $scholarship->title,
            'provider' => $scholarship->provider,
            'level' => $scholarship->education_level,
            'funding' => $scholarship->funding_type,
            'location' => $scholarship->location,
            'deadline' => $deadline->format('d M Y'),
            'status' => $isActive ? 'Pendaftaran dibuka' : 'Pendaftaran ditutup',
            'url' => $scholarship->official_url,
            'icon' => Str::upper(Str::substr($scholarship->provider, 0, 2)),
            'program_type' => 'Beasiswa Kampus',
            'categoryLabel' => 'Database beasiswa',
            'description' => $scholarship->description ?? '',
            'tags' => array_values(array_filter([
                $scholarship->provider,
                $scholarship->education_level,
                $scholarship->funding_type,
                $scholarship->location,
            ])),
        ];
    }

    /**
     * @return list<array{
     *     id: string,
     *     title: string,
     *     provider: string,
     *     level: string,
     *     funding: string,
     *     location: string,
     *     deadline: string,
     *     status: string,
     *     url: string,
     *     icon: string,
     *     program_type: string,
     *     categoryLabel: string,
     *     description: string,
     *     tags: list<string>
     * }>
     */
    private function curatedScholarships(): array
    {
        return [
            [
                'id' => 'lpdp-2026-stage-2',
                'title' => 'Beasiswa LPDP 2026 Tahap 2',
                'provider' => 'Kementerian Keuangan Republik Indonesia',
                'level' => 'Magister (S2) & Doktoral (S3)',
                'funding' => 'Fully Funded (Penuh)',
                'location' => 'Dalam & Luar Negeri',
                'deadline' => 'Seleksi substansi s.d. 20 Nov 2026',
                'status' => 'Seleksi berjalan hingga 20 November; hasil diumumkan 30 November 2026',
                'url' => 'https://lpdp.kemenkeu.go.id/beasiswa/pendaftaran-beasiswa/',
                'icon' => 'LP',
                'program_type' => 'Beasiswa Pemerintah Pusat',
                'categoryLabel' => 'Beasiswa Pemerintah Pusat',
                'description' => 'Informasi tahap seleksi LPDP 2026. Persyaratan dan jadwal terbaru mengikuti pengumuman resmi LPDP.',
                'tags' => ['LPDP', 'Dalam & Luar Negeri', 'Fully Funded'],
            ],
            [
                'id' => 'mext-2027',
                'title' => 'Beasiswa Pemerintah Jepang (MEXT) 2027',
                'provider' => 'Kedutaan Besar Jepang & Monbukagakusho',
                'level' => 'S1, S2, & S3 (Research)',
                'funding' => 'Fully Funded (Penuh)',
                'location' => 'Luar Negeri (Jepang)',
                'deadline' => 'Pantau jadwal Kedutaan',
                'status' => 'Siklus 2027; jadwal resmi mengikuti pengumuman Kedutaan Jepang',
                'url' => 'https://www.id.emb-japan.go.jp/itpr_id/beasiswa.html',
                'icon' => 'MX',
                'program_type' => 'Beasiswa Luar Negeri',
                'categoryLabel' => 'Beasiswa Luar Negeri',
                'description' => 'Beasiswa pemerintah Jepang untuk berbagai jenjang studi. Periksa pengumuman Kedutaan untuk jadwal dan persyaratan.',
                'tags' => ['MEXT', 'Jepang', 'Fully Funded'],
            ],
            [
                'id' => 'chevening-2027-28',
                'title' => 'Chevening Scholarship 2027/28',
                'provider' => 'Foreign, Commonwealth & Development Office (FCDO) UK',
                'level' => 'Magister (S2 1 Tahun)',
                'funding' => 'Fully Funded (Penuh)',
                'location' => 'Luar Negeri (UK / Britania)',
                'deadline' => 'Pendaftaran ditutup Oktober 2026',
                'status' => 'Pendaftaran ditutup Oktober 2026; seleksi berlangsung',
                'url' => 'https://www.chevening.org/scholarships/',
                'icon' => 'CH',
                'program_type' => 'Beasiswa Luar Negeri',
                'categoryLabel' => 'Beasiswa Luar Negeri',
                'description' => 'Program beasiswa magister satu tahun di Inggris. Informasi seleksi dan siklus berikutnya tersedia di situs resmi Chevening.',
                'tags' => ['Chevening', 'Inggris', 'Fully Funded'],
            ],
            [
                'id' => 'lpdp-cofunding-2026',
                'title' => 'Beasiswa LPDP Co-Funding 2026',
                'provider' => 'Lembaga Pengelola Dana Pendidikan (LPDP)',
                'level' => 'Magister (S2) & Doktor (S3)',
                'funding' => 'Co-Funding',
                'location' => '5 negara mitra',
                'deadline' => 'Cek jadwal di portal LPDP',
                'status' => 'Informasi diumumkan 28 Oktober 2026; cek status pendaftaran di portal LPDP',
                'url' => 'https://lpdp.kemenkeu.go.id/beasiswa/pendaftaran-beasiswa/',
                'icon' => 'LP',
                'program_type' => 'Beasiswa Pemerintah Pusat',
                'categoryLabel' => 'Beasiswa Pemerintah Pusat',
                'description' => 'Skema kolaborasi pendanaan LPDP dengan mitra. Persyaratan dan cakupan tiap skema mengikuti pengumuman resmi.',
                'tags' => ['LPDP', 'Co-Funding', 'Skema Mitra'],
            ],
            [
                'id' => 'erasmus-mundus-2027',
                'title' => 'Erasmus Mundus Joint Masters 2027',
                'provider' => 'Uni Eropa',
                'level' => 'Magister (S2)',
                'funding' => 'Beasiswa penuh tersedia pada program tertentu',
                'location' => 'Luar Negeri (Eropa)',
                'deadline' => 'Berbeda untuk setiap program',
                'status' => 'Siklus 2027; tenggat dan beasiswa mengikuti program masing-masing',
                'url' => 'https://www.eacea.ec.europa.eu/scholarships/erasmus-mundus-catalogue_en',
                'icon' => 'EU',
                'program_type' => 'Beasiswa Luar Negeri',
                'categoryLabel' => 'Beasiswa Luar Negeri',
                'description' => 'Katalog program Erasmus Mundus Joint Masters. Pilih program untuk melihat persyaratan dan tenggat di situs penyelenggara.',
                'tags' => ['Erasmus Mundus', 'Eropa', 'Cek program'],
            ],
        ];
    }

    public function guides(): View
    {
        return view('tips-panduan');
    }

    public function contact(): View
    {
        return view('kontak');
    }
}
