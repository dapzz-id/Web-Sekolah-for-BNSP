<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 sm:gap-10">
            
            <!-- Profil -->
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-[#fe914e] mb-4 sm:mb-6">
                    SMK Telekomunikasi Telesandi Bekasi
                </h3>
                <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-4">
                    Sekolah Menengah Kejuruan yang mengkhususkan diri dalam bidang telekomunikasi dan teknologi informasi, mencetak lulusan siap kerja dan berdaya saing tinggi.
                </p>
            </div>

            <!-- Menu -->
            <div>
                <h4 class="text-lg sm:text-xl font-bold mb-4">Menu</h4>
                <ul class="space-y-2 text-sm sm:text-base">
                    <li><button id="home-button" data-url="{{ route('home') }}" class="text-gray-300 hover:text-[#fe914e] transition-colors">Beranda</button></li>
                    <li><button id="about-button" data-url="{{ route('about') }}" class="text-gray-300 hover:text-[#fe914e] transition-colors">Tentang Kami</button></li>
                    <li><button id="activities-button" data-url="{{ route('activities') }}" class="text-gray-300 hover:text-[#fe914e] transition-colors">Kegiatan</button></li>
                    <li><button id="news-button" data-url="{{ route('news') }}" class="text-gray-300 hover:text-[#fe914e] transition-colors">Berita</button></li>
                    <li><button id="contact-button" data-url="{{ route('contact') }}" class="text-gray-300 hover:text-[#fe914e] transition-colors">Kontak</button></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div>
                <h4 class="text-lg sm:text-xl font-bold mb-4">Kontak</h4>
                <div class="space-y-1 text-gray-300 text-sm sm:text-base">
                    <p>Mekarsari Raya</p>
                    <p>Jl. KH. Mochammad - Mekarsari Tambun Selatan</p>
                    <p>Kab. Bekasi, Jawa Barat, 17510</p>
                    <p class="mt-6">Telp: <span class="font-semibold">+62 813-2525-0554</span></p>
                    <p>Email: <span class="font-semibold">telesandismk@gmail.com</span></p>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-700 mt-8 pt-6 text-center">
            <p class="text-gray-400 text-xs sm:text-sm md:text-base">
                &copy; {{ date('Y') }} SMK Telekomunikasi Telesandi Bekasi | Kadavi Raditya A - For BNSP
            </p>
        </div>
    </div>
</footer>
