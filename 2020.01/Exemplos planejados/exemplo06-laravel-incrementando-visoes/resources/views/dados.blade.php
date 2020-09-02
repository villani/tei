<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Recebendo parâmetros</title>
    </head>
    <body>
        <h1>Recebendo parâmetros</h1>

        <!-- 
         - Parâmetro definido e enviado por meio do arquivo 'web.php'. O mais 
         - adequado é que o arquivo 'web.php' seja usado apenas para definir
         - rotas. Definição de variáveis devem acontecer no controlador. A visão
         - deve ser usada apenas para apresentar os dados definidos.
        -->
        <p>Parâmetro recebido: {{ $valor }}</p>
    </body>
</html>