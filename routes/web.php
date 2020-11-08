<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();
Route::get('/', 'TopController@index')->name('top');
Route::get('/random/tell', 'RandomTellController@create')->name('random_tell.create');
Route::get('/room/create', 'TellRoomController@create')->name('tell_room.create');


//TwitterOAuth
Route::get('/auth/{service}', 'OAuthLoginController@getTwitterAuth')->where('service', 'twitter');
Route::get('/auth/{service}/logout', 'OAuthLoginController@logout')->where('service', 'twitter');
Route::get('/auth/{service}/callback', 'OAuthLoginController@authTwitterCallback');

