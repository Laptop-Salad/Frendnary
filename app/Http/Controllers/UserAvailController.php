<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserAvailController extends Controller
{
    public function checkAvail($username) {
        $username = strtolower($username);
        $user = DB::table("user")->get()->where("lower(username)", $username)->value("id");

        if (empty($user)) {
            return response()->json([
                "userAvail" => true,
            ]);
        } else {
            return response()->json([
                "userAvail" => false,
            ]);
        }
    }
}
