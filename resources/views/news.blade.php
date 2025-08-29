@extends('layouts.app')
@section('page-title', 'Tentang Kami')
@push('scripts')
    <script src="{{ asset('js/news.js') }}" defer></script>
@endpush

@section('content')
    <!-- Hero Layout -->
    <section class="bg-transparent text-white py-12 sm:py-16 px-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-2xl sm:text-3xl md:text-5xl font-heading font-bold mb-4 sm:mb-6 leading-tight">
                    BERITA SMK TELEKOMUNIKASI <span class="text-[#fe914e]">TELESANDI</span> BEKASI
                </h1>
                <p class="text-base sm:text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                    Informasi terkini dan prestasi dari SMK Telekomunikasi Telesandi Bekasi
                </p>
            </div>
        </div>
    </section>

    <!-- Kategori untuk Filtering -->
    <section class="py-8 bg-neutral-50 w-[50%] rounded-4xl mx-auto mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="bg-[#fe914e] text-white px-6 py-2 rounded-full font-medium hover:bg-[#fe914e] cursor-pointer transition-colors">Semua</button>
                <button class="bg-white text-neutral-600 px-6 py-2 rounded-full font-medium hover:bg-[#fe914e] cursor-pointer hover:text-white transition-colors">Prestasi</button>
                <button class="bg-white text-neutral-600 px-6 py-2 rounded-full font-medium hover:bg-[#fe914e] cursor-pointer hover:text-white transition-colors">Kegiatan</button>
                <button class="bg-white text-neutral-600 px-6 py-2 rounded-full font-medium hover:bg-[#fe914e] cursor-pointer hover:text-white transition-colors">Pengumuman</button>
                <button class="bg-white text-neutral-600 px-6 py-2 rounded-full font-medium hover:bg-[#fe914e] cursor-pointer hover:text-white transition-colors">Teknologi</button>
            </div>
        </div>
    </section>

    <!-- All News -->
    <section class="py-16 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h2 class="text-3xl font-heading font-bold text-[#fe914e] mb-4">Semua Berita</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('img/ic_tels.webp') }}" alt="Hackathon Sekolah" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#fe914e] text-white px-2 py-1 rounded text-xs font-medium">Kegiatan</span>
                            <span class="text-xs text-neutral-500">3 Januari 2024</span>
                        </div>
                        <h3 class="text-lg font-heading font-semibold mb-3 text-balance">Hackathon Sekolah 2024</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Kompetisi programming dan problem solving untuk mengembangkan kemampuan coding siswa dalam menyelesaikan masalah nyata...</p>
                        
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('img/ic_tels.webp') }}" alt="Lab Fiber Optic" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#fe914e] text-white px-2 py-1 rounded text-xs font-medium">Teknologi</span>
                            <span class="text-xs text-neutral-500">28 Desember 2023</span>
                        </div>
                        <h3 class="text-lg font-heading font-semibold mb-3 text-balance">Laboratorium Fiber Optic Terbaru</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Pembukaan laboratorium fiber optic dengan peralatan splicing dan testing terkini untuk praktikum mahasiswa...</p>
                        
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('img/ic_tels.webp') }}" alt="Magang Industri" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#fe914e] text-white px-2 py-1 rounded text-xs font-medium">Kegiatan</span>
                            <span class="text-xs text-neutral-500">25 Desember 2023</span>
                        </div>
                        <h3 class="text-lg font-heading font-semibold mb-3 text-balance">Program Magang Industri</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Siswa kelas XII memulai program magang di berbagai perusahaan telekomunikasi dan IT terkemuka...</p>
                        
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('img/ic_tels.webp') }}" alt="Cyber Security Competition" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#fe914e] text-white px-2 py-1 rounded text-xs font-medium">Prestasi</span>
                            <span class="text-xs text-neutral-500">20 Desember 2023</span>
                        </div>
                        <h3 class="text-lg font-heading font-semibold mb-3 text-balance">Juara 2 Kompetisi Cyber Security</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Tim cyber security SMK Telesandi meraih juara 2 dalam kompetisi keamanan siber tingkat provinsi...</p>
                        
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('img/ic_tels.webp') }}" alt="IoT Project" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#fe914e] text-white px-2 py-1 rounded text-xs font-medium">Teknologi</span>
                            <span class="text-xs text-neutral-500">18 Desember 2023</span>
                        </div>
                        <h3 class="text-lg font-heading font-semibold mb-3 text-balance">Pameran Proyek IoT Siswa</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Showcase proyek Internet of Things karya siswa dengan berbagai inovasi smart home dan smart city...</p>
                        
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('img/ic_tels.webp') }}" alt="Robotika Competition" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-[#fe914e] text-white px-2 py-1 rounded text-xs font-medium">Prestasi</span>
                            <span class="text-xs text-neutral-500">15 Desember 2023</span>
                        </div>
                        <h3 class="text-lg font-heading font-semibold mb-3 text-balance">Juara 1 Kontes Robot Indonesia</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Tim robotika sekolah berhasil meraih juara pertama dalam Kontes Robot Indonesia tingkat regional...</p>
                        
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
