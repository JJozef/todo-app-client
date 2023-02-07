<aside class="min-w-[350px] h-screen sticky max-[450px]:fixed top-0 left-0 z-40 bg-white rounded-2xl menu-task-app">
    <nav
        class="w-full h-full px-7 pt-10 pb-4 flex flex-col justify-between max-[950px]:px-3 max-[950px]:relative max-md:pr-0 max-md:pl-0">
        @livewire('categories-aside')
        <section class="w-full">
            <x-dropdown-menu align="defaultmenu" class="cursor-pointer">
                <x-slot name="trigger">
                    <div class="flex items-center gap-2">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-black transition max-[768px]:border-gray-900">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                    alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                        @endif

                        <div class="flex flex-col max-[768px]:hidden">
                            <h2 class="text-base font-medium max-[950px]:text-[.870rem]">{{ Auth::user()->name }}</h2>
                            <h5 class="text-sm text-gray-400 max-[950px]:text-[.775rem]">{{ Auth::user()->email }}</h5>
                        </div>
                    </div>
                    <div class="max-[768px]:hidden">
                        <div class="flex flex-col">
                            <svg class="btn-menu w-[16px] h-[15px]" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path
                                    d="m12 19.24-4.95-4.95-1.41 1.42L12 22.07l6.36-6.36-1.41-1.42L12 19.24zM5.64 8.29l1.41 1.42L12 4.76l4.95 4.95 1.41-1.42L12 1.93 5.64 8.29z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </x-slot>
                <x-slot name="content">
                    <div class="flex-col hidden max-md:flex mb-3 px-3 dropdown-menu-responsive-content">
                        <h2 class="text-base font-medium">{{ Auth::user()->name }}</h2>
                        <h5 class="text-sm text-gray-400 max-md:text-[.870rem]">{{ Auth::user()->email }}</h5>
                    </div>
                    <hr class="max-md:block hidden">
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Mi perfil') }}
                    </x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Cerrar sesión') }}
                        </x-responsive-nav-link>
                    </form>
                </x-slot>
            </x-dropdown-menu>
        </section>
    </nav>
</aside>
