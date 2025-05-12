<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'مدیریت' }}</title>

    <!-- Tailwind (اگه با Vite یا CDN هست اینو عوض کن) -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    @livewireStyles

    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow p-4">
        <h1 class="text-xl font-bold">{{ $header ?? 'پنل مدیریت' }}</h1>
    </header>

    <!-- Content -->
    <main class="p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow p-4 mt-10 text-center text-sm text-gray-500">
        © {{ date('Y') }} - Arealtime
    </footer>

    @livewireScripts
    @stack('scripts')
</body>
</html>
