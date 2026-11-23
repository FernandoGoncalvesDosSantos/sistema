<?php

namespace App\Controllers;

use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function index(): string
    {
        $model = new ConteudoModel();
        $dados['conteudo'] = $model->find(1);

        return view('home', $dados);
    }

    public function contato(): string
    {
        $model = new ConteudoModel();
        $dados['conteudo'] = $model->find(6);

        return view('contato', $dados);
    }

    public function fernando(): string
    {
        $model = new ConteudoModel();
        $dados['conteudo'] = $model->find(5);

        return view('fernando', $dados);
    }

    public function quemsou(): string
    {
        $model = new ConteudoModel();
        $dados['conteudo'] = $model->find(7);

        return view('quemsou', $dados);
    }

    public function produtos(): string
    {
        $model = new ConteudoModel();
        $dados['conteudo'] = $model->find(8);

        return view('produtos', $dados);
    }
}