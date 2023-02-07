@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white', 'dropdownClasses' => ''])

@php
    switch ($align) {
        case 'left':
            $alignmentClasses = 'origin-top-left left-0';
            break;
        case 'top':
            $alignmentClasses = 'origin-top';
            break;
        case 'none':
        case 'false':
            $alignmentClasses = '';
            break;
        case 'right':
            $alignmentClasses = 'right-0';
            break;
        case 'leftright':
            $alignmentClasses = 'left-0 right-0';
            break;
        case 'defaultmenu':
            $alignmentClasses = 'right-[-226px] top-[-20px] max-[950px]:right-[-200px] max-md:top-[-85px]';
            break;
        default:
            $alignmentClasses = 'origin-top-right right-0';
            break;
    }
    
    switch ($width) {
        case '48':
            $width = 'w-48';
            break;
        case '28':
            $width = 'w-28';
            break;
        case '20':
            $width = 'w-20';
            break;
        case 'auto':
            $width = 'w-auto';
            break;
    }
@endphp

<div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div class="w-full h-16 px-3 flex items-center justify-between rounded-xl bg-gray-100 transition-colors duration-400 cursor-pointer max-[950px]:px-1 max-[770px]:justify-center box-menu-animation-acc" @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }} {{ $dropdownClasses }}"
        style="display: none;" @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }} animation-dropdown">
            {{ $content }}
        </div>
    </div>
</div>
