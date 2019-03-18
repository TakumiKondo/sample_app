<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ホーム画面
Route::get('/', function () { 
    return view('home');
});

// ログイン画面
Route::get('/login', function () { 
    return view('login');
});
Route::post('/login', function () { 
    return view('login');
});

// 登録画面
Route::get('/register', 'RegisterController@create')->name('registerForm');
Route::post('/register', 'RegisterController@store')->name('registUser');
