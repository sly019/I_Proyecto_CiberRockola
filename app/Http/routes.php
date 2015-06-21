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

//Route::get('/', 'UserController@index');
Route::get('/', 'WelcomeController@index');

get( '/Login' , [
    'as' => 'User' ,
    'uses' => 'UserController@index'
] );

get( '/Register' , [
    'as' => 'User' ,
    'uses' => 'UserController@register'
] );

get( '/Songs' , [
    'as' => 'User' ,
    'uses' => 'SongsController@index'
] );

get( '/SongsCreate' , [
    'as' => 'User' ,
    'uses' => 'SongsController@create'
] );

post( '/Songs' , [
    'as' => 'User' ,
    'uses' => 'SongsController@create'
] );

Route::resource('songs', 'SongsController');