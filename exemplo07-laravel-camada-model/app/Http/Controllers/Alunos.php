<?php
namespace App\Http\Controllers;

use App\Aluno;                  // ARQUIVO DA CAMANDA MODEL. OBTÉM DADOS DO SQLITE.
use Illuminate\Http\Request;    // DEFINE O TIPO DO OBJETO QUE CONTÉM OS DADOS DE UM FORMULÁRIO.

/**
 * Obtém ou envia para a camada Model os dados apresentados ou obtidos da camada
 * View.
 * 
 * @author Prof. Me. Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class Alunos extends Controller
{

    /**
     * Obtém todos os registros da tabela 'alunos' e passa por parâmetro para a 
     * view 'alunos'.
     * 
     * @return View A view 'listar'.
     */
    public function index()
    {
        // OBTENDO OS REGISTROS DA TABELA alunos
        $alunos = Aluno::all();

        // DEFININDO AS VARIÁVEIS QUE SERÃO PASSADAS PARA A VISÃO
        $vars = [
            'alunos' => $alunos
        ];

        // ABRINDO A VISÃO listar E PASSANDO AS VARIÁVEIS PARA ELA
        // - Neste caso, está sendo indicado para o Laravel que a view 'listar' 
        // está em uma subpasta 'alunos'.
        return view('alunos.listar', $vars);
    }

    /**
     * Apresenta um formulário de edição de um registro. Se a opção de alterar
     * foi acionada, então o parâmetro 'id' é usado para carregar o formulário
     * com os dados do registro que corresponde a esse 'id'. Se a opção inserir 
     * tiver sido acionada, então o formulário é carregado com os campos vazios.
     * 
     * @param int $id O id do registro que se deseja alterar.  
     * @return View A view 'editar'.
     */
    public function editar($id = null)
    {
        // VERIFICANDO SE O FORMULÁRIO SERÁ PARA INSERIR OU ALTERAR UM REGISTRO
        if (is_null($id)) {
            $vars = [
                'nome' => null,
                'email' => null,
                'action' => '/alunos/inserir'
            ];
        } else {
            $aluno = Aluno::find($id);
            $vars = [
                'nome' => $aluno->nome,
                'email' => $aluno->email,
                'action' => '/alunos/alterar/' . $aluno->id
            ];
        }
        return view('alunos.editar', $vars);
    }

    /**
     * Uso o método de inserção em massa do modelo correspondente. Uma 
     * associação dos nomes dos inputs do formulário é feita com os nomes dos 
     * campos da tabela 'alunos.
     * 
     * @param Request $request Os valores informado nos campos do formulário.
     * @return View A view 'listar'.
     */
    public function inserir(Request $request)
    {
        Aluno::create($request->all());

        // No método 'redirect' é indicada a 'rota' que o usuário deve acessar 
        // após a execução da instrução anterior.
        return redirect('/alunos');
    }

    /**
     * É obtido o registro que corresponde ao 'id' informado. Em seguida, uma 
     * associação dos nomes dos inputs do formulário é feita com os nomes dos 
     * campos da tabela 'alunos, alterando assim todos os campos da tabela 
     * 'alunos'.
     * 
     * @param Request $request Os valores informado nos campos do formulário.
     * @param int $id A identificação do registro a ser alterado e que é 
     * recebido pelo URL.
     * @return View A view 'listar'.
     */
    public function alterar(Request $request, $id)
    {
        Aluno::find($id)->update($request->all());
        return redirect('/alunos');
    }

    /**
     * É obtido o registro que corresponde ao 'id' informado. Em seguida, é 
     * chamado o método 'delete' do objeto que está associado a esse registro.
     * 
     * @param int $id A identificação do registro a ser excluído e que é 
     * recebido pelo URL.
     * @return View A view 'listar'.
     */
    public function excluir($id)
    {
        Aluno::find($id)->delete();
        return redirect('/alunos');
    }
}
