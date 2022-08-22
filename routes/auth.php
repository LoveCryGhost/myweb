<?php
namespace App\routes;
use Illuminate\Support\Facades\Route;


Route::namespace('App\Http\Controllers\Auth\User')->group(function () {
    //登入
    Route::get('login', 'UserLoginController@showLoginForm')->name('user.login');
    Route::post('login', 'UserLoginController@login')->name("user.login_submit");
    Route::post('logout', 'UserLoginController@logout')->name('user.logout');

    //新增註冊
    Route::get('register', 'UserRegisterController@showRegistrationForm')->name('user.register');
    Route::post('register', 'UserRegisterController@register');
    Route::get('register@confirm_email/{token}', 'UserRegisterController@confirmEmail')->name('user.confirm_email');
//
//    Route::get('confirm_email/{token}', 'RegisterController@confirmEmail')->name('user.confirm_email');

//        //重置密碼, 此為自定義的Controller，與系統不同
//        //填寫Email表單
//        Route::get('password/reset',  'PasswordController@showLinkRequestForm')->name('password.request');
//        //處理表單提交，成功的話就發送郵件，附帶Token 的鏈接
//        Route::post('password/email',  'PasswordController@sendResetLinkEmail')->name('password.email');
//        //顯示更新密碼的表單，包含token
//        Route::get('password/reset/{token}',  'PasswordController@showResetForm')->name('password.reset');
//        //對提交過來的token 和email 數據進行配對，正確的話更新密碼
//        Route::post('password/reset',  'PasswordController@reset')->name('password.update');

});

Route::namespace('App\Http\Controllers\Auth\Admin')->prefix('admin/')->group(function () {
    //登入
    Route::get('login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminLoginController@login')->name("admin.login_submit");
    Route::post('logout', 'AdminLoginController@logout')->name('admin.logout');

    //新增註冊
    Route::get('register', 'AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'AdminRegisterController@register');
    Route::get('register@confirm_email/{token}', 'AdminRegisterController@confirmEmail')->name('admin.confirm_email');
//
//    Route::get('confirm_email/{token}', 'RegisterController@confirmEmail')->name('user.confirm_email');

//        //重置密碼, 此為自定義的Controller，與系統不同
//        //填寫Email表單
//        Route::get('password/reset',  'PasswordController@showLinkRequestForm')->name('password.request');
//        //處理表單提交，成功的話就發送郵件，附帶Token 的鏈接
//        Route::post('password/email',  'PasswordController@sendResetLinkEmail')->name('password.email');
//        //顯示更新密碼的表單，包含token
//        Route::get('password/reset/{token}',  'PasswordController@showResetForm')->name('password.reset');
//        //對提交過來的token 和email 數據進行配對，正確的話更新密碼
//        Route::post('password/reset',  'PasswordController@reset')->name('password.update');

});
