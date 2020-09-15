<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('chat', 'chat.index');
Route::get('chat/all', 'ChatController@index');
Route::post('chat/store', 'ChatController@store')->name('chat.store');
