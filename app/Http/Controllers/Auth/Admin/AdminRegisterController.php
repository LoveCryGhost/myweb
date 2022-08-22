<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\User\UserCoreController;

class AdminRegisterController extends UserCoreController
{
    public function showLoginForm(){
        return view('layouts.auth.admin.show_login_form');
    }




}
