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


Route::auth();
//Route::get('/home', 'HomeController@index');

Route::get('/','PagesController@home');

Route::get('/cal','PagesController@cal');

Route::get('/calPop','PagesController@calPop');

Route::get('/delEvent','PagesController@delEvent');

Route::get('/account','PagesController@account');
 
Route::get('/accountEdit','PagesController@accountEdit');

Route::get('/myEvent','PagesController@myEvent');

Route::get('/myWear','PagesController@myWear');

Route::get('/accueil','PagesController@accueil');

Route::get('/event','PagesController@event');





// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/calendar', function () {
//     return view('calendar');
// });

// Route::get('/calendarPOP', function () {
//     return view('calendarPOP');
// });

// Route::get('/deletingEvent', function () {
//     return view('deletingEvent');
// });

// Route::get('/myAccount', function () {
//     return view('myAccount');
// });

// Route::get('/myAccountEdit', function () {
//     return view('myAccountEdit');
// });

// Route::get('/myEvent', function () {
//     return view('myEvent');
// });

// Route::get('/myWear', function () {
//     return view('myWear');
// });





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
