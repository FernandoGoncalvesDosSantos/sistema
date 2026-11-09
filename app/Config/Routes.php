<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/','home::index');
$routes->get('/home','ConteudoController::index');
$routes->get('/contato','ConteudoController::contato');
$routes->get('/fernando','ConteudoController::fernando');
$routes->get('/quemsou','ConteudoController::quemsou');
$routes->get('/produtos','ConteudoController::produtos');

// listagem, formulários de edição e atualização
$routes->get('conteudos','ConteudoController::listar');
$routes->get('conteudos/editar/(:num)','conteudoController::listar/$1');
$routes->post('conteudos/atualizar/(:num)', 'ConteudoController::atualizar/$1');

service('auth')->routes($routes);

//ta faltando o passo 2 da Aula 08 - Configurando o CodeIgniter Shield - Parte 2
//--------------------------------------------------------------
//--------------------------------------------------------------
//falta a parte de cima

// Painel: exige login e grupo admin
$routes->get('admin', 'Admin\Painel::index', [
 'filter' => ['session', 'group:admin'],
]);
// Logout: aceita apenas usuários autenticados
$routes->post('admin/sair', 'Admin\Painel::logout', [
 'filter' => 'session',
]);
