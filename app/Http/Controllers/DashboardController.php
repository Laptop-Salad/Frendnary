<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GetGroupsController;

class DashboardController extends Controller
{
    public function initData() {
        $getGroups = new GetGroupsController;
        $groups = $getGroups->getUserGroups();

        return view("dashboard", ["groups" => $groups]);
    }
}
