<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('restaurant_id')->constrained();
            $table->text('order_details')->nullable();
            $table->integer('food_rating');
            $table->integer('value_rating');
            $table->integer('vibes_rating');
            $table->text('comments')->nullable();
            $table->date('visit_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
