<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::group(['prefix' => 'admin'], function(){
        Route::get('dashboard', 'AdminController@index');
        Route::get('new', 'AdminController@newHostel');
        Route::get('rooms', 'AdminController@rooms' );

        Route::post('new', 'AdminController@addHostel');
        Route::post('rooms', 'AdminController@addRooms' );

        Route::get('pictures', 'AdminController@showPictures');
        Route::post('pictures', 'AdminController@addPictures');
    });

    Route::get('/', 'HostelsController@index');

    Route::get('contact', function(){
        return view('contact');
    });

    Route::group(['prefix' => 'hostel'], function(){
        Route::get('{slug}', 'HostelsController@showHostel');
    });

    Route::group(['prefix' => 'cart'], function(){
        Route::get('cartitems', 'CartController@showCart');
        Route::post('cartitems', 'CartController@addToCart');
    });
});
