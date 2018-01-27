<?php
// Disponibiliza a classe Aluno nesse arquivo.
require '01-Aluno.php';

try {
    $obj = new Aluno('Leonardo Villani', '2017'); // Chama o método mágico '__construct'.
    $mensagem = 'Aluno criado com sucesso!';
} catch (TypeError $e) {
    // Captura erros que podem ser lançados ao passar parâmetros inexperado para o construtor de Aluno.
    $mensagem = 'Falha ao criar aluno: ' . $e->getMessage();
} catch (Error $er) {
    $mensagem = 'Falha ao criar aluno: ' . $er->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Usa a classe Aluno</title>
    </head>
    <body>
        <h1>Usa a classe Aluno</h1>
        <p>Mensagem: <?= $mensagem; ?></p>
        <!--  IF - Evita mensagens de erros para o caso do objeto não existir -->
        <?php if (!is_null($obj)): ?>
            <p>Nome: <?= $obj->nome; ?> </p>
            <p>Matrícula: <?= $obj->matricula; // Chamada implícita do método '__get'  ?> </p>
            <p>Status: <?= $obj->verStatus(); // Chamada explicita de um método convencional  ?> </p>
        <?php endif; ?>
        <!--  FIM-IF - Evita mensagens de erros para o caso do objeto não existir -->
        <p>Alunos instanciados: <?= Aluno::contarAlunos(); // Chamada de um método estático   ?> </p>
    </body>
</html>