
<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Rotas públicas
$routes->get('/','home::index');
$routes->get('/home','ConteudoController::index');
$routes->get('/contato','ConteudoController::contato');
$routes->get('/fernando','ConteudoController::fernando');
$routes->get('/quemsou','ConteudoController::quemsou');
$routes->get('/produtos','ConteudoController::produtos');

// Rotas padrão do Shield
service('auth')->routes($routes);

// Rotas que exigem login
$routes->group('', ['filter' => 'session'], static function ($routes) {

    // Listagem, formulários de edição e atualização
    $routes->get('conteudos', 'ConteudoController::listar');
    $routes->get('conteudos/editar/(:num)', 'ConteudoController::editar/$1');
    $routes->post('conteudos/atualizar/(:num)', 'ConteudoController::atualizar/$1');

});

// Painel: exige login e grupo admin
$routes->get('admin', 'Admin\Painel::index', [
    'filter' => ['session', 'group:admin'],
]);

// Logout: aceita apenas usuários autenticados
$routes->post('admin/sair', 'Admin\Painel::logout', [
    'filter' => 'session',
]);
