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
    Route::resource('transactions', 'TransactionController');
    Route::resource('users', 'UserController');
    Route::group(['middleware' => 'checkmoderator'], function () {
        Route::get('/users', 'UserController@index')->name('users.index'); // only admin and moderators can acess this
    });
    Route::resource('roles', 'RoleController')->middleware('checkadmin'); // only admin can acess this
});
