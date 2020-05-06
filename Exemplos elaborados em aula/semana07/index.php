<?php

require 'Conexao.php';

// Abrindo a conexão com a base.
Conexao::conectar();

// Inserindo registro na tabela "categorias".
Conexao::inserirRegistro('categorias', ['usuario_id'=>2, 'nome'=>'Economia']);

// Inserindo registro na tabela "usuarios"
Conexao::inserirRegistro('usuarios', ['nome'=>'FHC','email'=>'fhc@bol.com.br']);

// Obtendo os registros da tabela "usuarios"
$usuarios = Conexao::obterRegistros('usuarios');

// Obtendo os registros da tabela "categorias"
$categorias = Conexao::obterRegistros('categorias');

// Exibindo os valores das varíaveis definidas.
echo "\n\nUsuários\n\n";
var_dump($usuarios);

echo "\n\nCategorias\n\n";
var_dump($categorias);
