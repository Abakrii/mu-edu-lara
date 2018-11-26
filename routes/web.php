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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/check', 'CheckController@edit')->name('check');
Route::put('/check_update/{id?}', 'CheckController@update')->name('check_update');
Route::group(['prefix' => '/' ,'middleware' => ['auth','gender']],

    function() {

    Route::get('/home', 'HomeController@index')->name('home');

});



