<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lista de pendientes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased ">
    <div class="grid grid-flow-col grid-rows-section min-h-screen">
        <header
            class="max-w-[1140px] w-full flex items-center justify-between p-6 m-auto top-0 sticky z-50 header-landing">
            <a href="/">
                <svg class="h-10 w-auto fill-sky-400" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64"
                    viewBox="0,0,256,256">
                    <defs>
                        <linearGradient x1="18" y1="21.667" x2="18" y2="28.508"
                            gradientUnits="userSpaceOnUse" id="color-1_43983_gr1">
                            <stop offset="0" stop-color="#00ffff"></stop>
                            <stop offset="1" stop-color="#70afff"></stop>
                        </linearGradient>
                        <linearGradient x1="32" y1="4.5" x2="32" y2="59.026"
                            gradientUnits="userSpaceOnUse" id="color-2_43983_gr2">
                            <stop offset="0" stop-color="#00c6ff"></stop>
                            <stop offset="1" stop-color="#0072ff"></stop>
                        </linearGradient>
                        <linearGradient x1="45" y1="4.5" x2="45" y2="59.026"
                            gradientUnits="userSpaceOnUse" id="color-3_43983_gr3">
                            <stop offset="0" stop-color="#00c6ff"></stop>
                            <stop offset="1" stop-color="#0072ff"></stop>
                        </linearGradient>
                        <linearGradient x1="34.353" y1="4.5" x2="34.353" y2="59.026"
                            gradientUnits="userSpaceOnUse" id="color-4_43983_gr4">
                            <stop offset="0" stop-color="#00c6ff"></stop>
                            <stop offset="1" stop-color="#0072ff"></stop>
                        </linearGradient>
                        <linearGradient x1="20.938" y1="4.5" x2="20.938" y2="59.026"
                            gradientUnits="userSpaceOnUse" id="color-5_43983_gr5">
                            <stop offset="0" stop-color="#00c6ff"></stop>
                            <stop offset="1" stop-color="#0072ff"></stop>
                        </linearGradient>
                        <linearGradient x1="28.001" y1="4.5" x2="28.001" y2="59.026"
                            gradientUnits="userSpaceOnUse" id="color-6_43983_gr6">
                            <stop offset="0" stop-color="#00c6ff"></stop>
                            <stop offset="1" stop-color="#0072ff"></stop>
                        </linearGradient>
                        <linearGradient x1="36" y1="4.5" x2="36" y2="59.026"
                            gradientUnits="userSpaceOnUse" id="color-7_43983_gr7">
                            <stop offset="0" stop-color="#00c6ff"></stop>
                            <stop offset="1" stop-color="#0072ff"></stop>
                        </linearGradient>
                        <linearGradient x1="28" y1="4.5" x2="28" y2="59.026"
                            gradientUnits="userSpaceOnUse" id="color-8_43983_gr8">
                            <stop offset="0" stop-color="#00c6ff"></stop>
                            <stop offset="1" stop-color="#0072ff"></stop>
                        </linearGradient>
                        <linearGradient x1="20" y1="4.5" x2="20" y2="59.026"
                            gradientUnits="userSpaceOnUse" id="color-9_43983_gr9">
                            <stop offset="0" stop-color="#00c6ff"></stop>
                            <stop offset="1" stop-color="#0072ff"></stop>
                        </linearGradient>
                    </defs>
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(4,4)">
                            <path d="M15,28v-5c0,-0.552 0.448,-1 1,-1h5z" fill="url(#color-1_43983_gr1)"></path>
                            <path
                                d="M57,18c0,-6.617 -5.383,-12 -12,-12c-6.617,0 -12,5.383 -12,12h-19c-1.654,0 -3,1.346 -3,3v1h-2c-1.103,0 -2,0.897 -2,2v28c0,1.103 0.897,2 2,2h2v1c0,1.654 1.346,3 3,3h28c1.654,0 3,-1.346 3,-3v-1h2c1.103,0 2,-0.897 2,-2v-22.7c4.653,-1.653 8,-6.087 8,-11.3zM9,52v-28h2v28zM42,56h-28c-0.552,0 -1,-0.448 -1,-1v-34c0,-0.552 0.448,-1 1,-1h19v10h10v25c0,0.552 -0.448,1 -1,1zM47,52h-2v-22c0.683,0 1.348,-0.071 2,-0.181zM45,28h-10v-10c0,-5.514 4.486,-10 10,-10c5.514,0 10,4.486 10,10c0,5.514 -4.486,10 -10,10z"
                                fill="url(#color-2_43983_gr2)"></path>
                            <path d="M43.25,20.586l-3.293,-3.293l-1.414,1.414l4.707,4.707l8.207,-8.207l-1.414,-1.414z"
                                fill="url(#color-3_43983_gr3)"></path>
                            <path
                                d="M34.353,36c-1.59,0 -3.029,-0.941 -3.667,-2.399l-1.832,0.803c0.956,2.184 3.115,3.596 5.499,3.596c2.386,0 4.545,-1.413 5.5,-3.6l-1.832,-0.8c-0.638,1.458 -2.078,2.4 -3.668,2.4z"
                                fill="url(#color-4_43983_gr4)"></path>
                            <path
                                d="M25.779,34.249l-1.938,-0.498c-0.34,1.324 -1.534,2.249 -2.904,2.249c-1.368,0 -2.563,-0.924 -2.905,-2.247l-1.936,0.5c0.569,2.206 2.56,3.747 4.841,3.747c2.282,0 4.273,-1.542 4.842,-3.751z"
                                fill="url(#color-5_43983_gr5)"></path>
                            <path
                                d="M32.331,41.499c-0.892,1.543 -2.551,2.501 -4.331,2.501c-1.778,0 -3.438,-0.958 -4.331,-2.499l-1.73,1.002c1.248,2.157 3.572,3.497 6.061,3.497c2.492,0 4.815,-1.341 6.063,-3.499z"
                                fill="url(#color-6_43983_gr6)"></path>
                            <path d="M34,52h4v2h-4z" fill="url(#color-7_43983_gr7)"></path>
                            <path d="M26,52h4v2h-4z" fill="url(#color-8_43983_gr8)"></path>
                            <path d="M18,52h4v2h-4z" fill="url(#color-9_43983_gr9)"></path>
                        </g>
                    </g>
                </svg>
            </a>
            <nav
                class="max-md:w-full max-md:min-h-screen max-md:hidden max-md:absolute max-md:top-20 max-md:right-0 nav-header-landing">
                <div
                    class="flex items-center justify-end gap-8 max-md:h-full max-md:w-full max-md:flex-col max-md:justify-center max-md:gap-12 max-md: max-md:pt-8">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="whitespace-nowrap text-base font-normal text-gray-400 hover:text-gray-600 transition-colors max-md:text-2xl">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="whitespace-nowrap text-base font-normal text-gray-400 hover:text-gray-600 transition-colors max-md:text-2xl">Ingreso</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="flex items-center justify-center rounded transition duration-500 bg-sky-400 text-black py-[0.5rem] px-[1.5rem] text-[0.895rem] font-medium color-16 shadow-md hover:shadow-lg max-md:text-2xl max-md:w-[90%] darkmode-ignore2">Registro</a>
                            @endif
                        @endauth

                    @endif
                </div>
            </nav>
            <button class="hidden max-md:block">
                <svg class="btn-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                    height="20px">
                    <path fill-rule="evenodd"
                        d="M3 7a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 13a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </header>

        <div class="m-auto w-full flex items-center justify-center">
            {{ $slot }}
        </div>
        <footer class="w-full bg-gray-300">
            <div class="max-w-[1140px] w-full m-auto flex justify-between items-center py-2 px-6 text-xs">
                <span>
                    Inspirado en
                    <a target="_blank" rel="noopener noreferrer" href="https://dona.ai/">Dona <span class="block darkmode-ignore">🍩</span></a>
                </span>
                <span class="flex items-center gap-1">Jose Ignacio •
                    <!-- -->2023
                    <!-- --> •
                    <!-- --> <a target="_blank" rel="noopener noreferrer" href="#"
                        class="inline-flex items-center font-medium cursor-pointer">Github <svg stroke="currentColor"
                            fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 32 32" height="21"
                            width="21" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 5.343c-6.196 0-11.219 5.023-11.219 11.219 0 4.957 3.214 9.162 7.673 10.645 0.561 0.103 0.766-0.244 0.766-0.54 0-0.267-0.010-1.152-0.016-2.088-3.12 0.678-3.779-1.323-3.779-1.323-0.511-1.296-1.246-1.641-1.246-1.641-1.020-0.696 0.077-0.682 0.077-0.682 1.126 0.078 1.72 1.156 1.72 1.156 1.001 1.715 2.627 1.219 3.265 0.931 0.102-0.723 0.392-1.219 0.712-1.498-2.49-0.283-5.11-1.246-5.11-5.545 0-1.226 0.438-2.225 1.154-3.011-0.114-0.285-0.501-1.426 0.111-2.97 0 0 0.941-0.301 3.085 1.15 0.894-0.25 1.854-0.373 2.807-0.377 0.953 0.004 1.913 0.129 2.809 0.379 2.14-1.453 3.083-1.15 3.083-1.15 0.613 1.545 0.227 2.685 0.112 2.969 0.719 0.785 1.153 1.785 1.153 3.011 0 4.31-2.624 5.259-5.123 5.537 0.404 0.348 0.761 1.030 0.761 2.076 0 1.5-0.015 2.709-0.015 3.079 0 0.299 0.204 0.648 0.772 0.538 4.455-1.486 7.666-5.69 7.666-10.645 0-6.195-5.023-11.219-11.219-11.219z">
                            </path>
                        </svg></a>
                </span>
            </div>
        </footer>
    </div>
    @stack('modals')

    @livewireScripts
</body>

</html>
