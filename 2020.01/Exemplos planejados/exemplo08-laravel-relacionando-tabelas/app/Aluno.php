<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Definindo relacionamento do modelo Aluno com o modelo Matricula.
 * 
 * @author Prof. Me. Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class Aluno extends Model
{
    // PERMITINDO O USO DO MÉTODO Aluno::create PARA INSERIR NOVOS REGISTROS.
    protected $fillable = ['nome', 'email'];

    /**
     * Definindo que UM objeto Aluno pode ter MUITOS objetos Matricula.
     * 
     * @return array Um vetor de objetos Matricula que se relacionam com o 
     * referido objeto Aluno instanciado.
     */
    public function matriculas()
    {
        return $this->hasMany('App\Matricula');
    }
}
