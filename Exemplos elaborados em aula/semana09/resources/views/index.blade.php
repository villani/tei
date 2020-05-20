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

    <h2>Ministérios do Governo Federal</h2>

    <ul>
    
    @foreach ($ministerios as $ministerio)
    
        <li>{{$ministerio}}</li>
    
    @endforeach
    
    </ul>

</body>
</html>