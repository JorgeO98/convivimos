<div>
    <div class="min-h-screen flex items-center justify-center mb-0">
        <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-lg">
            <div class="flex justify-center mb-1">
                <img src="{{asset('/img/logo.png')}}" alt="Logo" class="w-50 h-40">
            </div>
            <h1 class="text-2xl font-semibold text-center text-gray-500 mt-3 mb-6">Iniciar sesión</h1>
            <form wire:submit.prevent="startSession">
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm text-gray-600">Correo electrónico</label>
                    <input type="email" id="email" name="email" wire:model="email"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                        required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm text-gray-600">Contraseña</label>
                    <input type="password" id="password" name="password" wire:model="password"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                        required>
                    <a href="#" class="block text-right text-xs text-cyan-600 mt-2">¿Olvidaste tu contraseña?</a>
                </div>
                <button type="submit"
                    class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-4 mb-6">Ingresar</button>
            </form>
            <div class="text-center">
                <p class="text-sm">¿No tienes contraseña? <a href="#" class="text-cyan-600">Regístrate ahora</a></p>
            </div>
            <p class="text-xs text-gray-600 text-center mt-5">&copy; 2023</p>
        </div>
    </div>
</div>