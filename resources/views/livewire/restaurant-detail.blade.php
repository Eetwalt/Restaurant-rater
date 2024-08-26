<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ $restaurant->name }}
        </h2>
    </x-slot>

    <div class="mt-8">
        <h3 class="mb-4 text-xl font-semibold">Restaurant Details</h3>
        <div class="flex flex-col gap-2 p-4 rounded-lg bg-surface">
            <p>
                <span class="font-semibold">Type:</span>
                {{ $restaurant->type->name }}
            </p>
            @if($restaurant->website)
                <p>
                    <span class="font-semibold">Website:</span>
                    <a href="{{ $restaurant->website }}" target="_blank" class="text-primary hover:underline">
                        {{ $restaurant->website }}
                    </a>
                </p>
            @endif
            @if($restaurant->address)
                <p>
                    <span class="font-semibold">Address:</span> {{ $restaurant->address }}
                </p>
            @endif
        </div>
    </div>

    <div class="mt-8">
        <h3 class="mb-4 text-xl font-semibold">Rate this restaurant</h3>
        <livewire:create-rating :restaurant="$restaurant" />
    </div>

    <div class="mt-8">
        <h3 class="mb-4 text-xl font-semibold">Ratings</h3>
        <div class="grid grid-cols-3 gap-4">
            @forelse ($restaurant->ratings as $rating)
                <div class="p-4 transition duration-200 rounded-lg bg-surface">
                    <div class="mt-2 text-sm">
                        <div class="flex items-center">
                            <span class="w-16">Food:</span>
                            <x-star-rating :rating="$rating->food_rating" />
                        </div>
                        <div class="flex items-center">
                            <span class="w-16">Value:</span>
                            <x-star-rating :rating="$rating->value_rating" />
                        </div>
                        <div class="flex items-center">
                            <span class="w-16">Vibes:</span>
                            <x-star-rating :rating="$rating->vibes_rating" />
                        </div>
                    </div>
                    <p class="mt-2 ">{{ $rating->comments }}</p>
                    <p class="mt-2 text-sm text-gray-500">Visited on: {{ $rating->visit_date->format('M d, Y') }}</p>
                </div>
            @empty
                <p>No ratings yet.</p>
            @endforelse
        </div>
    </div>
</div>
