@extends('layouts.app')

<!-- Untuk memberikan judul halaman -->
@section('page-title', 'Beranda')

@section('content')
    <!-- Hero Layout -->
    <section
        class="max-h-screen h-screen flex items-center relative bg-transparent sm:-top-1 md:-top-5 lg:-top-10 text-white overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Information - Left -->
                <div>
                    <div
                        class="inline-flex items-center px-3 sm:px-4 py-1.5 sm:py-2 bg-[#fe914e]/20 rounded-full text-xs sm:text-sm font-medium mb-4 sm:mb-6 mt-5">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1.5 sm:mr-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        We are not the best, but we want to be excellent
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 leading-tight">
                        SMK TELEKOMUNIKASI <span class="text-[#fe914e]">TELESANDI</span> BEKASI
                    </h1>

                    <p class="text-base sm:text-lg md:text-xl text-gray-300 mb-6 sm:mb-8 leading-relaxed">
                        SMK Telekomunikasi Telesandi Bekasi siap mencetak lulusan yang kompeten di bidang Teknologi
                        Informasi dan Komunikasi.
                    </p>

                    <button id="contact-button"
                        class="border-2 border-white text-white hover:bg-white hover:text-gray-900 px-5 sm:px-7 md:px-8 py-2.5 sm:py-3 md:py-4 rounded-lg font-semibold text-sm sm:text-base md:text-lg transition-all"
                        data-url="{{ route('contact') }}">
                        Hubungi Kami
                    </button>
                </div>
                
                <!-- Statistik - Right -->
                <img src="{{ asset('img/ic_poster_beranda.webp') }}" class="w-auto max-sm:mb-12 max-sm:h-50 max-md:h-60 md:h-96 lg:h-90 mx-auto" alt="">
            </div>
        </div>
    </section>

    <!-- Keahlian Program Layout -->
    <section class="py-16 sm:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-3 sm:mb-4">
                    Program Keahlian Unggulan
                </h2>
                <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Temukan program keahlian terdepan yang dirancang untuk mempersiapkan Anda menghadapi era digital
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach ($programs as $program)
                    <div
                        class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden flex flex-col h-full">
                        <div class="p-5 sm:p-6 md:p-8 flex flex-col flex-1">
                            <img src="{{ asset('img/' . $program['icon']) }}" alt="{{ $program['title'] }} Icon"
                                class="w-12 sm:w-14 md:w-16 h-auto mt-3 mb-6 sm:mt-4 sm:mb-8 mx-auto group-hover:scale-110 transition-transform">

                            <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">
                                {{ $program['title'] }}</h3>
                            <p class="text-gray-600 mb-5 sm:mb-6 leading-relaxed text-sm sm:text-base flex-1">
                                {{ $program['desc'] }}</p>

                            <button id="about-button"
                                class="inline-flex items-center text-[#fe914e] font-semibold hover:text-orange-600 cursor-pointer transition-colors text-sm sm:text-base mt-auto"
                                data-url="{{ route('about') }}">
                                Pelajari Lebih Lanjut
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- News Layout -->
    <section class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-3 sm:mb-4">Berita & Prestasi Terbaru
                </h2>
                <p class="text-base sm:text-lg md:text-xl text-gray-600">
                    Informasi terkini dan pencapaian membanggakan dari SMK Telekomunikasi Telesandi Bekasi
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Artikel berita 1 -->
                <article
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-1 overflow-hidden border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('img/ic_poster_news.webp') }}" alt="Siswa praktikum telekomunikasi"
                            class="w-full h-48 sm:h-52 md:h-60 object-cover group-hover:scale-105 transition-transform">
                        <div
                            class="absolute top-3 left-3 sm:top-4 sm:left-4 bg-[#fe914e] text-white px-2.5 sm:px-3 py-0.5 sm:py-1 rounded-full text-xs sm:text-sm font-medium">
                            Prestasi
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 md:p-8">
                        <div class="text-xs sm:text-sm text-gray-500 font-medium mb-2 sm:mb-3">06 Agustus 2025</div>
                        <h3
                            class="text-base sm:text-lg md:text-xl font-bold text-gray-900 mb-3 sm:mb-4 group-hover:text-orange-600 transition-colors">
                            Juara 6 Lomba Kompetensi Siswa ITSSB
                        </h3>
                        <p class="text-gray-600 mb-5 sm:mb-6 leading-relaxed text-sm sm:text-base">
                            Tim siswa SMK Telekomunikasi Telesandi Bekasi meraih juara keenam dalam kompetisi ITSSB di
                            tingkat nasional dengan solusi inovatif...
                        </p>
                        <button id="news-button" data-url="{{ route('news') }}"
                            class="inline-flex items-center cursor-pointer align-middle text-[#fe914e] font-semibold hover:text-orange-600 transition-colors text-sm sm:text-base">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
