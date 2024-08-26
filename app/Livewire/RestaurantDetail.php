<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Attributes\Layout;
use Livewire\Component;

class RestaurantDetail extends Component
{

    public Restaurant $restaurant;

    protected $listeners = ['update-ratings' => '$refresh'];

    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.restaurant-detail');
    }
}
