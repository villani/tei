<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias do Portal</title>
</head>
<body>
    <h1>Notícias do Portal</h1>
    @foreach ($noticias as $noticia)
    <ul>
        <li><strong>{{$noticia->titulo}}</strong></li>
        <ul>
            <li>{{$noticia->resumo}}</li>
        </ul>
    </ul>
    @endforeach
</body>
</html>