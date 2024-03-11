<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FriendGroup;

class GroupAvailController extends Controller
{
    public function checkAvail($groupname) {
        $groupname = strtolower($groupname) . Auth::user()->id;
        $friendgroup = FriendGroup::whereRaw("LOWER(name) = '${groupname}'")->value("id");

        if (empty($friendgroup)) {
            return response()->json([
                "groupAvail" => true,
            ]);
        } else {
            return response()->json([
                "groupAvail" => false,
            ]);
        }
    }
}
