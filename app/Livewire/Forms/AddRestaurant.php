<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class AddRestaurant extends Form
{
    #[Validate('required|string|max:255')]
    public $name = '';

    #[Validate('required|exists:restaurant_types,id')]
    public $type_id = '';

    #[Validate('nullable|url|max:255')]
    public $website = '';

    #[Validate('nullable|string|max:500')]
    public $address = '';
}
