<x-guest-layout>
    <div class="w-full max-w-md bg-white rounded-xl shadow-xl p-8 border border-slate-100">
        <h2 class="text-2xl font-bold text-center text-slate-800 mb-4">Recuperar Contraseña</h2>
        
        <p class="text-sm text-slate-600 mb-8 text-center">
            ¿Olvidaste tu contraseña para entrar a {{ config('app.name', 'QuickBase') }}? No hay problema. Escribe tu correo electrónico y te enviaremos un enlace para que elijas una nueva.
        </p>

        <!-- Mensaje de éxito cuando se envía el correo -->
        @if (session('status'))
            <div class="mb-4 p-4 bg-green-50 border-l-4 border-green-500 text-green-700 text-sm rounded">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf
            
            <div>
                <label for="email" class="block text-sm font-medium text-slate-700">Correo Electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none transition">
                Enviar enlace de recuperación
            </button>

            <div class="text-center mt-4">
                <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:text-indigo-500 font-medium">Volver al inicio de sesión</a>
            </div>
        </form>
    </div>
</x-guest-layout>