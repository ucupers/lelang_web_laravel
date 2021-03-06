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
    return view('index');
});
Route::get('/about', 'aboutController@about');
Route::get('/index', 'aboutController@home');
Route::get('/indexUser', 'indexUser@home');
Route::resource('bidder', 'BidderController'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home_user', 'User@index');
Route::get('/login_user', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register_user', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');