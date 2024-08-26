<div class="bg-background text-text">
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-text">
                {{ __('Restaurants') }}
            </h2>
            <x-primary-button>
                <a href="{{ route('add-restaurant') }}">
                    {{ __('Add a restaurant') }}
                </a>
            </x-primary-button>
        </div>
    </x-slot>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($restaurants as $restaurant)
            <a href="{{ route('restaurants.show', $restaurant) }}" class="block transition duration-200 rounded-lg bg-surface hover:bg-surface/75">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg font-medium leading-6 text-text">
                        {{ $restaurant->name }}
                    </h3>
                    <p class="mt-1 text-sm text-secondary">
                        {{ $restaurant->type->name }}
                    </p>
                    <div class="mt-2 text-sm text-text">
                        <div class="flex items-center">
                            <span class="w-16 text-secondary">Food:</span>
                            <x-star-rating :rating="$restaurant->avg_food" />
                        </div>
                        <div class="flex items-center">
                            <span class="w-16 text-secondary">Value:</span>
                            <x-star-rating :rating="$restaurant->avg_value" />
                        </div>
                        <div class="flex items-center">
                            <span class="w-16 text-secondary">Vibes:</span>
                            <x-star-rating :rating="$restaurant->avg_vibes" />
                        </div>
                    </div>
                    <p class="mt-2 text-sm text-secondary">
                        {{ $restaurant->ratings_count }} {{ Str::plural('rating', $restaurant->ratings_count) }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $restaurants->links() }}
    </div>
</div>
