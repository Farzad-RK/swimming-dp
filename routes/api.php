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


//login route
Route::post('/login' ,'APILoginController@getToken');

//User routes
Route::middleware('auth:api')->get('/user','UserController@getUser');
Route::middleware('auth:api')->post('/user/update','UserController@updateUser');

//refree routes
Route::middleware('auth:api')->get('/refree/currentMatches','RefreeController@currentMatches');
Route::middleware('auth:api')->get('/refree/prevmatches','RefreeController@prevMatches');
Route::middleware('auth:api')->post('/refree/checkswimmer','RefreeController@checkSwimmer');
Route::middleware('auth:api')->post('/refree/setresult','RefreeController@setResult');


//matches

Route::middleware('auth:api')->get('/matches/index','MatchController@index');
