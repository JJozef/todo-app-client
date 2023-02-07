<x-action-section>
    <x-slot name="title">
        {{ __('Borrar cuenta') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Elimina tu cuenta de forma permanente.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600 card-action-section-text">
            {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se borrarán de forma permanente. Antes de hacerlo, asegúrese de guardar cualquier información que desee conservar, ya que una vez eliminada la cuenta, no será posible recuperarla') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Borrar cuenta') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Confirmación') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Confirme eliminación de cuenta ingresando su contraseña. Los recursos y datos serán eliminados permanentemente') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Contraseña') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Borrar cuenta') }}
                </x-jet-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>
