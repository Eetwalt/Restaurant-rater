<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Add a new restaurant') }}
        </h2>
    </x-slot>

    @if (session()->has('message'))
        <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
    @endif

    {{-- <form wire:submit.prevent="addRestaurant" class="max-w-lg p-4 rounded-lg bg-surface">
        <div class="mb-4">
            <x-input-label for="name" value="Name" />
            <x-text-input id="name" placeholder="McDonalds" class="w-full" autofocus wire:model="addRestaurantForm.name" />
            <x-input-error :messages="$errors->get('addRestaurantForm.name')" class="mt-1" />
        </div>
        <div class="mb-4">
            <x-input-label for="type_id" value="Type" />
            <x-select class="w-[200px]" wire:model="addRestaurantForm.type_id" id="type_id">
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </x-select>
            <x-input-error :messages="$errors->get('addRestaurantForm.type_id')" class="mt-1" />
        </div>
        <div class="mb-4">
            <x-input-label for="website" value="Website" />
            <x-text-input id="website" placeholder="https://www.example.com" class="w-full" wire:model="addRestaurantForm.website" />
            <x-input-error :messages="$errors->get('addRestaurantForm.website')" class="mt-1" />
        </div>
        <div class="mb-4">
            <x-input-label for="address" value="Address" />
            <x-text-input id="address" placeholder="123 Main St, City, Country" class="w-full" wire:model="addRestaurantForm.address" />
            <x-input-error :messages="$errors->get('addRestaurantForm.address')" class="mt-1" />
        </div>
        <div class="flex items-center justify-between">
            <x-primary-button type="submit">
                Add Restaurant
            </x-primary-button>
        </div>
    </form> --}}

    <x-form wire:submit.prevent="addRestaurant" class="max-w-lg p-4 rounded-lg bg-surface">
        <x-form.item>
            <x-form.label>Name</x-form.label>
            <x-input
                wire:model="addRestaurantForm.name"
                x-form:control
                placeholder="McDonalds Paris Centre"
            />
            <x-form.message />
        </x-form.item>
        <x-form.item>
            <x-form.label>Type</x-form.label>
            <x-select wire:model="addRestaurantForm.type_id" id="type_id">
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </x-select>
            <x-form.message />
        </x-form.item>
        <x-form.item>
            <x-form.label>Website</x-form.label>
            <x-input
                wire:model="addRestaurantForm.website"
                x-form:control
                placeholder="https://www.mcdonalds.com"
            />
            <x-form.message />
        </x-form.item>
        <x-form.item>
            <x-form.label>Address</x-form.label>
            <x-input
                wire:model="addRestaurantForm.address"
                x-form:control
                placeholder="123 Main St, City, Country"
            />
            <x-form.message />
        </x-form.item>
        <x-button type="submit">Submit</x-button>
    </x-form>
</div>
