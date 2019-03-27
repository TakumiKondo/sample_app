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
Route::get('/login', 'LoginController@loginForm')->name('loginForm');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');

// 登録画面
Route::get('/register', function () { 
    return view('register');
});
Route::post('/register', function () { 
    return view('register');
});
