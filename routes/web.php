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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get(url()->current(), 'HomeController@language');

Route::resource('usuari', 'UsersController');
Route::resource('curs', 'CursosController');
Route::resource('pagament', 'DadesBancariesController');
Route::resource('alumnes', 'AlumnesInscritsController');
Route::resource('professors', 'ProfessorsImparteixenController');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');