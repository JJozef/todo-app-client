<x-guest-layout>
    <x-authentication-r-card>
        <div class="mb-7 max-md:mt-3">
            <h5 class="text-lg font-normal">Únete a nosotros y mantén tus tareas bajo control</h5>
            <p class="text-sm mb-8 text-gray-500">Rellena los campos solicitados para crear tu cuenta y utiliza nuestra
                aplicación.</p>
        </div>
        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="grid grid-cols-form-inputs gap-6 flex-form-inputs">
            @csrf

            <div>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                    placeholder="Nombre de usuario" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="">
                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                    placeholder="ejemplo@dominio.com" :value="old('email')" required />
            </div>

            <div class="">
                <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                    placeholder="Clave de seguridad" required autocomplete="new-password" />
            </div>

            <div class="">
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" placeholder="Confirmación de clave" required
                    autocomplete="new-password" />
            </div>

            <p class="grid-cols-p text-sm text-gray-500">Al registrarse, esta permitiendo el uso de sus datos
                proporcionados para que sean usados en la aplicación</p>
            {{-- 
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif --}}

            <x-button class="grid grid-cols-p">
                {{ __('Terminar registro') }}
            </x-button>
            <a href="{{ route('login') }}" class="text-xs font-medium text-gray-600">¿Ya tienes cuenta? Ingresa a tu
                cuenta</a>
        </form>
    </x-authentication-r-card>
</x-guest-layout>
