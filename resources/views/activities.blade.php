@extends('layouts.app')
@section('page-title', 'Aktivitas')

@section('content')
    <!-- Hero Layout -->
    <section class="bg-transparent text-white py-10 sm:py-14 md:py-20 sm:px-6 lg:px-8 px-9">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-xl sm:text-3xl md:text-5xl lg:text-6xl font-heading font-bold mb-3 sm:mb-6 leading-tight">
                KEGIATAN SMK TELEKOMUNIKASI <span class="text-[#fe914e]">TELESANDI</span> BEKASI
            </h1>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl max-w-3xl mx-auto leading-relaxed">
                Program kegiatan dan ekstrakurikuler yang bertujuan untuk mengembangkan kompetensi siswa-siswi di bidang
                Teknologi Informasi dan Komunikasi.
            </p>
        </div>
    </section>

    <!-- Ekstrakurikuler Layout -->
    <section class="py-12 sm:py-16 md:py-20 sm:px-6 lg:px-8 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-bold text-[#fe914e] mb-3">Ekstrakurikuler</h2>
                <p class="text-sm sm:text-base md:text-lg text-white max-w-2xl mx-auto">
                    Kegiatan ekstrakurikuler yang mendukung pengembangan kompetensi di bidang telekomunikasi dan teknologi
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Card Ekstrakurikuler -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 hover:scale-105">
                    <img src="{{ asset('img/ic_syntax.webp') }}" alt="Syntax Creative"
                        class="w-full h-40 sm:h-48 md:h-56 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-heading font-semibold mb-3">Syntax Creative</h3>
                        <p class="text-xs sm:text-sm md:text-base text-neutral-600 mb-3 leading-relaxed">
                            Syntak Creative adalah klub yang fokus pada pengembangan kreativitas dan inovasi dalam bidang
                            teknologi informasi.
                        </p>
                        <div class="flex items-center text-xs sm:text-sm text-primary">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Selasa & Kamis, 16:00-17:30
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300 hover:scale-105">
                    <img src="{{ asset('img/ic_tomcat.webp') }}" alt="Tomcat Club" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-heading font-semibold mb-3">Tomcat Club</h3>
                        <p class="text-xs sm:text-sm md:text-base text-neutral-600 mb-3 leading-relaxed">Komunitas siswa yang fokus pada jaringan komputer, konfigurasi router, dan troubleshooting.</p>
                        <div class="flex items-center text-sm text-primary">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Kamis, 16:00-18:00
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300 hover:scale-105">
                    <img src="{{ asset('img/ic_senimedia.webp') }}" alt="Seni Media" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-heading font-semibold mb-3">Seni Media</h3>
                        <p class="text-xs sm:text-sm md:text-base text-neutral-600 mb-3 leading-relaxed">Mengembangkan kemampuan seni media digital, termasuk desain grafis dan produksi video.</p>
                        <div class="flex items-center text-sm text-primary">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Setiap Jumat, 16:00-18:00
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kalender Kegiatan Layout -->
    <section class="py-12 sm:py-16 md:py-20 bg-neutral-50 sm:px-6 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-bold text-neutral-700 mb-3">Kalender Kegiatan
                </h2>
                <p class="text-sm sm:text-base md:text-lg text-neutral-600">
                    Jadwal kegiatan dan acara penting di SMK Telekomunikasi Telesandi Bekasi
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
                <!-- Card Kalender -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-heading font-semibold mb-6 text-[#fe914e]">September 2025</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="bg-[#055d97] text-white rounded-lg px-3 py-2 text-center min-w-[60px]">
                                <div class="text-sm font-medium">SEP</div>
                                <div class="text-lg font-bold">20</div>
                            </div>
                            <div>
                                <h4 class="font-semibold">Lomba Jaringan Komputer</h4>
                                <p class="text-sm text-neutral-600">Kompetisi Network Administration tingkat provinsi</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-[#055d97] text-white rounded-lg px-3 py-2 text-center min-w-[60px]">
                                <div class="text-sm font-medium">SEP</div>
                                <div class="text-lg font-bold">25</div>
                            </div>
                            <div>
                                <h4 class="font-semibold">Workshop Teknologi 5G</h4>
                                <p class="text-sm text-neutral-600">Pelatihan teknologi telekomunikasi terdepan</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-[#055d97] text-white rounded-lg px-3 py-2 text-center min-w-[60px]">
                                <div class="text-sm font-medium">SEP</div>
                                <div class="text-lg font-bold">30</div>
                            </div>
                            <div>
                                <h4 class="font-semibold">Job Fair IT</h4>
                                <p class="text-sm text-neutral-600">Bursa kerja khusus bidang teknologi informasi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-heading font-semibold mb-6 text-[#fe914e]">Oktober 2025</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="bg-[#055d97] text-white rounded-lg px-3 py-2 text-center min-w-[60px]">
                                <div class="text-sm font-medium">OKT</div>
                                <div class="text-lg font-bold">05</div>
                            </div>
                            <div>
                                <h4 class="font-semibold">Hackathon Sekolah</h4>
                                <p class="text-sm text-neutral-600">Kompetisi programming dan problem solving</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-[#055d97] text-white rounded-lg px-3 py-2 text-center min-w-[60px]">
                                <div class="text-sm font-medium">OKT</div>
                                <div class="text-lg font-bold">14</div>
                            </div>
                            <div>
                                <h4 class="font-semibold">Pameran Proyek IoT</h4>
                                <p class="text-sm text-neutral-600">Showcase proyek Internet of Things siswa</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-[#055d97] text-white rounded-lg px-3 py-2 text-center min-w-[60px]">
                                <div class="text-sm font-medium">OKT</div>
                                <div class="text-lg font-bold">28</div>
                            </div>
                            <div>
                                <h4 class="font-semibold">Sertifikasi Cisco</h4>
                                <p class="text-sm text-neutral-600">Ujian sertifikasi CCNA untuk siswa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prestasi & Penghargaan Layout -->
    <section class="py-12 sm:py-16 md:py-20 sm:px-6 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-bold text-[#fe914e] mb-3">Prestasi Terbaru
                </h2>
                <p class="text-sm sm:text-base md:text-lg text-white">Pencapaian membanggakan siswa-siswi SMK Telekomunikasi
                    Telesandi Bekasi</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                @foreach ($achievements as $prestasi)
                    <div class="text-center hover:scale-105 transition duration-300">
                        <div
                            class="bg-[#fe914e] text-white rounded-full w-16 h-16 sm:w-20 sm:h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806
                                             3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806
                                             3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946
                                             3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946
                                             3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806
                                             3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806
                                             3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946
                                             3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946
                                             3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <h3 class="text-base sm:text-lg md:text-xl text-white font-heading font-semibold mb-2">
                            {{ $prestasi['title'] }}
                        </h3>
                        <p class="text-xs sm:text-sm md:text-base text-[#fe914e]">
                            {{ $prestasi['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
