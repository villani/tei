<?php
// Definindo função que faz 'requires' automáticos de classes necessárias.
spl_autoload_register(function ($classe) {

    // DEFININDO O DIRETÓRIO BASE PARA OS 'REQUIRES'
    // - Obtendo caminho completo do arquivo e trocando as barras invertidas se 
    // for Windows.
    $dir_base = str_replace('\\', '/', __FILE__);

    // - Removendo do caminho o nome do fornecedor e do arquivo atual para 
    // alcançar os demais arquivos.
    $dir_base = str_replace('villani/Autoloader.php', '', $dir_base);

    // Compondo o caminho absoluto da classe e acrescentando a extensão '.php'.
    $arquivo = $dir_base . $classe . '.php';

    // Trocando as barras do 'namespace' para encontrar o arquivo
    $arquivo = str_replace('\\', '/', $arquivo);

    if (file_exists($arquivo)) {

        // Faz o require somente se o arquivo existir.
        require ($arquivo);
    }
});
