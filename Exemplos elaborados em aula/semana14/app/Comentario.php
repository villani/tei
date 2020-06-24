<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    // DEFINIR OS CAMPOS PREENCHÍVEIS
    protected $fillable = ['usuario_id', 'noticia_id', 'comentario'];

    // DEFINIR OS RELACIONAMENTOS
    public function usuario() 
    {
        return $this->belongsTo('App\User');
    }

    public function noticia() 
    {
        return $this->belongsTo('App\Noticia');
    }
}
