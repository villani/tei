<!-- Estendendo uma template -->
@extends('template1')

<!-- Preenchendo uma região editável com texto-->
@section('title', 'Página inicial')

<!-- Preenchendo uma região editável com textos e 'tags'-->
@section('body')

<h1>Página inicial do site</h1>

<p>Parágrafo da página inicial.</p>

<p><a href="/about">Sobre a empresa</a>.</p>

@endsection