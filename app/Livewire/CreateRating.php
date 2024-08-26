<?php

namespace App\Livewire;

use App\Livewire\Forms\CreateRating as CreateRatingForm;
use App\Models\Restaurant;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateRating extends Component
{
    public Restaurant $restaurant;
    public CreateRatingForm $createRatingForm;

    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
        $this->visit_date = now()->format('Y-m-d');
    }

    public function saveRating()
    {
        $this->createRatingForm->validate();

        $this->restaurant->ratings()->create(array_merge(
            $this->createRatingForm->all(),
            ['user_id' => auth()->id()]
        ));

        $this->reset('createRatingForm');
        $this->dispatch('update-ratings');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.create-rating');
    }
}
