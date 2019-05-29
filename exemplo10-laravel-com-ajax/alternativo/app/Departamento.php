<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['nome'];

    public function empregados()
    {
        return $this->hasMany('App\Empregado');
    }
}
