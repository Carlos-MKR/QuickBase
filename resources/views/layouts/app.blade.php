<!DOCTYPE html>
<html lang="es" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'QuickBase') }} - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-slate-100 text-slate-900 font-sans">

    <!-- Topbar Privada -->
    <nav class="bg-indigo-600 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center text-white text-xl font-bold">
                    <a href="/dashboard">
                        {{ config('app.name', 'QuickBase') }}
                    </a>
                </div>
                <!-- Menú de Usuario -->
                <div class="flex items-center space-x-6">
                    <a href="{{ route('profile.edit') }}"
                        class="text-indigo-100 hover:text-white font-medium transition">
                        {{ Auth::user()->name }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="text-sm bg-indigo-700 text-white px-3 py-1.5 rounded hover:bg-indigo-800 transition shadow-sm">
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Encabezado de Página -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Contenido Principal -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>

    @livewireScripts
</body>

</html>
