<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Obtendo registros do banco via PDO</title>
    </head>
    <body>
        <h1>Obtendo registros do banco via PDO</h1>

        <!-- 
         - Conforme apresesntado no arquivo 'web.php', essa não é a maneira mais
         - adequada para se obter registros de uma fonte de dados e serve apenas
         - para contrastar com a maneira indicada em 'alunos.blade.php'. Neste
         - exemplo, @usuarios foi definido no direto no arquivo de rotas e sem
         - o intermédio do Controlador.
        -->
        @foreach ($usuarios as $usuario)
        <p>Id: {{ $usuario['id'] }}</p>
        <p>Nome: {{ $usuario['nome'] }}</p>
        <hr>
        @endforeach
    </body>
</html>