<?php
if (count($_POST) > 1) {
    var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário</h1>
    <form method="post">
        <p>
            E-mail: <br>
            <input type="email" name="email">
            <input type="hidden" name="secredo" value="123">
        </p>
        <p>
            <input type="submit" name="botao" value="Enviar">
        </p>
    </form>
</body>
</html>