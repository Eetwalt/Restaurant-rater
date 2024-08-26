<div>
    <x-form wire:submit.prevent="saveRating" class="max-w-lg p-4 rounded-lg bg-surface">
        <x-form.item>
            <x-form.label>Order details</x-form.label>
            <x-textarea
                wire:model="createRatingForm.order_details"
                x-form:control
                rows="4"
            />
            <x-form.message />
        </x-form.item>

        <x-form.item>
            <x-form.label>Food rating</x-form.label>
            <x-input
                wire:model="createRatingForm.food_rating"
                x-form:control
                type="number"
            />
            <x-form.message />
        </x-form.item>

        <x-form.item>
            <x-form.label>Value rating</x-form.label>
            <x-input
                wire:model="createRatingForm.value_rating"
                x-form:control
                type="number"
            />
            <x-form.message />
        </x-form.item>

        <x-form.item>
            <x-form.label>Vibes rating</x-form.label>
            <x-input
                wire:model="createRatingForm.vibes_rating"
                x-form:control
                type="number"
            />
            <x-form.message />
        </x-form.item>

        <x-form.item>
            <x-form.label>Comments</x-form.label>
            <x-textarea
                wire:model="createRatingForm.comments"
                x-form:control
                rows="4"
            />
            <x-form.message />
        </x-form.item>

        <x-form.item>
            <x-form.label>Visit Date</x-form.label>
            <x-input
                wire:model="createRatingForm.visit_date"
                x-form:control
                type="date"
            />
            <x-form.message />
        </x-form.item>

        <x-button type="submit">Submit Rating</x-button>
    </x-form>
</div>
