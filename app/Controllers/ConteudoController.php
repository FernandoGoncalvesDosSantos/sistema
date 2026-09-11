<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{
    public function index(): string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(1);
        return view ('home', $dados);
    }
    public function contato(): string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(6);
        return view( 'contato', $dados);
    }    
    public function fernando(): string 
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(5);
        return view( 'fernando', $dados);
    }
        public function quemsou(): string 
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(7);
        return view( 'quemsou', $dados);
    }
        public function produtos(): string 
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(8);
        return view( 'produtos', $dados);
    }
}