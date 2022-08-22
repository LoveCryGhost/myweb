<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\User\UserCoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


class AdminLoginController extends UserCoreController
{
    //protected $redirectTo = RouteServiceProvider::HOME;

    public function showLoginForm(){
        return view('layouts.auth.admin.show_login_form');
    }

    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request,[
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        //attempt to log the admin in
        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];
        $remember = $request->remember;

        //檢查是否為user
        if(Auth::guard("admin")->attempt($credentials, $remember)){
            //檢查郵箱是否激活
            if(Auth::guard("admin")->user()->activated) {
                return redirect()->route("admin.dashboard.index")
                    ->with('notification', ["type" => "success", "text"=>'歡迎回來!!']);
            }else{
                Auth::guard("admin")->logout();


                return redirect('/')
                    ->with('notification', ["type" => "warning", "timeout"=>false, "layout"=>"topCenter", "text"=>'你的账号未激活，请检查邮箱中的注册邮件进行激活。']);;
            }
        }

        //if unsuccessful, then redirect back to login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'))
            ->with('notification', ["type" => "warning","layout"=>'topCenter', "text"=>' admin 帳號或密碼有錯!!']);
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('user.homepage');
    }
}
