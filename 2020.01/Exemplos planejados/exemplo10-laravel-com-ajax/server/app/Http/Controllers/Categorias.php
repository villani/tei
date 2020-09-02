<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

/**
 * Envia e obtém do modelo os dados recebidos ou apresentados na visão.
 * 
 * @author Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class Categorias extends Controller
{
    /**
     * Obtém por meio do modelo todos os registros da tabela 'categorias' e 
     * retorna um vetor com todos os registros obtidos.
     * 
     * @return array Um vetor de objetos Categoria.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return $categorias;
    }

    /**
     * Recebe por parâmetro os dados do novo registro e redireciona o usuário
     * para a listagem de registros.
     * 
     * @param Request $request Os dados do registro a ser inserido.
     * @return array Um vetor de objetos Categoria.
     */
    public function inserir(Request $request)
    {
        Categoria::create($request->all());
        return redirect('/categorias');
    }
}
