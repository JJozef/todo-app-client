@props(['active'])

@php
    $classes = $active ?? false ? 
    'w-full h-full flex px-3 rounded-xl max-md:rounded-bl-none max-md:rounded-tl-none max-md:rounded-tr-[3px] max-md:rounded-br-[3px] justify-between box-menu-animation-active container-task-animation items-center max-md:w-[66px] max-md:flex max-md:justify-center' 
    : 
    'w-full h-full flex px-3 rounded-xl max-md:rounded-bl-none max-md:rounded-tl-none max-md:rounded-tr-[3px] max-md:rounded-br-[3px] justify-between items-center max-md:w-[64px] max-md:flex max-md:justify-center';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
