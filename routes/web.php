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
})->middleware("guest");

Route::post("/signup", "App\Http\Controllers\SignUpController@store")->middleware("guest");

Route::get("/userAvail/{username}", "App\Http\Controllers\UserAvailController@checkAvail");

Route::get("/signin", function () {
    return view("signin");
})->middleware("guest");

Route::post("/signin", "App\Http\Controllers\SignInController@authenticate")->middleware("guest");

Route::get("/logout", "App\Http\Controllers\LogoutController@logout")->middleware("auth.basic");

Route::get("/dashboard", "App\Http\Controllers\DashboardController@initData")->middleware("auth.basic");

Route::get("/newgroup", function () {
    return view("newgroup");
})->middleware("auth.basic");

Route::post("/newgroup", "App\Http\Controllers\NewGroupController@store")->middleware("auth.basic");

Route::get("/groupAvail/{groupname}", "App\Http\Controllers\GroupAvailController@checkAvail")->middleware("auth.basic");

Route::get("/group/{groupname}", function () {
    return view("group");
})->middleware("auth.basic");