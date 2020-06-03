<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // ESPECIFICAR A CONEXÃO QUANDO MÚLTIPLAS CONEXÕES FOREM UTILIZADAS
    protected $connection = 'existente';

    // ESPECIFICAR O NOME DA TABELA SE A TABELA USAR UM PADRÃO DIFERENTE DE NOMES
    protected $table = 'categorias';
}
