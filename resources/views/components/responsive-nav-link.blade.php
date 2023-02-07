@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-cyan-400 text-base font-medium text-black hover:text-cyan-400 bg-gray-100 focus:outline-none focus:text-cyan-800 focus:cyan-100 focus:border-cyan-400 transition bg-hover-links'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-black hover:text-cyan-400 hover:bg-gray-100 hover:border-cyan-300 focus:outline-none focus:text-cyan-800 focus:bg-cyan-50 focus:border-cyan-300 transition bg-hover-links';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
