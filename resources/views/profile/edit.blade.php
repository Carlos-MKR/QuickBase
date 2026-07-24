<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            Configuración de Usuario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Tarjeta 1: Información Personal -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg border border-slate-100">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-bold text-slate-900">Perfil Público</h2>
                        <p class="mt-1 text-sm text-slate-600">Actualiza el nombre de tu cuenta y dirección de correo. Más adelante podrás añadir tu avatar personalizado aquí.</p>
                    </header>

                    <!-- El formulario apunta a la ruta de Fortify enviando un método PUT -->
                    <form method="POST" action="{{ route('user-profile-information.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700">Nombre de Usuario</label>
                            <input id="name" name="name" type="text" value="{{ old('name', auth()->user()->name) }}" required autofocus class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('name') <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700">Correo Electrónico</label>
                            <input id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}" required class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('email') <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition text-sm font-medium shadow-sm">
                                Guardar Cambios
                            </button>

                            <!-- Mensaje de éxito nativo de Fortify -->
                            @if (session('status') === 'profile-information-updated')
                                <p class="text-sm text-green-600 font-medium">Actualizado correctamente.</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tarjeta 2: Cambiar Contraseña -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg border border-slate-100">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-bold text-slate-900">Seguridad de la Cuenta</h2>
                        <p class="mt-1 text-sm text-slate-600">Asegúrate de usar una contraseña larga y aleatoria para mantener tu cuenta segura.</p>
                    </header>

                    <form method="POST" action="{{ route('user-password.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="current_password" class="block text-sm font-medium text-slate-700">Contraseña Actual</label>
                            <input id="current_password" name="current_password" type="password" required class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('current_password', 'updatePassword') <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-slate-700">Nueva Contraseña</label>
                            <input id="password" name="password" type="password" required class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('password', 'updatePassword') <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-slate-700">Confirmar Nueva Contraseña</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="bg-slate-800 text-white px-4 py-2 rounded-md hover:bg-slate-900 transition text-sm font-medium shadow-sm">
                                Actualizar Contraseña
                            </button>

                            @if (session('status') === 'password-updated')
                                <p class="text-sm text-green-600 font-medium">Contraseña modificada.</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>


            <!-- Tarjeta 3: Eliminar Cuenta -->
            <!-- Tarjeta 3: Eliminar Cuenta -->
            <div class="p-4 sm:p-8 bg-red-50 shadow sm:rounded-lg border border-red-100">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-bold text-red-700">Eliminar Cuenta</h2>
                        <p class="mt-1 text-sm text-red-600">
                            Una vez que tu cuenta sea eliminada, todos sus recursos y datos se borrarán permanentemente. Antes de proceder, por favor ingresa tu contraseña para confirmar que deseas eliminar tu cuenta.
                        </p>
                    </header>

                    <form method="POST" action="{{ route('profile.destroy') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('DELETE')

                        <div>
                            <label for="password_delete" class="block text-sm font-medium text-red-700">Contraseña</label>
                            <input id="password_delete" name="password" type="password" required class="mt-1 block w-full md:w-2/3 rounded-md border-red-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm" placeholder="Tu contraseña">
                            
                            <!-- Mensaje de error si la contraseña está mal -->
                            @error('password') 
                                <span class="text-sm text-red-600 mt-2 block font-medium">{{ $message }}</span> 
                            @enderror
                        </div>

                        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition text-sm font-medium shadow-sm">
                            Eliminar Cuenta Permanentemente
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>