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








Route::get('/', function () {
    return view('welcome');
});