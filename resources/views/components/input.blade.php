@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-white-i border-gray-300 text-[0.875rem] focus:bg-white focus:outline-0 focus:border-gray-300 focus:ring-0 rounded-lg shadow-sm py-[0.875rem] px-6']) !!}>
