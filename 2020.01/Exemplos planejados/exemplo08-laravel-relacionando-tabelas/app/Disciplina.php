<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Definindo relacionamento do modelo Disciplina com o modelo Matrícula.
 * 
 * @author Prof. Me. Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class Disciplina extends Model
{
    // PERMITINDO O USO DO MÉTODO Disciplina::create PARA INSERIR NOVOS REGISTROS.
    protected $fillable = ['nome'];

    /**
     * Definindo que UM objeto Disciplina pode ter MUITOS objetos Matricula.
     * 
     * @return array Um vetor de objetos Matricula que se relacionam com o 
     * referido objeto Disciplina instanciado.
     */
    public function matriculas()
    {
        return $this->hasMany('App\Matricula');
    }
}
