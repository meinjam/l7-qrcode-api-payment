<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('qrcodes', 'QrcodeController');
    Route::resource('roles', 'RoleController');
    Route::resource('transactions', 'TransactionController');
    Route::resource('users', 'UserController');
});
