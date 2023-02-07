<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-center bg-cyan-400 text-sm font-medium rounded-md shadow-lg select-none py-[0.75rem] px-[2rem] darkmode-ignore']) }}>
    {{ $slot }}
</button>
