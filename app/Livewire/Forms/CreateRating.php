<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateRating extends Form
{
    #[Validate('required|integer|min:1|max:5')]
    public $food_rating;

    #[Validate('required|integer|min:1|max:5')]
    public $value_rating;

    #[Validate('required|integer|min:1|max:5')]
    public $vibes_rating;

    #[Validate('nullable|string|max:255')]
    public $comments;

    #[Validate('nullable|string')]
    public $order_details;

    #[Validate('required|date|before_or_equal:today')]
    public $visit_date;
}
