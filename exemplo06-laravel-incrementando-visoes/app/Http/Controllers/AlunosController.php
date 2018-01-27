<?php

namespace Semana12\Http\Controllers;

/**
 * Disponibilizando a classe Aluno da camada Model.
 */
use Semana12\Aluno;

/**
 * Obtém ou envia para a camada Model os dados apresentados ou obtidos da camada
 * View.
 * 
 * @author Prof. Me. Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class AlunosController extends Controller
{
    /**
     * Obtém todos os registros da tabela 'alunos' e passa por parâmetro para a 
     * view 'alunos'.
     * 
     * @return View A view 'alunos'.
     */
    public function index()
    {
        $alunos = Aluno::all();
        $variaveisView = [
            'alunos' => $alunos,
        ];
        return view('alunos', $variaveisView);

    }

    /**
     * Obtém o registro da tabela 'alunos' que corresponde ao 'id' informado e 
     * retorna um vetor com os dados desse registro. Por padrão, quando um vetor
     * é retornado por um controlador ele é convertido para um formato Json.
     * 
     * @param int $id A identificação exclusiva de um registro.
     * @return array Um vetor convertido para Json com os dados do registro
     * indicado.
     */
    public function json($id = 1)
    {

        $aluno = Aluno::find($id);
        $vetor = [
            'id' => $aluno->id,
            'nome' => $aluno->nome,
        ];
        return $vetor;
    }
}
