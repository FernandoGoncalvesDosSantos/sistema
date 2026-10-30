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
