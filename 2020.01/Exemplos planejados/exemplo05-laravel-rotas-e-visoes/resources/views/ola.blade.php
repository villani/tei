<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Página de saudação</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- RECURSO DO BLADE -->
                    <!-- Os 'slots' ( {{ $variavel }} ) são usados  para mostrar os valores de variáveis-->

                    <h1>Seja bem vindo {{ $usuario }}!</h1>

                    <!-- FIM - RECURSO DO BLADE -->

                    <p class="alert alert-danger">
                        <strong>ATENÇÃO:</strong>
                        Avaliação de tópicos especiais no próximo sábado!
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
