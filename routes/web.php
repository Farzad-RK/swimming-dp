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

//admin login routes
Route::get('/admin/login','AdminController@login');
Route::get('/admin/logout','AdminController@logout');
Route::post('/admin/login','AdminController@authenticate');
Route::middleware('auth')->get('/admin/dashboard','AdminController@dashboard');
//admin match routes
Route::middleware('auth')->get('/admin/matches','MatchController@index');
Route::middleware('auth')->post('/admin/matches/create','MatchController@create');

//admin matchType routes
Route::middleware('auth')->get('/admin/matchtype','MatchTypeController@index');
Route::middleware('auth')->post('/admin/matchtype/create','MatchTypeController@create');

//user routes
Route::get('/login','UserController@login');
Route::post('/login','UserController@authenticate');
Route::post('/login/register','UserController@create');


//swimmer routes
Route::middleware('auth')->get('/swimmer/dashboard','SwimmerController@dashboard');
Route::middleware('auth')->get('/swimmer/logout','SwimmerController@logout');
Route::middleware('auth')->post('/swimmer/update','SwimmerController@update');
//coach routesd
Route::middleware('auth')->get('/coach/dashboard','CoachController@dashboard');
Route::middleware('auth')->get('/coach/logout','CoachController@logout');
Route::middleware('auth')->post('/coach/update','CoachController@update');
Route::middleware('auth')->post('/coach/createteam','CoachController@createTeam');


Route::get('/' , function(){

     return view('main.index');
});


Route::group(['prefix' => 'voyager'], function () {
    Voyager::routes();
});
