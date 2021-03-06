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

Route::get('/add', function(){ return view('add');});


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('/edit/{id}', 'AddressBookController@edit');
Route::get('/del/{id}', 'AddressBookController@del');
Route::post('/add', 'AddressBookController@store');
Route::patch('/edit', 'AddressBookController@update_person');

