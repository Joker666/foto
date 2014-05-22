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
/*
 * Change Laravel Blade Tags
 */
Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data


Route::get('/login', [
    'as' => 'login',
    'uses' => 'UsersController@login'
]);

Route::post('/login', [
    'as' => 'login',
    'uses' => 'UsersController@store'
]);

Route::get('/', function(){
    return View::make('home');
});



Route::group(['before' => 'auth'], function () {

    Route::get('/home', [
        'as' => 'home',
        'uses' => 'UsersController@index'
    ]);

    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'UsersController@logOut'
    ]);
});