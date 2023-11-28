<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/akun', 'Home::akun');
$routes->get('/top-up', 'Home::topUp');
$routes->get('/transaction', 'TopUp::index');
$routes->add('/top-up', 'TopUp::create');