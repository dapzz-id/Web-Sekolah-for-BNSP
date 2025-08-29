@extends('layouts.app')
@section('page-title', 'Tentang Kami')

@section('content')
    <!-- Hero Layout -->
    <section class="bg-transparent text-white py-12 sm:py-16 px-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-2xl sm:text-3xl md:text-5xl font-heading font-bold mb-4 sm:mb-6 leading-tight">
                    TENTANG SMK TELEKOMUNIKASI <span class="text-[#fe914e]">TELESANDI</span> BEKASI
                </h1>
                <p class="text-base sm:text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                    Mengenal lebih dekat sekolah kejuruan yang mencetak siswa-siswi berprestasi di bidang Teknologi
                    Informasi dan Komunikasi.
                </p>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Layout -->
    <section class="bg-transparent py-12 sm:py-16 px-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-15">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-22 items-center">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-heading font-bold text-white mb-6">Visi & Misi Kami</h2>
                    <div class="mb-8">
                        <h3 class="text-lg sm:text-xl font-heading font-semibold text-[#fe914e] mb-3">Visi</h3>
                        <p class="text-white leading-relaxed">
                            Menjadi sekolah yang bermutu dan unggul dalam ilmu pengetahuan dan teknologi informasi
                            berdasarkan iman dan taqwa, berkarakter bangsa, serta berbudaya lingkungan.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg sm:text-xl font-heading font-semibold text-[#fe914e] mb-3">Misi</h3>
                        <ul class="space-y-2 text-white text-sm sm:text-base">
                            <li class="flex items-start"><span class="text-[#fe914e] mr-2">•</span> Menyelenggarakan
                                pendidikan di bidang teknologi telekomunikasi dan informasi</li>
                            <li class="flex items-start"><span class="text-[#fe914e] mr-2">•</span> Mengembangkan kurikulum
                                yang mendukung kebutuhan pengguna lulusan</li>
                            <li class="flex items-start"><span class="text-[#fe914e] mr-2">•</span> Menciptakan suasana
                                akademis yang dilandasi iman dan taqwa</li>
                            <li class="flex items-start"><span class="text-[#fe914e] mr-2">•</span> Menghasilkan lulusan
                                yang berkarakter bangsa dan berbudaya lingkungan</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('img/ic_gedung_tels.webp') }}" alt="Gedung SMK Telekomunikasi Telesandi Bekasi"
                        class="w-full h-64 sm:h-80 md:h-[400px] object-cover rounded-lg shadow-lg hover:scale-105 duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah Layout -->
    <section class="py-12 sm:py-16 bg-neutral-50 px-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-neutral-700 mb-3">Sejarah Sekolah</h2>
                <p class="text-base sm:text-lg text-neutral-600 max-w-3xl mx-auto">
                    Perjalanan SMK Telekomunikasi Telesandi Bekasi dalam mencetak lulusan yang berkualitas
                </p>
            </div>
            <div class="space-y-8">
                @foreach ($histories as $item)
                    <div class="flex flex-col md:flex-row items-center gap-6 sm:gap-8">
                        <div class="md:w-1/4 flex-shrink-0">
                            <div
                                class="bg-{{ $item['color'] }} text-white rounded-full w-16 h-16 sm:w-20 sm:h-20 flex items-center justify-center mx-auto">
                                <span
                                    class="text-lg sm:text-xl md:text-2xl font-heading font-bold">{{ $item['year'] }}</span>
                            </div>
                        </div>
                        <div class="md:w-3/4 text-center md:text-left">
                            <h3 class="text-lg sm:text-xl font-heading font-semibold mb-2">{{ $item['title'] }}</h3>
                            <p class="text-neutral-600 text-sm sm:text-base leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Profil Tim Pengajar -->
    <section class="py-12 sm:py-16 px-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#fe914e] mb-3">Tim Pengajar</h2>
                <p class="text-base sm:text-lg text-white">Tenaga pendidik profesional dengan keahlian di bidang
                    telekomunikasi dan teknologi</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach ($staff as $member)
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full text-center 
                            transform transition duration-300 hover:scale-105">
                        <img src="{{ $member['img'] }}" alt="{{ $member['name'] . ' - ' . $member['role'] }}"
                            class="w-auto h-60 sm:h-76 object-cover">
                        <div class="p-4 sm:p-6 flex flex-col flex-1">
                            <h3 class="text-base sm:text-lg font-heading font-semibold mb-1">{{ $member['name'] }}</h3>
                            <p class="text-[#055d97] text-sm sm:text-base font-medium mb-2">{{ $member['role'] }}</p>
                            <p class="text-xs sm:text-sm text-neutral-600 flex-1">{{ $member['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
