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

// Mantendo rota padrão.
Route::get('/', function () {
    return view('welcome');
});

// Definindo rota que aciona o método 'index' do controlador 'AlunosController'.
Route::get('alunos', 'AlunosController@index');

// Definindo rota que aciona o método 'json' do controlador 'AlunosController'.
// Esse método estará preparado para receber um parâmetro que PODE vir pelo URL.
Route::get('json/{id?}', 'AlunosController@json');
