<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>To-do List - Home</title>
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
            <nav class="max-md:w-full max-md:hidden max-md:absolute max-md:top-20 max-md:right-0 nav-header-landing">
                <div
                    class="flex items-center gap-8 max-md:h-full max-md:w-full max-md:flex-col max-md:gap-12 max-md: max-md:pt-8">
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
                <svg class="btn-menu fill-sky-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true" height="20px">
                    <path fill-rule="evenodd"
                        d="M3 7a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 13a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </header>

        <div class="m-auto max-w-[640px]">
            <main class="max-w-[71.25rem] text-center mt-[3.5rem] m-auto mb-[1.5rem]">
                <h1
                    class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-gray-500 mb-2 darkmode-ignore-h1">
                    Crea tus tareas diarias</h1>
                <h2 class="text-4xl font-light mb-2">Asígnale una categoría</h2>
                <h5 class="text-lg mb-7 text-gray-400">Mantén organizadas tus tareas</h5>
                <a href="{{ route('login') }}"
                    class="w-auto bg-cyan-400 text-sm font-medium rounded-md shadow-lg select-none py-[0.75rem] px-[2rem] darkmode-ignore2">Iniciar
                    ahora</a>
            </main>

            <section class="max-w-[558px] my-[5rem] m-auto px-[1rem]">
                <ul class="grid p-0 grid-flow-row gap-6">
                    <div>
                        <article
                            class="w-full py-4 px-6 bg-white rounded shadow grid grid-cols-article gap-[0.875rem] items-center overflow-hidden container-task container-task-animation">
                            <label class="grid grid-cols-boxtask gap-[0.875rem] items-center">
                                <input
                                    class="border-0 h-[1px] m-[-1px] overflow-hidden p-0 absolute whitespace-nowrap w-[1px] hidden cursor-pointer checkbox-task"
                                    type="checkbox" name="" id="">
                                <div
                                    class="cursor-pointer w-5 h-5 rounded-md shadow-lg bg-gray-300 flex justify-center items-center self-center checkbox-icon">
                                    <svg class="hidden checkbox-t-animation" stroke="currentColor" fill="currentColor"
                                        stroke-width="0" viewBox="0 0 20 20" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </label>
                            <div>
                                <span class="text-sm text-black select-none task-span-title">Hacer el diseño de la
                                    web</span>
                            </div>
                            <svg class="text-gray-400 col-fourfive transition-colors duration-500 task-icon"
                                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                                </path>
                            </svg>
                        </article>
                    </div>
                    <div>
                        <article
                            class="w-full py-4 px-6 bg-white rounded shadow grid grid-cols-article gap-[0.875rem] items-center overflow-hidden container-task container-task-animation">
                            <label class="grid grid-cols-boxtask gap-[0.875rem] items-center">
                                <input
                                    class="border-0 h-[1px] m-[-1px] overflow-hidden p-0 absolute whitespace-nowrap w-[1px] hidden cursor-pointer checkbox-task"
                                    type="checkbox" name="" id="">
                                <div
                                    class="cursor-pointer w-5 h-5 rounded-md shadow-lg bg-gray-300 flex justify-center items-center self-center checkbox-icon">
                                    <svg class="hidden checkbox-t-animation" stroke="currentColor" fill="currentColor"
                                        stroke-width="0" viewBox="0 0 20 20" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </label>
                            <div>
                                <span class="text-sm text-black select-none task-span-title">Sacar la basura</span>
                            </div>
                            <svg class="text-gray-400 col-fourfive transition-colors duration-500 task-icon"
                                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                        </article>
                    </div>
                    <div>
                        <article
                            class="w-full py-4 px-6 bg-white rounded shadow grid grid-cols-article gap-[0.875rem] items-center overflow-hidden container-task container-task-animation">
                            <label class="grid grid-cols-boxtask gap-[0.875rem] items-center">
                                <input
                                    class="border-0 h-[1px] m-[-1px] overflow-hidden p-0 absolute whitespace-nowrap w-[1px] hidden cursor-pointer checkbox-task"
                                    type="checkbox" name="" id="">
                                <div
                                    class="cursor-pointer w-5 h-5 rounded-md shadow-lg bg-gray-300 flex justify-center items-center self-center checkbox-icon">
                                    <svg class="hidden checkbox-t-animation" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 20 20" height="1em"
                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </label>
                            <div>
                                <span class="text-sm text-black select-none task-span-title">Reunión para análisis de
                                    requerimientos</span>
                            </div>
                            <svg class="text-gray-400 col-fourfive transition-colors duration-500 task-icon"
                                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                                </path>
                            </svg>
                        </article>
                    </div>
                    <div>
                        <article
                            class="w-full py-4 px-6 bg-white rounded shadow grid grid-cols-article gap-[0.875rem] items-center overflow-hidden container-task container-task-animation">
                            <label class="grid grid-cols-boxtask gap-[0.875rem] items-center">
                                <input
                                    class="border-0 h-[1px] m-[-1px] overflow-hidden p-0 absolute whitespace-nowrap w-[1px] hidden cursor-pointer checkbox-task"
                                    type="checkbox" name="" id="">
                                <div
                                    class="cursor-pointer w-5 h-5 rounded-md shadow-lg bg-gray-300 flex justify-center items-center self-center checkbox-icon">
                                    <svg class="hidden checkbox-t-animation" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 20 20" height="1em"
                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </label>
                            <div>
                                <span class="text-sm text-black select-none task-span-title">Hacer una lista de
                                    pendientes</span>
                            </div>
                            <svg class="text-gray-400 col-fourfive transition-colors duration-500 task-icon"
                                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </article>
                    </div>
                </ul>
            </section>
        </div>
        <footer class="w-full bg-gray-300">
            <div class="max-w-[1140px] w-full m-auto flex justify-between items-center py-2 px-6 text-xs">
                <span>
                    Inspirado en
                    <a class="font-medium" target="_blank" rel="noopener noreferrer" href="https://dona.ai/">Dona 🍩</span></a>
                </span>
                <span class="flex items-center gap-1">Jose Ignacio •
                    <!-- -->2023
                    <!-- --> •
                    <!-- --> <a target="_blank" rel="noopener noreferrer" href="https://github.com/JJozef"
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
