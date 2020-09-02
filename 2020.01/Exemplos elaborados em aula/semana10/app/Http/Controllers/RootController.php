<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RootController extends Controller
{
    public function index()
    {
        $title = 'Portal de Notícias';
        return view('index', compact('title'));
    }
}
