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

Auth::routes(['register' => false, 'verify' => false, 'reset' => false]);

Route::redirect('/', url('login'));
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/events', 'EvenementController')->only(['index', 'show']);

Route::group(['prefix' => 'user'], function () {
    Route::get('events', 'UserController@events')->name('user.events');
    Route::get('outfits', 'UserController@outfits')->name('user.outfits');
    Route::get('account', 'UserController@account')->name('user.account');
});