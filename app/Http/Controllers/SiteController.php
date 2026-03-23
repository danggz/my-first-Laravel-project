<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $nome = 'Daniel';
        $habits = ['PHP', 'Laravel', 'Java', 'Futebol'];

        return view('home', [
            'nome' => $nome,
            'habits' => $habits
        ]);
    }
}
