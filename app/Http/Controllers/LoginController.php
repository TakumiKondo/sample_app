<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /**
     * Show Login Form.
     *
     * @return \Illuminate\Http\Response
     */
	public function loginForm(){
		return view('login');
	}

    /**
     * User login proccess.
     *
     * @param  \App\Http\Requests\LoginRequest $request
     * @return \Illuminate\Http\Response
     */
	public function login(LoginRequest $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('user_name', $user->name);
            return view('home');
        }else{
            $msg = "ログインに失敗しました。E-mailとパスワードをご確認ください。";
            return view('login')->with('msg', $msg);  
        }
	}

    /**
     * User logout proccess.
     *
     * @param  \Illuminate\Http\Request; $request
     * @return \Illuminate\Http\Response
     */
	public function logout(Request $request){
		Auth::logout();
        $request->session()->flush();
		return view('home');
	}
}
