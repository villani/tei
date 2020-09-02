<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    // DEFINIR OS CAMPOS PREENCHÍVEIS
    protected $fillable = ['usuario_id', 'categoria_id', 'titulo', 'resumo', 'conteudo'];

    // DEFINIR OS RELACIONAMENTOS
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Comentario');
    }

    public function avaliacoes()
    {
        return $this->hasMany('App\Avaliacao');
    }
}
