<?php


use App\Livewire\AddRestaurant;
use App\Livewire\RestaurantDetail;
use App\Livewire\RestaurantList;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/add-restaurant', AddRestaurant::class)
    ->middleware(['auth'])
    ->name('add-restaurant');

Route::get('/restaurants', RestaurantList::class)
    ->middleware(['auth'])
    ->name('restaurants');

Route::get('/restaurants/{restaurant}', RestaurantDetail::class)
    ->middleware(['auth'])
    ->name('restaurants.show');

require __DIR__ . '/auth.php';
