<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Languages
{

    public function handle($request, Closure $next)
    {
        if(session()->has("locale")){
            App::setLocale(session()->get("locale"));
        }else{
            Session::put('locale', config('app.locale'));
            App::setLocale(config('app.locale'));
        }
        return $next($request);
    }
}
