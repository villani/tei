<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class RootController extends Controller
{
    public function index()
    {
        return "Acesso liberado!";
    }

    public function painel()
    {
        // Obtendo dados do usuário autenticado.
        return "Olá " . Auth::user()->name . "! Acesso protegido!";
    }
}
