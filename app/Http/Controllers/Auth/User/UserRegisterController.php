<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\User\UserCoreController;

class UserRegisterController extends UserCoreController
{
    public function showLoginForm(){
        return view('layouts.auth.user.show_login_form');
    }




}
