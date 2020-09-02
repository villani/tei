<?php

// Standard PHP Library.
spl_autoload_register(function ($classe) {

    // Concatena com ".php" e faz o 'require' do referido arquivo.
    require "$classe.php";
});