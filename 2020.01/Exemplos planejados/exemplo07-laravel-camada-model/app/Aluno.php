<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	// PERMITINDO O USO DO MÉTODO Aluno::create PARA INSERIR NOVOS REGISTROS
   protected $fillable = ['nome', 'email'];
}
