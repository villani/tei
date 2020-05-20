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
}
