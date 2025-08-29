@extends('layouts.app')
@section('page-title', 'Tentang Kami')
@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush

@section('content')
    <!-- Hero Layout -->
    <section class="bg-transparent text-white py-10 sm:py-16 px-6 sm:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-2xl sm:text-3xl md:text-5xl font-heading font-bold mb-4 sm:mb-6 leading-tight">
                CONTACT SMK TELEKOMUNIKASI <span class="text-[#fe914e]">TELESANDI</span> BEKASI
            </h1>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl max-w-3xl mx-auto leading-relaxed">
                Kami siap membantu Anda dengan informasi lebih lanjut tentang SMK Telekomunikasi Telesandi Bekasi.
            </p>
        </div>
    </section>

    <!-- Contact Form and Info Layout -->
    <section class="py-8 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
                    <h2 class="text-xl sm:text-2xl font-heading font-bold text-neutral-700 mb-6">Kirim Pesan</h2>
                    <form id="contactForm" class="space-y-6" data-url="{{ route('contact.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstName" class="block text-sm sm:text-base font-medium text-neutral-700 mb-2">Nama Depan</label>
                                <input type="text" id="firstName" name="firstName" class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-[#fe914e] focus:border-transparent transition-colors text-sm sm:text-base" placeholder="Masukkan nama depan">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm sm:text-base font-medium text-neutral-700 mb-2">Nama Belakang</label>
                                <input type="text" id="lastName" name="lastName" class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-[#fe914e] focus:border-transparent transition-colors text-sm sm:text-base" placeholder="Masukkan nama belakang">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm sm:text-base font-medium text-neutral-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-[#fe914e] focus:border-transparent transition-colors text-sm sm:text-base" placeholder="nama@email.com">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm sm:text-base font-medium text-neutral-700 mb-2">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-[#fe914e] focus:border-transparent transition-colors text-sm sm:text-base" placeholder="08xx-xxxx-xxxx">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm sm:text-base font-medium text-neutral-700 mb-2">Subjek</label>
                            <select id="subject" name="subject" class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-[#fe914e] focus:border-transparent transition-colors text-sm sm:text-base">
                                <option value="">Pilih subjek</option>
                                <option value="informasi-umum">Informasi Umum</option>
                                <option value="pendaftaran">Pendaftaran Siswa Baru</option>
                                <option value="kegiatan">Kegiatan Sekolah</option>
                                <option value="fasilitas">Fasilitas Sekolah</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-sm sm:text-base font-medium text-neutral-700 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-[#fe914e] focus:border-transparent transition-colors resize-none text-sm sm:text-base" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-[#fe914e] text-white py-3 px-6 rounded-lg font-medium text-sm sm:text-base hover:bg-secondary transition-colors">
                            Kirim Pesan
                        </button>
                    </form>

                    <!-- Tempat notifikasi -->
                    <div id="responseMessage"></div>
                </div>

                <!-- Contact Information -->
                <div class="space-y-10">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-heading font-bold text-[#fe914e] mb-6">Informasi Kontak</h2>
                        <div class="space-y-6">
                            <!-- Alamat -->
                            <div class="flex items-start gap-4">
                                <div class="bg-[#fe914e] text-white rounded-lg p-3 sm:p-4 flex-shrink-0">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="text-white">
                                    <h3 class="font-heading font-semibold text-base sm:text-lg mb-1">Alamat</h3>
                                    <p class="text-sm sm:text-base leading-relaxed">
                                        Mekarsari Raya<br>
                                        Jl. KH. Mochammad - Mekarsari<br>
                                        Tambun Selatan <br>
                                        Kab. Bekasi, Jawa Barat, 17510
                                    </p>
                                </div>
                            </div>
                            <!-- Telepon -->
                            <div class="flex items-start gap-4 text-white">
                                <div class="bg-[#fe914e] text-white rounded-lg p-3 sm:p-4 flex-shrink-0">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div class="text-white">
                                    <h3 class="font-heading font-semibold text-base sm:text-lg mb-1">Telepon</h3>
                                    <p class="text-sm sm:text-base text-white">
                                        <a href="tel:+6281325250554" class="hover:text-[#fe914e] transition-colors">+62 813-2525-0554</a>
                                    </p>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="flex items-start gap-4">
                                <div class="bg-[#fe914e] text-white rounded-lg p-3 sm:p-4 flex-shrink-0">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="text-white">
                                    <h3 class="font-heading font-semibold text-base sm:text-lg mb-1">Email</h3>
                                    <p class="text-sm sm:text-base text-white">
                                        <a href="mailto:info@smanusantara.sch.id" class="hover:text-[#fe914e] transition-colors">telesandismk@gmail.com</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Jam Operasional -->
                            <div class="flex items-start gap-4">
                                <div class="bg-[#fe914e] text-white rounded-lg p-3 sm:p-4 flex-shrink-0">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="text-white">
                                    <h3 class="font-heading font-semibold text-base sm:text-lg mb-1">Jam Operasional</h3>
                                    <p class="text-sm sm:text-base leading-relaxed text-white">
                                        Senin - Jumat: 07:00 - 16:00<br>
                                        Sabtu: 07:00 - 12:00<br>
                                        Minggu: Tutup
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Layout -->
    <section class="py-12 sm:py-16 bg-neutral-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-neutral-700 mb-3 sm:mb-4">
                    Lokasi Sekolah
                </h2>
                <p class="text-sm sm:text-base md:text-lg text-neutral-600">
                    Temukan kami di lokasi yang strategis dan mudah dijangkau
                </p>
            </div>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Google Maps -->
                <iframe 
                    class="w-full h-72 sm:h-96 lg:h-[500px] rounded-none"
                    frameborder="0"
                    src="https://www.google.com/maps/embed?pb=!3m2!1sen!2sid!4v1697099507979!5m2!1sen!2sid!6m8!1m7!1sCAoSLEFGMVFpcE5BVmtFd1BnYW95MkRlOHM3MVQ4WHY4eUhoeEFDZmFwclJtdUxl!2m2!1d-6.2530756520459!2d107.06097721966!3f236.41!4f-0.3400000000000034!5f0.7820865974627469"
                    referrerpolicy="no-referrer-when-downgrade" 
                    loading="lazy" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>
@endsection
