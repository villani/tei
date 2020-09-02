<?php

$disciplina = $argv[1] ?? 'vazio';

foreach ($_SERVER as $chave => $valor) {
    print "[$chave]: $valor \n"; // terminal
    //print "<b>[$chave]</b>: <em>$valor<em> <br>"; // web
}

print "PARÂMETRO: " . $disciplina . "\n";