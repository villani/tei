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

// Nomeando rotas
Route::get('/verificar', 'UsersController@verificar')->name('login');

Route::get('/autenticar/{email}/{senha}', 'UsersController@autenticar');

// Protegendo rotas
Route::get('/protegido', 'UsersController@painel')->middleware('auth');

Route::get('/logout', 'UsersController@logout');
