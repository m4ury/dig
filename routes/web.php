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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('paciente', 'PacienteController');

Route::resource('user', 'UserController');

Route::resource('control', 'ControlController');

Route::resource('familia', 'FamiliaController');

Route::resource('product', 'ProductController');








