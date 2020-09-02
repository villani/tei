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

// Mantendo a rota padrão
Route::get('/', function () {
	return view('welcome');
});

// Definindo uma rota que pode ou não receber um parâmetro 'valor' pelo URL. 
// Caso esse parâmetro não tenha sido definido, seu valor padrão será 1.
Route::get('dados/{valor?}', function ($valor = 1) {
    
    // Retornando uma visão e passando esse parâmetro para a visão.
	return view('dados', ['valor' => $valor]);
});

Route::get('banco', function () {

	// IMPORTANTE: O trecho de código a seguir NÃO deve ser usado em projeto reais.
	// Criado apenas para fins de comparação com o "jeito certo" usando Controller e Migrations

	$path = __DIR__ . '/../database/escola.db';
	$banco = new \PDO('sqlite:' . $path);
	$comando = $banco->query('SELECT * FROM usuarios');
	$usuarios = $comando->fetchAll();
	return view('banco', ['usuarios' => $usuarios]);

});
