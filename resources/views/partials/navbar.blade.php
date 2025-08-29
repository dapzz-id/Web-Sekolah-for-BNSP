<nav class="bg-black/30 backdrop-blur-md shadow-lg sticky top-0 z-50 p-4 w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <div class="flex items-center space-x-3 flex-shrink-0 w-3/4 md:w-auto">
                <img src="{{ asset('img/ic_tels.webp') }}" alt="Logo SMK Telekomunikasi Telesandi Bekasi"
                    class="w-auto h-14 sm:h-16">

                <h1 class="text-base max-xl:hidden flex md:text-2xl font-medium ms-8 text-white tracking-wide truncate">
                    SMK Telekomunikasi Telesandi Bekasi
                </h1>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">
                <button id="home-button" data-url="{{ route('home') }}"
                    class="font-medium px-3 cursor-pointer py-2 rounded-md text-sm {{ request()->routeIs('home') ? 'text-white bg-[#fe914e] shadow-md hover:shadow-lg transition-all' : 'text-gray-200 hover:text-white transition-colors' }}">Beranda</button>

                <button id="about-button" data-url="{{ route('about') }}"
                    class="font-medium px-3 cursor-pointer py-2 rounded-md text-sm {{ request()->routeIs('about') ? 'text-white bg-[#fe914e] shadow-md hover:shadow-lg transition-all' : 'text-gray-200 hover:text-white transition-colors' }}">Tentang
                    Kami</button>

                <button id="activities-button" data-url="{{ route('activities') }}"
                    class="font-medium px-3 cursor-pointer py-2 rounded-md text-sm {{ request()->routeIs('activities') ? 'text-white bg-[#fe914e] shadow-md hover:shadow-lg transition-all' : 'text-gray-200 hover:text-white transition-colors' }}">Kegiatan</button>

                <button id="news-button" data-url="{{ route('news') }}"
                    class="font-medium px-3 cursor-pointer py-2 rounded-md text-sm {{ request()->routeIs('news') ? 'text-white bg-[#fe914e] shadow-md hover:shadow-lg transition-all' : 'text-gray-200 hover:text-white transition-colors' }}">Berita</button>

                <button id="contact-button" data-url="{{ route('contact') }}"
                    class="font-medium px-3 cursor-pointer py-2 rounded-md text-sm {{ request()->routeIs('contact') ? 'text-white bg-[#fe914e] shadow-md hover:shadow-lg transition-all' : 'text-gray-200 hover:text-white transition-colors' }}">Kontak</button>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button"
                    class="text-gray-200 hover:text-white focus:outline-none transition-transform transform">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="hidden md:hidden absolute top-full left-0 w-full bg-black backdrop-blur-3xl shadow-2xl z-40">
        <div class="px-2 pt-2 pb-3 space-y-2 sm:px-3">
            <button id="home-button" 
                data-url="{{ route('home') }}"
                class="w-full block px-4 py-2 rounded-lg text-base font-medium {{ request()->routeIs('home') ? 'text-white bg-[#fe914e] shadow-md hover:shadow-lg transition-all' : 'text-gray-200 hover:text-white transition-colors' }}">Beranda</button>

            <button id="about-button" data-url="{{ route('about') }}"
                class="w-full block px-4 py-2 rounded-lg text-base font-medium {{ request()->routeIs('about') ? 'text-white bg-[#fe914e] shadow-md hover:shadow-lg transition-all' : 'text-gray-200 hover:text-white transition-colors' }}">Tentang
                Kami</button>

            <button id="activities-button" data-url="{{ route('activities') }}"
                class="w-full block px-4 py-2 rounded-lg text-base font-medium {{ request()->routeIs('activities') ? 'text-white bg-[#fe914e] shadow-md hover:shadow-lg transition-all' : 'text-gray-200 hover:text-white transition-colors' }}">Kegiatan</button>

            <button id="news-button" data-url="{{ route('news') }}"
                class="w-full block px-4 py-2 rounded-lg text-base font-medium {{ request()->routeIs('news') ? 'text-white bg-[#fe914e] shadow-md hover:shadow-lg transition-all' : 'text-gray-200 hover:text-white transition-colors' }}">Berita</button>

            <button id="contact-button" data-url="{{ route('contact') }}"
                class="block w-full px-4 py-2 rounded-lg text-base font-medium {{ request()->routeIs('contact') ? 'text-white bg-[#fe914e] shadow-md hover:shadow-lg transition-all' : 'text-gray-200 hover:text-white transition-colors' }}">Kontak</button>
        </div>
    </div>
</nav>
