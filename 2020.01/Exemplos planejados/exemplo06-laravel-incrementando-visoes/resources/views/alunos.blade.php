<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Exibindo todos os alunos</title>
    </head>
    <body>
        <h1>Exibindo todos os alunos</h1>
        <ul>

            <!-- 
             - Usando a diretiva blade 'foreach' para exibir os elementos do 
             - vetor $alunos que foi definido em 'AlunosController' e passado 
             - por parâmetro para esta visão.
            -->
            @foreach ($alunos as $aluno)
            <li> ({{ $aluno->id }}) - {{ $aluno->nome }}</li>
            @endforeach
        </ul>
    </body>
</html>