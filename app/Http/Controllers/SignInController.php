<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class SignInController extends Controller
{
    public function authenticate(Request $request) {

        $credentials = $request->validate([
            "username" => ["required"],
            "password" => ["required"],
        ]);

        $hashedPassword = Hash::make($request->input("password"));
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect("dashboard");
        }
 
        session()->flash("error", 
        "Incorrect username or password.");
        return redirect("/signin");
    }
}
