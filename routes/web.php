<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



/*
*Lorem resource
*/
Route::get('/lorem', 'LoremController@index')->name('lorem.index');
Route::get('/lorem/show','LoremController@showLorem');
Route::post('/lorem/show','LoremController@getLorem');

Route::get('/user','UserController@index');
Route::get('/user/show','UserController@show');
Route::post('/user/show','UserController@getUser');

Route::get('/password','PasswordController@index');
Route::get('/password/show','PasswordController@show');
Route::post('/password/','PasswordController@getPassword');



Route::get('/', function () {
    return view('welcome');
});