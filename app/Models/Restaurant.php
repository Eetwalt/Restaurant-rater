<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type_id', 'website', 'address'];

    public function type(): BelongsTo
    {
        return $this->belongsTo(RestaurantType::class, 'type_id');
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }

    public function averageRatings()
    {
        return $this->ratings()
            ->selectRaw('AVG(food_rating) as avg_food, AVG(value_rating) as avg_value, AVG(vibes_rating) as avg_vibes')
            ->first();
    }
}
