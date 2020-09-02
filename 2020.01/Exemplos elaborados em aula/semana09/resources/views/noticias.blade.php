<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de notícias</title>
</head>
<body>
    <h1>Portal de notícias</h1>
    <p>Olá <strong>{{ $usuario['nome'] }}</strong></p>
    <h2>Menu</h2>
    <ul>
        <li>Categorias</li>
        <li>Editar perfil</li>
        @if($usuario['acesso'] < 2)
        <li>Criar notícia</li>
        @endif
        @if ($usuario['acesso'] < 1)
        <li>Lista de usuários</li>
        @endif
    </ul>
    @foreach ($noticias as $noticia)
    <h3>{{ $noticia['titulo'] }}</h3>
    <p>{{ $noticia['conteudo'] }}</p>
    <p><a href="{{ $noticia['link'] }}">Saiba mais...</a></p>
    @endforeach
</body>
</html>