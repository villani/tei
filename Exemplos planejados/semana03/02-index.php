<?php

// Disponibiliza neste arquivo as definições de um tipo Usuario.
require 'Usuario.php';

// Instanciando um objeto do tipo Usuario.
$usuario = new Usuario; // __construct.

// Alterando os valores dos atributos de um Usuario.
// - Como tais atributos estão encapsulados, o método mágico __set é chamado.
$usuario->nome = 'Bolsonaro'; // __set ($atributo = 'nome', $valor = 'Bolsonaro').
$usuario->email = 'bolso@gmail.com'; // __set ($atributo = 'email', $valor = 'bolso@gmail.com').

// Obtendo o valor do atributo 'nome'.
// - Como o atributo está encapsulado, o método mágico __get é chamado.
print "Nome: $usuario->nome\n"; // __get ($atributo = 'nome').

// Chamada explícita do método 'autenticar'.
print "Autenticado? " . $usuario->autenticar() . "\n";