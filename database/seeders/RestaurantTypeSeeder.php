<?php

namespace Database\Seeders;

use App\Models\RestaurantType;
use Illuminate\Database\Seeder;

class RestaurantTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            'Italian',
            'Chinese',
            'Mexican',
            'Japanese',
            'Indian',
            'American',
            'French',
            'Thai',
            'Greek',
            'Spanish',
            'Korean',
            'Vietnamese',
            'Mediterranean',
            'Steakhouse',
            'Seafood',
            'Vegetarian/Vegan',
            'Barbecue',
            'Pizzeria',
            'Sushi',
            'Fusion',
        ];

        foreach ($types as $type) {
            RestaurantType::create(['name' => $type]);
        }
    }
}