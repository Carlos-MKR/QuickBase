<x-guest-layout>
    <div class="w-full max-w-md bg-white rounded-xl shadow-xl p-8 border border-slate-100">
        <h2 class="text-2xl font-bold text-center text-slate-800 mb-8">Elige tu nueva contraseña</h2>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}" class="space-y-6">
            @csrf

            <!-- Token oculto de seguridad -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div>
                <label for="email" class="block text-sm font-medium text-slate-700">Correo Electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus readonly class="mt-1 block w-full rounded-md border-slate-300 bg-slate-50 text-slate-500 shadow-sm sm:text-sm cursor-not-allowed">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-slate-700">Nueva Contraseña</label>
                <input id="password" type="password" name="password" required class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-slate-700">Confirmar Nueva Contraseña</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 transition">
                Restablecer Contraseña
            </button>
        </form>
    </div>
</x-guest-layout>