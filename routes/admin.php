<?php
namespace App\routes;
use Illuminate\Support\Facades\Route;

//使用Session必須寫在 ['middleware' => ['web']內部
Route::group(['middleware' => ['web']], function () {
    Route::middleware('auth:admin')->namespace('App\Http\Controllers\Admin')->group( function() {
        Route::resource("dashboard","AdminDashboardController");
        Route::crudResource('admin', 'AdminAdminsController');

    });

    //dd('Welcome to simple admin route file.');
});

