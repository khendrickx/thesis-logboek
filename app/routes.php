<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {    return Redirect::route('logboek'); });
Route::get('/logboek', array('as' => 'logboek', 'uses' => 'LogboekController@getLogboek'));

Route::resource('login', 'UsersController');
Route::get('logout', array('uses' => 'UsersController@doLogout'));

Route::group(array('before' => 'auth', 'prefix' => 'admin'), function() {
    Route::resource('logboek', 'LogboekAdminController');
});