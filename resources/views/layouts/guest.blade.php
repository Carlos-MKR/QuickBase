<!DOCTYPE html>
<html lang="es" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'QuickBase') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-slate-50 text-slate-900 flex flex-col min-h-screen">
    
    <!-- Navbar Pública -->
    <nav class="w-full bg-white shadow-sm py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-indigo-600">{{ config('app.name', 'QuickBase') }}</a>
            <div class="space-x-4">
                <a href="{{ route('login') }}" class="text-slate-600 hover:text-indigo-600 font-medium">Entrar</a>
                <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 font-medium transition">Registrarse</a>
            </div>
        </div>
    </nav>

    <!-- Contenido Dinámico -->
    <main class="flex-grow flex items-center justify-center p-6">
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>