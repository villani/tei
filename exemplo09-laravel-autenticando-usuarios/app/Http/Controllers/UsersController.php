<?php

namespace App\Http\Controllers;

use Auth;

/**
 * Obtém ou envia para a camada Model os dados apresentados ou obtidos da camada
 * View.
 * 
 * @author Prof. Me. Leonardo Villani <leonardo.villani@fatec.sp.gov.br>
 */
class UsersController extends Controller
{

    /**
     * Verifica se há ou não usuário autenticado e retorna o respectivo status.
     * 
     * @return string O status do usuário.
     */
    public function verificar()
    {
        $status = null;

        if (Auth::check()) {
            $status = 'Seja bem vindo, ' . Auth::user()->name;
        } else {
            $status = 'Não há usuário logado';
        }

        return $status;
    }

    /**
     * Tenta realizar a autenticação do usuário com os dados recebidos e 
     * redireciona o usuário para verificar seu status se houver sucesso no 
     * logon.
     * 
     * @param string $email Email do usuário.
     * @param string $senha Senha do usuário.
     * @return string Um mensagem de erro se o logon falhar ou redireciona o 
     * usuário para verificar o status em caso de sucesso.
     */
    public function autenticar($email = null, $senha = null)
    {
        if (Auth::attempt(['email' => $email, 'password' => $senha])) {
            return redirect('/verificar');
        } else {
            return 'Falha ao autenticar usuário!';
        }
    }

    /**
     * Rota protegida. Só é possível acessar esse método se houver usuário 
     * autenticado.
     * 
     * @return string Mensagem para usuários autenticados.
     */
    public function painel()
    {
        return 'Apenas para usuários autenticados';
    }

    /**
     * Encerra a sessão do usuário.
     * 
     * @return string O status do usuário.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/verificar');
    }
}
