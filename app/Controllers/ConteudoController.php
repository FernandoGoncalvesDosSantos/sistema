<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;
use Config\View;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class ConteudoController extends BaseController
{
    protected $helpers=['url'];

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
public function listar(): string
{
    $model = new ConteudoModel();

    return view('conteudo/listar', [
        'conteudos' => $model->findAll(),
    ]);
}

public function editar($id): string
{
    $model = new ConteudoModel();
    $conteudo = $model->find($id);

    if ($conteudo === null) {
        throw PageNotFoundException::forPageNotFound(
            'O conteúdo solicitado não foi encontrado.'
        );
    }

    return view('conteudo/editar', [
        'conteudo' => $conteudo,
        'erros' => [],
    ]);
}

    public function atualizar($id)
    {
    $model = new ConteudoModel();
    $conteudo = $model->find($id);

    if ($conteudo === null) {
        throw PageNotFoundException::forPageNotFound(
            'O conteúdo solicitado não foi encontrado.'
        );
    }

    $dadosPost = [
        'Titulo' => $this->request->getPost('Titulo'),
        'Texto' => $this->request->getPost('Texto'),
    ];

    $regras = [
        'Titulo' => 'required|max_length[255]',
        'Texto' => 'required',
    ];

    if (!$this->validate($regras)) {
        $conteudo['Titulo'] = $dadosPost['Titulo'] ?? '';
        $conteudo['Texto'] = $dadosPost['Texto'] ?? '';

        return view('conteudo/editar', [
            'conteudo' => $conteudo,
            'erros' => $this->validator->getErrors(),
        ]);
    }

    $model->update($id, $dadosPost);

    return redirect()
        ->to(site_url('conteudos'))
        ->with('mensagem', 'Conteúdo atualizado com sucesso.');
    }
}