<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // DEFININDO OS CAMPOS PREENCHIVEIS DE UM MODELO Categoria
    protected $fillable = ['usuario_id','nome'];

    // Uma Categoria pertence a um Usuário.
    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
}
