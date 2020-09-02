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

Route::get('/alunos', 'Alunos@index');

Route::get('/alunos/editar/{id?}', 'Alunos@editar');

Route::get('/alunos/excluir/{id}', 'Alunos@excluir');


// Definindo rotas que serão acessadas via método POST.

Route::post('/alunos/inserir', 'Alunos@inserir');

Route::post('/alunos/alterar/{id}', 'Alunos@alterar');

