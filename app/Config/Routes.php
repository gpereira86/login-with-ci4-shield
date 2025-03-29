<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::store');
$routes->get('/logout', 'Login::destroy');

//service('auth')->routes($routes);
