<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            Punto de Seguridad
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 border border-slate-100">
            <h2 class="text-2xl font-bold text-center text-red-600 mb-4">Acción Restringida</h2>
            
            <p class="text-sm text-slate-600 mb-8 text-center">
                Estás a punto de realizar una acción destructiva en {{ config('app.name', 'QuickBase') }}. Por tu seguridad, por favor confirma tu contraseña para continuar.
            </p>

            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm rounded">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
                @csrf
                
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700">Contraseña</label>
                    <input id="password" type="password" name="password" required autofocus class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                </div>

                <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 transition">
                    Confirmar y Continuar
                </button>
            </form>
        </div>
    </div>
</x-app-layout>