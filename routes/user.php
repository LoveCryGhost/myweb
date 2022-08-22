<?php
namespace App\routes;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('homepage');
})->name("homepage");

Route::middleware('auth:web')->group(function () {
    Route::namespace('App\Http\Controllers\User')->group(function () {
        Route::resource("dashboard","UserDashboardController");
    });
});

