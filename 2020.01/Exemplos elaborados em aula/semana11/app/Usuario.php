<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // ESPECIFICAR A CONEXÃO QUANDO MÚLTIPLAS CONEXÕES FOREM UTILIZADAS
    protected $connection = 'existente';

    // ESPECIFICAR O NOME DA TABELA SE A TABELA USAR UM PADRÃO DIFERENTE DE NOMES
    // PADRÃO DE NOMES
    // - Nome do modelo no plural, com todas as letras minúsculas.
    //protected $table = 'usuarios';
}
