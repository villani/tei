<?php
// Definindo função que faz 'requires' automáticos de classes necessárias.
spl_autoload_register(function ($classe) {

    // DEFININDO O DIRETÓRIO BASE PARA OS 'REQUIRES'
    // - Obtendo caminho completo do arquivo e trocando as barras invertidas se 
    // for Windows.
    $dir_base = str_replace('\\', '/', __FILE__);

    // - A função 'str_replace' localiza no terceiro parâmetro todas as 
    // ocorrências do valor do primeiro parâmetro e substitui as ocorrências 
    // localizadas pelo valor do segundo parâmetro.
    // - Removendo do caminho o nome do fornecedor e do arquivo atual para 
    // alcançar os demais arquivos.
    $dir_base = str_replace('villani/Autoloader.php', '', $dir_base);

    // Trocando as barras do 'namespace' para encontrar o arquivo
    $arquivo = str_replace('\\', '/', $classe);

    // Compondo o caminho absoluto da classe e acrescentando a extensão '.php'.
    $arquivo = $dir_base . $arquivo . '.php';

    if (file_exists($arquivo)) {

        // Faz o require somente se o arquivo existir.
        require $arquivo;
    }
});
