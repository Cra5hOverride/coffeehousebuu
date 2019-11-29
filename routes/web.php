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

Route::post('/login', 'Web\UserController@login')->name('login');
Route::get('/logout', 'Web\UserController@logout')->name('logout');
Route::get('/home', 'Web\UserController@home')->middleware('login')->name('home');

Route::get('/', function () {
    return view('pages.login.login');
})->middleware('nologin')->name('welcome');

Route::get('/test', function() {
    return view('pages.owner.addmanager');
});

