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
		//admin news
	    Route::get('list','NewsController@getList');

		Route::get('add','NewsController@getaddNews')->name('getaddNews');
        Route::post('add',['as' => 'postaddNews','uses' => 'NewsController@postaddNews']);

		Route::get('edit/{idNews}','NewsController@edit');
		Route::post('edit/{idNews}','NewsController@postEdit');
        //admin news end

        //admin new category
        Route::get('list','NewsController@getListCat');

        Route::get('add','NewsController@getaddNewsCat')->name('getaddNewsCat');
        Route::post('add',['as' => 'postaddNewsCat','uses' => 'NewsController@postaddNewsCat']);

        Route::get('edit/{idCat}','NewsController@editCat');
        Route::post('edit/{idCat}','NewsController@postEditCat');
        //admin new category end
	});
});