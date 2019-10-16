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
Route::get('me/events', 'EvenementController@me')->name('events.me');

Route::group(['prefix' => 'user'], function () {
    Route::get('events', 'UserController@events')->name('users.events');
    Route::get('outfits', 'UserController@outfits')->name('users.outfits');
    Route::get('profil', 'UserController@profil')->name('users.profil');
});