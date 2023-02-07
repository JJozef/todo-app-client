<div class="container-nav overflow-x-hidden scroll-animation">
    <article
        class="w-full container-task h-16 transition-colors duration-400 max-md:relative max-md:p-0" title="Inicio - Cantidad: [{{ $totalTasks }}]">
        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            <div class="flex items-center gap-4 max-[950px]:gap-2">
                <i class="btn-menu w-[18px] fa-solid fa-house"></i>
                <h2 class="text-base font-medium max-[768px]:hidden">Inicio</h2>
            </div>
            <div class="flex items-center gap-1 max-[768px]:hidden text-center">
                <span
                    class="flex justify-center items-center h-6 w-6 text-black bg-gray-200 rounded-md text-sm font-semibold darkmode-ignore-color">
                    <span class="w-[18px]">{{ $totalTasks }}</span>
                </span>
            </div>
        </x-nav-link>
    </article>
    @foreach ($categories as $category)
        <article
            class="w-full container-task h-16 px-3 rounded-xl max-md:rounded-bl-none max-md:rounded-tl-none max-md:rounded-tr-[3px] max-md:rounded-br-[3px] hover:bg-gray-100 transition-colors duration-400 box-menu-animation max-md:relative max-md:p-0
            @if ($selectedCategoryId === $category->id) box-menu-animation-active @endif"
            wire:click="filterTasks({{ $category->id }})"
            title="{{ $category->name }} - Cantidad: [{{ $category->tasks_count }}]">
            <button class="w-full h-full items-center max-md:w-[66px] max-md:flex max-md:justify-center">
                <div class="flex justify-between">
                    <div class="flex items-center gap-4 max-[950px]:gap-2">
                        <i class="{{ $category->icon->class }}" style="color: {{ $category->color }}"></i>
                        <h2 class="text-base font-medium max-[768px]:hidden">{{ $category->name }}</h2>
                    </div>
                    <div class="flex items-center gap-1 max-[768px]:hidden darkmode-ignore-color">
                        <span
                            class="flex justify-center items-center h-6 w-6 text-black bg-gray-200 rounded-md text-sm font-semibold">
                            {{ $category->tasks_count }}
                        </span>
                    </div>
                </div>
            </button>
        </article>
    @endforeach
    <article
        class="w-full container-task h-16 px-3 rounded-xl max-md:rounded-bl-none max-md:rounded-tl-none max-md:rounded-tr-[3px] max-md:rounded-br-[3px] hover:bg-gray-100 transition-colors duration-400 box-menu-animation max-md:relative max-md:p-0">
        <button class="w-full h-full items-center max-md:w-[66px] max-md:flex max-md:justify-center"
            wire:click="$set('opencatcreate', true)">
            <div class="flex justify-between">
                <div class="flex items-center gap-4 max-[950px]:gap-2">
                    <i class="btn-menu w-[18px] max-md:w-[25px] fa-solid fa-plus"></i>
                    <h2 class="text-base font-medium max-[768px]:hidden">Crear nueva lista</h2>
                </div>
                <div class="flex items-center gap-1 max-[768px]:hidden darkmode-ignore-color">
                    <span class="flex justify-center items-center h-6 w-6 bg-gray-200 rounded-md text-sm font-semibold">
                        <svg class="w-[18px] width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm5 2h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4h-4V5zM3 20a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6zm2-5h4v4H5v-4zm8 5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6zm2-5h4v4h-4v-4z">
                            </path>
                        </svg>
                    </span>
                    <span
                        class="flex justify-center items-center h-6 w-6 text-black bg-gray-200 rounded-md text-sm font-semibold">
                        <span class="w-[18px]"><i class="fa-solid fa-n"></i></span>
                    </span>
                </div>
            </div>
        </button>
    </article>

    <x-dialog-modal wire:model="opencatcreate" maxWidth="md">
        <x-slot name="title">
            <div class="flex justify-between items-center">
                <h1 class="">Crear categoria</h1>
                <button class="w-6 h-6 outline-0 border-0" wire:click="$set('opencatcreate', false)">
                    <svg class="w-full h-full btn-menu fill-black transition-transform duration-300 hover:fill-red-700 hover:rotate-180 icon-modal-close"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                        <path
                            d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                        </path>
                    </svg>
                </button>
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="mb-3 w-full">
                <x-label value="Nombre categoria" />
                <x-input wire:model="name" class="w-full" type="text" placeholder="Casa 🏠" />
                <x-jet-input-error for="name" />
            </div>
            <div class="mb-3 w-full">
                <x-label value="Icono" />
                <x-dropdown-me>
                    <x-slot name="content">
                        @if (count($icons))
                            @foreach ($icons as $icon)
                                <x-link-dropdown-me dataname="data-catid" dataid="{{ $icon->id }}"
                                    sponclick="wire:click=$set('catId',{{ $icon->id }})">
                                    <x-slot name="icon">
                                        <i class="{{ $icon->class }}"></i>
                                    </x-slot>
                                    <x-slot name="title">
                                        {{ $icon->name }}
                                    </x-slot>
                                </x-link-dropdown-me>
                            @endforeach
                        @else
                            <x-link-dropdown-me>
                                <x-slot name="icon">
                                    <i class="fa-regular fa-face-frown"></i>
                                </x-slot>
                                <x-slot name="title">
                                    Sin iconos
                                </x-slot>
                            </x-link-dropdown-me>
                        @endif
                    </x-slot>
                    <x-slot name="inputhidden">
                        <input wire:model="catId" type="hidden" name="selectoptionme" id="inputselectoptionme"
                            value="" />
                    </x-slot>
                </x-dropdown-me>
                <x-jet-input-error for="catId" />
            </div>
            <div class="mb-3 w-full">
                <x-label value="Color icono" />
                <x-input wire:model="color" class="w-full h-12 border-[1px] border-gray-300" type="color"
                    style="padding-top: 4px !important; padding-bottom: 4px !important;" />
                <x-jet-input-error for="color" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-button wire:click="save" wire:target="save">
                Crear
            </x-jet-button>
        </x-slot>
    </x-dialog-modal>

</div>

@push('js')
    <script>
        document.addEventListener('keydown', function(event) {
            if (event.metaKey && event.code === 'KeyN') {
                @this.call('changeOpencatcreate')
            }
        });
    </script>
@endpush
