<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserAvailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Facades\Auth;
use Illuminate\View\View;

class SignUpController extends Controller
{
    public function store(Request $request)  
    {
        $validation = $request->validate([
            "username" => ["required", "string", "min:3", "max:36"],
            "password" => ["required", "string", "min:8", "max:24", "confirmed"]
        ]);

        if (!$validation) {
            session()->flash("error", "There was an unexpected error creating your account, 
            please try again later.");
            return redirect("/signup");
        }

        $username = $request->input("username");
        $hashedPassword = Hash::make($request->input("password"));

        // Ensure username isnt currently being used
        $userAvail = new UserAvailController();
        $checkUserAvail = $userAvail->checkAvail($username);

        if ($checkUserAvail->getData()->userAvail == false) {
            session()->flash("error","There was an unexpected error creating your account,
             please try again later.");
            return redirect("/signup");
        }

        try {
            $user = User::create([
                "username" => $username,
                "password" => $hashedPassword,
            ]);

            session()->flash("success","Account created successfully. You can log in now.");
            return redirect("/signin");
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash("error","There was an unexpected error creating your account,
             please try again later.");
            return redirect("/signup");
        }
    }
}

