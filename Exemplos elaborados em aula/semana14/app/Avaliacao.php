<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    // DEFINIR OS CAMPOS PREENCHÍVEIS
    protected $fillable = ['usuario_id', 'noticia_id', 'relevante'];

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
