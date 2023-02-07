@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }} class="darkmode--activated">

    <div class="px-6 py-4 text-lg bg-gray-100 header-modal-animation">
        {{ $title }}
    </div>

    <div class="px-6 py-4">
        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 text-right border-t-[1px] border-gray-100 footer-modal-animation">
        {{ $footer }}
    </div>
</x-modal>
