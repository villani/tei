<?php
require '03-Carro.php';
require '04-Fiat.php';

try {
    $obj = new Carro(1.8);
    $obj = new Fiat(1.4);
    $obj->modelo = 'Palio';
    $mensagem = 'Um objeto do tipo ' . get_class($obj) . ' foi criado com sucesso!';
} catch (TypeError $e) {
    $mensagem = 'Falha ao criar carro: ' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Criando objetos do tipo Carro</title>
    </head>
    <body>
        <h1>Criando objetos do tipo Carro</h1>
        <p>Mensagem: <?= $mensagem; ?></p>
        <?php if (!is_null($obj)): ?>
            <p>Modelo: <?= $obj->modelo; ?> </p>
            <p>Motor: <?= $obj->motor; ?></p>
        <?php endif; ?>
        <p>Carros criados: <?= Carro::$qtdeCarros; ?></p>
    </body>
</html>