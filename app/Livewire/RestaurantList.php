<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class RestaurantList extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.restaurant-list', [
            'restaurants' => Restaurant::with('type')
                ->withAvg('ratings as avg_food', 'food_rating')
                ->withAvg('ratings as avg_value', 'value_rating')
                ->withAvg('ratings as avg_vibes', 'vibes_rating')
                ->withCount('ratings')
                ->paginate(10)
        ]);
    }
}
