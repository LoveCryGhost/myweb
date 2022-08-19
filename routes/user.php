<?php
namespace App\routes;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('homepage');
});
