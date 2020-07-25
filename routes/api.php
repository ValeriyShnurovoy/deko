<?php

use Illuminate\Http\Request;
use App\Http\Controllers\NewsController;

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

Route::get('news', 'NewsController@showAll');
Route::get('news/{rowNumber}/{offset?}', 'NewsController@index');
Route::get('oneNews/{id}', 'NewsController@show');
Route::post('create', 'NewsController@store');
Route::put('update', 'NewsController@update');
