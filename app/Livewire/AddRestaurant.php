<?php

namespace App\Livewire;

use App\Models\RestaurantType;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Livewire\Forms\AddRestaurant as AddRestaurantForm;

class AddRestaurant extends Component
{
    public AddRestaurantForm $addRestaurantForm;

    public function addRestaurant()
    {
        $this->addRestaurantForm->validate();

        $restaurant = auth()->user()->restaurants()->create($this->addRestaurantForm->all());

        return redirect()->route('restaurants.show', $restaurant);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.add-restaurant', [
            'types' => RestaurantType::all(),
        ]);
    }
}
