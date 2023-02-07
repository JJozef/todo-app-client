@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 label-component mb-2']) }}>
    {{ $value ?? $slot }}
</label>
