<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/post')->group(function () {
    Route::get('/index', 'PostController@index');
    Route::get('/show/{id}', 'PostController@show');
    Route::post('/create', 'PostController@store');
    Route::put('/update/{post}', 'PostController@update');
    Route::delete('/delete/{post}', 'PostController@destroy');
});
