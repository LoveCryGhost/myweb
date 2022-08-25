<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\User\UserCoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


class UserLoginController extends UserCoreController
{
    //protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        //限流 10 分钟十次
        $this->middleware('throttle:10,10', [
            'only' => ['login']
        ]);
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('layouts.auth.user.show_login_form');
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
        if(Auth::guard("web")->attempt($credentials, $remember)){

            //檢查郵箱是否激活
            if(Auth::user()->activated) {
                return redirect()->route("user.homepage")
                    ->with('notification', ["type" => "warning", "timeout"=>false, "layout"=>"topCenter", "text"=>'歡迎回來 !!']);
            }else{
                Auth::logout();


                return redirect('/')
                    ->with('notification', ["type" => "warning", "timeout"=>false, "layout"=>"topCenter", "text"=>'你的账号未激活，请检查邮箱中的注册邮件进行激活。']);
            }
        }

        //if unsuccessful, then redirect back to login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'))
            ->with('notification', ["type" => "warning","layout"=>'topCenter', "text"=>' 帳號或密碼有錯!!']);
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('user.homepage');
    }
}
