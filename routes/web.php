<?php

namespace App\routes;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;






Route::get('languages/{locale}', function (Request $request, $locale){

    if(!$request->input('locale')){
        Session::put('locale', config('locale'));
    }
    Session::put('locale', $locale);
    App::setLocale($locale);
    return redirect()->back();
})->name("languages");
