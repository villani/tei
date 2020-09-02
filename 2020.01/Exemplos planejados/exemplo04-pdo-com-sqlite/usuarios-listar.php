<?php
// Incluindo função que faz 'requires' automáticos das classes necessárias.
require 'villani/Autoloader.php';

// Disponibilizando classes de outros namespaces.
use villani\Usuario;

$usuarios = Usuario::getAll();

var_dump($usuarios);

$usuario = Usuario::find(2);

var_dump($usuario);

// Incluindo registro na fonte de dados por meio do URL.
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
// - 'filter_input' permite recuperar e validar o valor de um URL reduzindo o
// número de falhas. Retorna algum valor se houver sucesso, 'false' se não 
// passar no filtro e 'null' se o parâmetro não tiver sido definido.

if ($id) { // Não entra no 'if' se $id for nulo ou falso.
    $name = filter_input(INPUT_GET, 'name');
    $login = filter_input(INPUT_GET, 'login', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_GET, 'password');

    $user = new Usuario($id, $name, $login, $password);
    $user->save();
}
