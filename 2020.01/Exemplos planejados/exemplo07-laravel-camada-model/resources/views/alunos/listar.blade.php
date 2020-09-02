@extends('template')

@section('titulo', 'Listar alunos')

@section('conteudo')

<h1>Listar alunos</h1>
<p><a 
        href="/alunos/editar"
        class="btn btn-primary">Inserir aluno</a>
</p>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col" colspan="2">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alunos as $aluno)
        <tr>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->email }}</td>
            <!--
            - Passando o 'id' do respectivo registro para as rotas de 
            - 'alterar' ou 'excluir'.
            -->
            <td><a href="/alunos/editar/{{$aluno->id}}" class="btn btn-secondary btn-sm">Editar</a></td>
            <td><a href="/alunos/excluir/{{$aluno->id}}" class="btn btn-danger btn-sm">Excluir</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection