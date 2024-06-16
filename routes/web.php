<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/dashboard', App\Livewire\Dashboard::class)
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/groups/create', App\Livewire\CreateGroup::class)
    ->middleware(['auth'])
    ->name("groups.create");

Route::get('/groups/{group}', App\Livewire\ShowGroup::class)
    ->middleware(['auth', '\App\Http\Middleware\HasGroupAccess'])
    ->name("groups.group");

require __DIR__.'/auth.php';
