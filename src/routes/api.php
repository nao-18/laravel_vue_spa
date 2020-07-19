<?php

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => "auth.api"], static function () {
    Route::get('/todo', 'TodoController@get');
    Route::post('/todo', 'TodoController@post');
    Route::delete('/todo/{id}', 'TodoController@delete');
    Route::put('/todo/{id}', 'TodoController@update');
});
