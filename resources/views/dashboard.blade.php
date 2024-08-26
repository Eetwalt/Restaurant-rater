<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="overflow-hidden bg-white rounded-lg shadow-sm">
            <div class="p-6 text-gray-900">
                {{ __("You're logged in!") }}
            </div>
        </div>
</x-app-layout>
