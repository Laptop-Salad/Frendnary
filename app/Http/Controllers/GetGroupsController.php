<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FriendGroup;
use App\Models\FriendGroupMember;
use Illuminate\Support\Facades\Auth;

class GetGroupsController extends Controller
{
    public function getUserGroups () {
        $groupIds = FriendGroupMember::where("user_id", Auth::user()->id)->pluck("friend_group_id")->toArray();
        $groupsArr = [];

        $groupNames = FriendGroup::whereIn("id", $groupIds)->pluck("name")->toArray();

        foreach ($groupNames as $groupName) {
            array_push($groupsArr, $groupName);
        }    

        return $groupsArr;
    }
}
