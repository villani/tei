<?php

// HABILITANDO O $_SESSION
session_start();

// RECUPERANDO VALORES DA SESSÃO
print 'Olá ' . $_SESSION['usuario'];

print "<p><a href=\"destroi-sessao.php\">Destruir sessão</a>";