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

Route::get('/', ['as' => '/', function() {
	return View::make('index');
}]);

Route::group(['prefix' => 'auth'], function() {

    Route::get('login', ['as'   => 'login', function() {
        Former::framework('TwitterBootstrap3');
        return View::make('auth.login');
    }]);

    Route::post('login', [
        'as'  => 'post.login',
        'uses' => 'AuthController@login'
    ]);

    Route::get('logout', [
        'as'   => 'logout',
        'uses' => 'AuthController@logout'
    ]);


});
