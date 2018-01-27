<?php
// Incluindo função que faz 'requires' automáticos das classes necessárias.
require 'vendor/villani/Autoloader.php';

// 'REQUIRES' DESNECESSÁRIOS SE HOUVER AUTOLOADER
//require './vendor/villani/academico/Atividade.php';
//require './vendor/villani/corporativo/Atividade.php';
// Declaração necessária quando usar classes de outro namespace.
use villani\academico\Atividade;
// Atribuindo um apelido para classe com o mesmo nome, porém de 'namespace' diferente.
use villani\corporativo\Atividade as AtividadeCorporativa;

// Criando objetos de classes de outro namespace.
$obj = new Atividade();
$obj = new AtividadeCorporativa();

// Criando objetos de classes de outro namespace, porém sem a necessidade da declaração 'use'.
$obj = new villani\corporativo\Atividade();
