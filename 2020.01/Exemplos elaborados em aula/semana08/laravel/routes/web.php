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

Route::get('/', function () {
    return view('welcome');
});

Route::get('saudar', function () {
    return 'Laravel executado com sucesso!';
});

Route::get('json', function () {
    // Não recomendado definir variáveis aqui.
    $presidentes = ['Bolsonaro', 'Temer', 'Dilma', 'Lula'];

    return $presidentes;
});
