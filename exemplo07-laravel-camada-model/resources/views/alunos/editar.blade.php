@extends('template')

@section('titulo', 'Editar aluno')

@section('conteudo')

<h1>Editar aluno</h1>
<p><a 
        href="/alunos"
        class="btn btn-secondary">Voltar</a>
</p>

<form action="{{ $action }}" method="post">
    <p>
        <!-- GERANDO O TOKEN DE SEGURANÇA PARA OS FORMULÁRIOS -->
        {{ csrf_field() }}

        <label for="nome">Nome: </label> <br>
        <input type="text" name="nome" value="{{ $nome }}" class="form-control">
    </p>
    <p>
        <label for="email">Email: </label> <br>
        <input type="email" name="email" value="{{ $email }}" class="form-control">
    </p>
    <p>
        <input type="submit" value="Gravar" 
               class="btn btn-primary">
    </p>
</form>

@endsection