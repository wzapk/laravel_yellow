<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api) {
    $api->get('/stat', function() {
        return 'dingo api is ok.';
    });
    $api->get('/contents', 'App\Api\V1\Controllers\ContentsController@index');
    $api->get('/content/{id}', 'App\Api\V1\Controllers\ContentsController@show');
});