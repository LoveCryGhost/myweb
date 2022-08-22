<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\CoreController;

class UserDashboardController extends CoreController
{
    public function index(){
        return view('users.dashboard.index');
    }
}
