<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CoreController;

class AdminDashboardController extends CoreController
{
    public function index(){
        return view('admin.dashboard.index');
    }
}
