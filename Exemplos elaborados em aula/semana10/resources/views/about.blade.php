<!-- Estendendo uma template -->
@extends('template1')

<!-- Preenchendo uma região editável com texto-->
@section('title', 'Sobre a empresa')

<!-- Preenchendo uma região editável com textos e 'tags'-->
@section('body')

    <h1>Sobre a empresa</h1>

    <p>Parágrafo do texto institucional sobre a empresa.</p>

    <p><a href="/home">Voltar para a página inicial</a>.</p>

@endsection