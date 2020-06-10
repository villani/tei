<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // DEFININDO OS CAMPOS PREENCHIVEIS DE UM MODELO Usuario
    protected $fillable = ['nome','email','senha','nivel'];

    // Um Usuário tem muitas Categorias.
    public function categorias()
    {
        return $this->hasMany('App\Categoria');
    }
}
