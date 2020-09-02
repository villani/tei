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

// HABILITANDO O MIDDLEWARE 'cors' PARA AS ROTAS A SEGUIR.
Route::get('/categorias', 'Categorias@index')->middleware('cors');
Route::post('/categorias/inserir', 'Categorias@inserir')->middleware('cors');
