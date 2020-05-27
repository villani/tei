<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Definindo uma região editável -->
    <title>@yield('title')</title>
</head>
<body>
    <h1>Site Menu</h1>
    <ul>
        <li><a href="home">Home</a></li>
        <li><a href="about">About</a></li>
        <li><a href="customers">Customers</a></li>
    </ul>
    <!-- Definindo uma região editável -->
    @yield('body')
</body>
</html>