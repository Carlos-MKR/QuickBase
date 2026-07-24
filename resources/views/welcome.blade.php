<x-guest-layout>
    <div class="relative w-full overflow-hidden flex flex-col items-center justify-center min-h-[80vh]">
        
        <!-- Formas abstractas flotantes (Fondo Moderno) -->
        <div class="absolute inset-0 -z-10 flex justify-center items-center pointer-events-none">
            <!-- Esfera Azul -->
            <div class="absolute top-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <!-- Esfera Índigo -->
            <div class="absolute top-10 right-1/4 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob" style="animation-delay: 2s;"></div>
            <!-- Esfera Púrpura -->
            <div class="absolute -bottom-8 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob" style="animation-delay: 4s;"></div>
        </div>

        <div class="text-center w-full max-w-4xl mx-auto py-12 px-4 sm:px-6">
            
            <!-- Badge / Etiqueta Superior -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-50 border border-indigo-100 text-indigo-600 text-sm font-semibold mb-8 shadow-sm">
                <span class="relative flex h-2 w-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-600"></span>
                </span>
                {{ config('app.name', 'QuickBase')}} v1.0
            </div>

            <!-- Título Principal -->
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-6">
                Construye rápido.<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
                    Escala seguro.
                </span>
            </h1>
            
            <!-- Subtítulo -->
            <p class="text-xl text-slate-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                Tu arquitectura base definitiva. Configurado con Laravel 13, Fortify, Tailwind CSS v4 y Docker. Listo para llevar tus ideas a producción.
            </p>
            
            <!-- Botones de Acción -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mb-20">
                <a href="{{ route('register') }}" class="w-full sm:w-auto px-8 py-3.5 bg-indigo-600 text-white rounded-xl font-semibold hover:bg-indigo-700 shadow-lg shadow-indigo-200 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center gap-2">
                    Comenzar ahora
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
                <a href="{{ route('login') }}" class="w-full sm:w-auto px-8 py-3.5 bg-white text-slate-700 border border-slate-200 rounded-xl font-semibold hover:bg-slate-50 hover:border-slate-300 transition-all duration-200">
                    Ya tengo cuenta
                </a>
            </div>

            <!-- Separador y Logos SVG -->
            <div class="pt-12 border-t border-slate-200/60 mt-10">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-10 text-center">Potenciado por el stack</p>
                
                <div class="flex flex-wrap justify-center items-center gap-x-12 gap-y-10 opacity-70 hover:opacity-100 transition-opacity duration-500">
                    
                    <!-- Laravel SVG -->
                    <div class="flex items-center gap-2.5 grayscale hover:grayscale-0 hover:scale-105 transition-all duration-300 cursor-default">
                        <x-svg.laravel class="h-8 w-auto" />
                        <span class="font-bold text-slate-700">Laravel</span>
                    </div>

                    <!-- Tailwind SVG -->
                    <div class="flex items-center gap-2.5 grayscale hover:grayscale-0 hover:scale-105 transition-all duration-300 cursor-default">
                        <x-svg.tailwind class="h-7 w-auto" />
                        <span class="font-bold text-slate-700">Tailwind</span>
                    </div>

                    <!-- Docker SVG -->
                    <div class="flex items-center gap-2.5 grayscale hover:grayscale-0 hover:scale-105 transition-all duration-300 cursor-default">
                        <x-svg.docker class="h-9 w-auto" />
                        <span class="font-bold text-slate-700">Docker Sail</span>
                    </div>

                    <!-- Vite SVG -->
                    <div class="flex items-center gap-2.5 grayscale hover:grayscale-0 hover:scale-105 transition-all duration-300 cursor-default">
                        <x-svg.vite class="h-6 w-auto" />
                        <span class="font-bold text-slate-700">Vite</span>
                    </div>

                    <!-- Fortify SVG -->
                    <div class="flex items-center grayscale hover:grayscale-0 hover:scale-105 transition-all duration-300 cursor-default">
                        <x-svg.fortify class="h-4.5 w-auto" />
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
    </style>
</x-guest-layout>