<x-guest-layout>
    <x-authentication-card>
        <div class="w-[95%] m-auto text-center mb-7 max-md:mt-3">
            <h5 class="text-lg font-normal">Únete a nosotros y organiza tu lista de pendientes de una mejor manera</h5>
        </div>
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 ">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="grid md:max-w-full grid-flow-row gap-y-6">
            @csrf

            <div class="">
                <x-input id="email" class="block mt-1 w-full bg-white-i" type="email" name="email"
                    :value="old('email')" placeholder="ejemplo@dominio.com" required autofocus />
            </div>

            <div class="">
                <x-input id="password" class="block mt-1 w-full bg-white-i" type="password" name="password" required
                    placeholder="Clave de seguridad" autocomplete="current-password" />
            </div>

            <div class="block">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordar credenciales') }}</span>
                </label>
            </div>

            <div class="flex flex-col items-center justify-center mt-4 gap-10">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}
                <x-button class="w-full text-center">
                    {{ __('Iniciar ahora') }}
                </x-button>
                <a href="{{ route('register') }}" class="text-xs font-medium justify-self-center text-gray-600">¿No tienes cuenta? Crea
                    una</a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
