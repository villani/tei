<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Envia e obtém da fonte os dados requisitados pelo Controlador.
 * 
 * @author Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class Categoria extends Model
{
    /**
     * Define os campos da tabela 'Categorias' que podem ser preenchíveis pelo
     * método estático 'create'.
     *
     * @var array
     */
    protected $fillable = ['nome'];
}
