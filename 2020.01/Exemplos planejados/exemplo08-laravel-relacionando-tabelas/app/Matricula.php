<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Definindo relacionamento do modelo Matricula com os modelos Aluno e 
 * Disciplina.
 * 
 * @author Prof. Me. Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class Matricula extends Model
{
    // PERMITINDO O USO DO MÉTODO Matricula::create PARA INSERIR NOVOS REGISTROS.
    protected $fillable = ['aluno_id', 'disciplina_id', 'semestre'];

    /**
     * Definindo que UM objeto Matricula pertence a UM objeto Disciplina.
     * 
     * @return Disciplina Um objeto Disciplina que se relaciona com o referido 
     * objeto Matricula instanciado.
     */
    public function disciplina()
    {
        return $this->belongsTo('App\Disciplina');
    }

    /**
     * Definindo que UM objeto Matricula pertence a UM objeto Aluno.
     * 
     * @return Aluno Um objeto Aluno que se relaciona com o referido objeto 
     * Matricula instanciado.
     */
    public function aluno()
    {
        return $this->belongsTo('App\Aluno');
    }
}
