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

Route::group(['prefix' => 'dashboard'],function(){
	Route::get('index','DashboardController@index');
	Route::group(['prefix' => 'news'],function(){
		Route::get('list','NewsController@getList');

		Route::get('add','NewsController@getaddNews')->name('getaddNews');
        Route::post('add','NewsController@postaddNews');

		Route::get('edit/{idNews}','NewsController@edit');
		Route::post('edit/{idNews}','NewsController@postEdit');
	});
});