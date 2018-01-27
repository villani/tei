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

// Rota padrão predefinida em todo projeto Laravel.
// - As rotas definem todos os endereços que devem ser acessíveis pelo URL. 
// - Um endereço a ser acessado, mas não definido neste arquivo, não deverá 
// funcionar.
Route::get('/', function () {
    return view('welcome');
});

// Definindo rota que retorna um texto simples.
Route::get('oi', function () {
    return 'Olá mundo!';
});

// Definindo rota que retorna uma visão e envia uma variável para essa visão.
Route::get('ola', function () {
    return view('ola', ['usuario' => 'Leonardo']);
});

// Definindo rota que retorna uma visão e envia um vetor para essa visão.
Route::get('principal', function () {
    $clubes = ['palmeiras', 'santos', 'corinthians', 'são paulo'];
    return view('principal', ['clubes' => $clubes]);
});
