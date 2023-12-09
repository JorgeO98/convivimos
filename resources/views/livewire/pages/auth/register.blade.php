<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    /* public string $name = ''; */
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {

        $validated = $this->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', /* 'unique:'.User::class */],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::where('email', $this->email)->first();

        if ($user && $user->password == '') {

            $validated['password'] = Hash::make($validated['password']);

            $id = $user->id;

            $user = User::find($id);

            $user->password = $validated['password'];
            
            $user->save();

            Auth::login($user);

            $this->redirect(RouteServiceProvider::HOME, navigate: true);
            
        }else if(!$user){
            
            session()->flash('status', __('El usuario no se encuentra registrado, por favor consulte al administrador.'));  
            
        }
    }
}; ?>

<div>
    <form wire:submit="register">
        <!-- Name -->
        {{-- <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input wire:model="name" id="name" class="block w-full mt-1" type="text" name="name" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        --}}
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input wire:model="email" id="email" class="block w-full mt-1" type="email" name="email" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input wire:model="password" id="password" class="block w-full mt-1" type="password" name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block w-full mt-1"
                type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        @if (session('status') !== null)
        <div
            class="flex items-center justify-center m-1 font-medium text-red-100 bg-red-700 border border-red-700 rounded-md ">
            <div slot="avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-5 h-5 mx-2 feather feather-alert-octagon">
                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                    <line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                </svg>
            </div>
            <div class="flex-initial max-w-full font-normal text-md">
                {{ session('status') }}
            </div>
        </div>
        @endif

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm rounded-md text-cyan-400 dark:text-gray-400 hover:text-cyan-400 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}" wire:navigate>
                {{ __('¿Ya estás registrado?') }}
            </a>

            <x-primary-button
                class="text-white ms-4 bg-gradient-to-r from-cyan-400 to-cyan-600 focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
        <p class="mt-5 text-xs text-center text-gray-600">&copy; 2023</p>
    </form>
</div>