<?php

// HABILITANDO O VETOR $_SESSION.
session_start();

// GRAVANDO VALORES NA SESSÃO.
$_SESSION['usuario'] = 'Dória';
$_SESSION['senha'] = 'secreta';

print "<p>Valores gravados com sucesso.</p>";
print "<p><a href=\"usa-sessao.php\">Próxima página</a>.</p>";