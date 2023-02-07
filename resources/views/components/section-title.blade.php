<div class="md:col-span-1 flex justify-between">
    <div class="px-4 max-[1300px]:px-0">
        <h3 class="text-lg font-medium text-gray-900 card-action-section-text">{{ $title }}</h3>

        <p class="mt-1 text-sm text-gray-600 card-action-section-text-secondary">
            {{ $description }}
        </p>
    </div>

    <div class="px-4 max-[1300px]:px-0">
        {{ $aside ?? '' }}
    </div>
</div>
