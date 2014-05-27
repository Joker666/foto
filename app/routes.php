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


//Event::listen('illuminate.query', function($sql){
//   var_dump($sql);
//});

Route::get('/login', [
    'as' => 'login',
    'uses' => 'UsersController@getLogin'
]);

Route::post('/login', [
    'as' => 'login',
    'uses' => 'UsersController@login'
]);

Route::get('/', function(){
    return View::make('home');
});



Route::group(['before' => 'auth'], function () {

    Route::get('/home', [
        'as' => 'home',
        'uses' => 'ProfilesController@index'
    ]);

    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'UsersController@logOut'
    ]);

    Route::get('upload', 'ProfilesController@getUpload');

    Route::post('upload/{userID}', [
        'as' => 'upload',
        'uses' => 'ProfilesController@upload'
    ]);

    Route::delete('photo/delete/{id}', [
        'as' => 'deletePhoto',
        'uses' => 'ProfilesController@destroy'
    ]);
});