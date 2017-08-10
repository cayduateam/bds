<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class AuthController extends Controller
{
    public function login(Request $request){
    	$name = $request['username'];
    	$pass = $request['password'];

    	// $user = User::find(2);
    	// Auth::login($user);
    	// return view('loginok',['user' => Auth::user()]);


    	if(Auth::attempt(['name' => $name,'password' => $pass])){
    		return view('loginok',['user' => Auth::user()]);
    	}
    	else{
    		return view('myform',['error' => 'Login fail']);
    	}
    }
}
