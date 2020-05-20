<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RootController extends Controller
{
    public function index()
    {
        $ministerios = ['Saúde', 'Educação', 'Segurança pública'];

        //$args = ['ministerios' => $ministerios];
        //return view('index', $args);

        return view('index', compact('ministerios'));
    }

    public function listarNoticias()
    {
        $usuario = [
            'nome'=>'Leonardo Villani', 
            'email'=>'leonardo.villani@fatec.sp.gov.br', 
            'senha'=>'123', 
            'acesso'=>2,
        ];
        $noticias = [
            [
                'titulo' => 'Manchete sobre coronavírus',
                'conteudo' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, ipsa, saepe asperiores, nostrum impedit temporibus hic quidem sapiente accusamus commodi eius ducimus nobis nesciunt in aliquid delectus facilis aperiam placeat?',
                'link' => 'http://www.google.com.br/q=coronavirus',
            ],
            [
                'titulo' => 'Manchete sobre Bolsonaro',
                'conteudo' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, ipsa, saepe asperiores, nostrum impedit temporibus hic quidem sapiente accusamus commodi eius ducimus nobis nesciunt in aliquid delectus facilis aperiam placeat?',
                'link' => 'http://www.google.com.br/q=bolsonaro',
            ],
        ];

        return view('noticias', compact('usuario','noticias'));
    }
}
