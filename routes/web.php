<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/dashboard', App\Livewire\Dashboard::class)
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/groups/{group}', \App\Livewire\Group\ShowGroup::class)
    ->middleware(['auth', '\App\Http\Middleware\HasGroupAccess'])
    ->name("groups.group");

require __DIR__.'/auth.php';
