<?php

use Illuminate\Support\Facades\Route;

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

// ROTAS PARA O - Exercício 06

// Root
Route::get('/', 'RootController@index');                        // Página inicial

// Categoria
Route::get('categoria', 'CategoriaController@index');           // Lista de categorias
Route::get('categoria/{id}/edit', 'CategoriaController@edit');  // Edição de categoria

// Notícia
Route::get('noticia', 'NoticiaController@index');               // Lista de notícias
Route::get('noticia/{id}/edit', 'NoticiaController@edit');      // Edição de notícia
Route::get('noticia/{id}', 'NoticiaController@show');           // Leitura de notícias
Route::get('noticia/categoria/{id}', 'NoticiaController@showCategory'); // Notícias da categoria

// Usuário
Route::get('usuario', 'UsuarioController@index');               // Lista de usuários
Route::get('usuario/auth', 'UsuarioController@auth');           // Entrar
Route::get('usuario/create', 'UsuarioController@create');       // Criar conta
Route::get('usuario/{id}/show', 'UsuarioController@show');      // Dados pessoais

// fim - ROTAS PARA O - Exercício 06

Route::get('home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('customers', function () {
    return view('customers');
});