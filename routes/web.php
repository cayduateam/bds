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

// Route::get('/', function () {
//     return view('pages.index');
// });
Route::get('/','PageController@index');
Route::get('index','PageController@index');

Route::get('about','PageController@about');

//Category
Route::group(['prefix' => 'category'],function(){
    Route::get('view/{category_alias}',['as' => 'category.view','uses' => 'PageController@viewCategory']);
});

//Dashboard
Route::get('dashboard/login','DashboardController@login');
Route::post('dashboard/postLogin','DashboardController@postLogin')->name('adminPostLogin');
Route::get('dashboard/logout','DashboardController@logout');

Route::group(['prefix' => 'dashboard','middleware' => 'AdminLogin'],function(){
	Route::get('/','DashboardController@index');
	Route::get('index','DashboardController@index');
    Route::resource('news','NewsController');
    Route::resource('category','CategoryController');


    Route::resource('product-category','ProductCategoryController');
    Route::post('productCat/change',['as' => 'productCatChange','uses' => 'ProductCategoryController@ajaxList']);
    Route::post('productCat/parentchange',['as' => 'productCatPaChange','uses' => 'ProductCategoryController@parentChange']);

    Route::resource('product','ProductController');
    Route::post('product/parentchange',['as' => 'productPaChange','uses' => 'ProductController@parentChange']);
    
    
    Route::get('menu','ProductCategoryController@menu');
});