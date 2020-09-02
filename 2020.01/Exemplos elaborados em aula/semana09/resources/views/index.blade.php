<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial do Projeto Laravel</title>
</head>
<body>
    <h1>Página inicial do Projeto Laravel</h1>
    <p>Olá {{ ucfirst('leonardo') }}</p>
    
    <h3>Menu</h3>
    <ol>
        <li>
            <a href="/noticias">Listar as notícias</a> <br>
            Exibe a página com as notícias do portal. Foi apresentado o conteúdo de duas
            variáveis. Foi usada uma estrutura de repetição e uma de seleção.
        </li>
        <li>
            <a href="/contato">Entre em contato conosco</a> <br>
            Apresenta um formulário para contato e o conteúdo de duas variáveis. 
            Uma estrutua de seleção é usada.
        </li>
        <li>
            <a href="/sobre">Sobre a empresa</a> <br>
            Apresenta informações sobre a empresa (lorem) e o conteúdo de outras duas 
            variáveis. Um estrutura de repetição é usada.
        </li>
    </ol>

    <p>
        O Item 1 foi feito em aula. Os Itens 2 e 3 serão elaborados agora por vocês.
        Alunos ausentes e que estão assistindo a gravação dessa aula, deverão implementar
        os Itens 2 e 3, enviar para o Github a implementação e colar o link para o Github
        como resposta para a tarefa criada na Seção 11. 
    </p>
    

    <h2>Ministérios do Governo Federal</h2>

    <ul>
    
    @foreach ($ministerios as $ministerio)
    
        <li>{{$ministerio}}</li>
    
    @endforeach
    
    </ul>

</body>
</html>