<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Backend routes
Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'middleware' => 'auth'], function() {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('contents', 'ContentsController@index')->name('contents');
    Route::get('contents/{id}', 'ContentsController@show')->name('content_show');
    Route::get('district', 'DistrictController@index')->name('district');
});