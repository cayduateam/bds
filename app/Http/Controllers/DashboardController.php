<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct(){

    }
    public function index(){
    	$user = Auth::user();

    	return view('dashboard/index',['user' => $user]);
    }

    public function login(){
    	return view('dashboard/login');
    }

    public function postLogin(Request $request){
    	$this->validate($request,
		[
			'username' => 'required',
			'password' => 'required|min:3|max:50',
		],
		[
			'username.required' => 'Please input username',
			'password.required' => 'Please input password',
			'password.min' => 'Password too short',
			'password.max' => 'Password too long'
		]);

		if(Auth::attempt(['username' => $request->username,'password' => $request->password,'is_admin' => 1]))
		{
			return redirect('dashboard/index');
		}
		else{
			return redirect('dashboard/login')->with('message', 'Login incorrect');
		}
    }

    public function logout(){
    	Auth::logout();
    	return redirect('dashboard/login');
    }
}
