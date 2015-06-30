<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/images/{fileName}', ['uses' => 'ImageController@show']);

/*
**	Photo Resource
*/
Route::group(['prefix' => 'api/v1'], function () {
    Route::get('photos/trashes', ['uses' => 'PhotoController@readTrashes']);
    Route::get('photos', ['uses'         => 'PhotoController@read']);
    Route::post('photos', ['uses'        => 'PhotoController@create']);
    Route::patch('photos', ['uses'       => 'PhotoController@modifyMany']);
    Route::delete('photos', ['uses'      => 'PhotoController@deleteMany']);

    Route::get('photos/{id}', ['uses'    => 'PhotoController@show']);
    Route::put('photos/{id}', ['uses'    => 'PhotoController@update']);
    Route::patch('photos/{id}', ['uses'  => 'PhotoController@modify']);
    Route::delete('photos/{id}', ['uses' => 'PhotoController@delete']);
});
