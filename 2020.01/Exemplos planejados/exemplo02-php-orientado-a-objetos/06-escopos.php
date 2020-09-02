<?php
/* REVISÃO DE ESCOPOS EM PHP */

/* a) ESCOPO GLOBAL */
$a = 2;

/* b) c) ESCOPO DE ESTRUTURAS DE CONTROLE */
if (true) {
    $b = 5 + $a;
}

for ($c = 0; $c < 5; $c++) {
    
}

/* d) ESCOPO DE FUNÇÕES */
function teste()
{
    $d = 7 + $GLOBALS['c'];
    print "d = $d \n";
}

class Classe
{
    /* e) ESCOPO DE CLASSES */
    public static $e = 13;

    
    public static function metodo()
    {
        /* f) ESCOPO DE MÉTODO */
        $f = 15 + $GLOBALS['b'] + $a; // $a não existe neste escopo.
        print "f = $f \n";
    }
}

/* TESTANDO ESCOPOS */
print "a = $a \n"; // global.

print "b = $b \n"; // estrutura de controle - if.

print "c = $c \n"; // estrutura de controle - for.

print "d = $d \n"; // funções.
teste();           // dentro da função - ok.
print "d = $d \n"; // após a função ser executada - falha.

print "e = $e \n"; // classe.
print "e = " . Classe::$e . "\n"; // usando operador de resolução de escopo - ok.

print "f = $f \n"; // método.
Classe::metodo(); // dentro do método - ok.

/*
 * IMPORTANTE
 * 
 * - Em PHP, as estruturas de controle não determinam escopo de variáveis.
 * 
 */