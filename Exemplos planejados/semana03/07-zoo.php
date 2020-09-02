<?php

// Arquivo que faz automaticamente o 'require' de arquivos necessários.
require 'autoloader.php';

/**
 * Imprime o som produzido pela boca de animais.
 */
function iniciar (AnimalInterface $obj)
{
    echo $obj->toTalk();
}

// Instancia um objeto do tipo 'Dog' e armazena na variável $obj a referência para ele.
$obj = new Dog;

// Chamada da função 'iniciar'.
iniciar($obj);

// chamada da função 'iniciar' com um parâmetro de tipo incorreto.
//iniciar(new Tomato); Tomato não fala.

// Chamada da função 'iniciar' com outro parâmetro do tipo correto.
iniciar(new Cat);
