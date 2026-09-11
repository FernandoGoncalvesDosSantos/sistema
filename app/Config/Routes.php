<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/','home::index');
$routes->get('/home','ConteudoController::index');
$routes->get('/contato','ConteudoController::contato');
$routes->get('/fernando','ConteudoController::fernando');
$routes->get('/quemsou','ConteudoController::quemsou');
$routes->get('/produtos','ConteudoController::produtos');