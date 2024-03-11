<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GroupAvailController;
use Illuminate\Support\Facades\Auth;
use App\Models\FriendGroup;
use App\Models\FriendGroupMember;

class NewGroupController extends Controller
{
    public function store(Request $request) {
        $validation = $request->validate([
            "groupname" => ["required", "string", "min:3", "max:36"],
        ]);
        
        if (!$validation) {
            session()->flash("error", "There was an unexpected error creating a new
            group, 
            please try again later.");
            return redirect("/dashboard");
        }

        $groupName = $request->input("groupname") . Auth::user()->id;

        // Ensure groupname isnt currently being used
        $groupAvail = new GroupAvailController();
        $checkGroupAvail = $groupAvail->checkAvail($groupName);

        try {
            $group = FriendGroup::insertGetId([
                "name" => $groupName
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash("error","There was an unexpected error creating a new group,
             please try again later.");
            return redirect("/dashboard");
        }

        try {
            $friendGroupMember = FriendGroupMember::create([
                "user_id" => Auth::user()->id,
                "friend_group_id" => $group,
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash("error","There was an unexpected error creating a new group,
             please try again later.");
            return redirect("/dashboard");
        }

        session()->flash("success","Group created successfully.");
        return redirect("/dashboard");
    }
}
