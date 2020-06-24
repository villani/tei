<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // DEFINIR QUAIS OS CAMPOS PREENCHÍVEIS
    protected $fillable = ['usuario_id', 'nome'];

    // DEFINIR OS RELACIONAMENTOS
    public function usuario() 
    {
        return $this->belongsTo('App\User');
    }

    public function noticias() 
    {
        return $this->hasMany('App\Noticia');
    }
}
