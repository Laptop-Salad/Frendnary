<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function() {
    return view("landing");
});

Route::get("/signup", function() {
    return view("signup");
});

Route::get("/signin", function () {
    return view("signin");
});

Route::get("/dashboard", function () {
    return view("dashboard");
})->middleware("auth.basic");

Route::post("/signup", "App\Http\Controllers\SignUpController@store");

Route::get("/userAvail/{username}", "App\Http\Controllers\UserAvailController@checkAvail");

Route::post("/signin", "App\Http\Controllers\SignInController@authenticate");

Route::get("/logout", "App\Http\Controllers\LogoutController@logout")->middleware("auth.basic");

