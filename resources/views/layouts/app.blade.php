<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('page-title', '') | SMK Telekomunikasi Telesandi Bekasi</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/ic_tels.webp') }}">

    <!-- Tailwind (via Vite) -->
    @vite('resources/css/app.css')

    <!-- Axios -->
    @vite('resources/js/app.js')

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Scripts -->
    @stack('scripts')
    <script src="{{ asset('js/navbar.js') }}" defer></script>
</head>
<body class="font-sans bg-gradient-to-br from-gray-900 via-[#055d97] to-gray-800 text-gray-800 antialiased leading-relaxed">
    <!-- Navigasi Layout -->
    @include('partials.navbar')
    
    <!-- Konten Utama -->
    <div class="min-h-screen flex flex-col">
        <main class="flex-1">
            @yield('content')
        </main>
    </div>

    <!-- Footer Layout -->
    @include('partials.footer')
</body>
</html>
