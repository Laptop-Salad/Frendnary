<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
 
Route::get('/dashboard', App\Livewire\Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/groups/create', App\Livewire\CreateGroup::class)
    ->middleware(['auth', 'verified'])
    ->name("groups.create");

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
