<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = ['usuario_id', 'categoria_id', 'titulo', 'resumo', 'conteudo'];
}
