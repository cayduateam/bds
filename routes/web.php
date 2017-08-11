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

Route::get('/', function () {
    return view('index.index');
});

//Dashboard
Route::get('dashboard/login','DashboardController@login');
Route::post('dashboard/postLogin','DashboardController@postLogin')->name('adminPostLogin');
Route::get('dashboard/logout','DashboardController@logout');

Route::group(['prefix' => 'dashboard','middleware' => 'AdminLoginMiddle'],function(){
	Route::get('index','DashboardController@index');
	Route::group(['prefix' => 'news'],function(){
		Route::get('list','SlideController@list');
		Route::get('add','SlideController@addNew');
		Route::get('edit/{idSlide}','SlideController@getEdit');
		Route::post('edit/{idSlide}','SlideController@postEdit');
	});
});