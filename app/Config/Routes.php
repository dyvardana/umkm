<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/reg', 'Register\View::index');


$routes->get('/admin', 'Admin\Dashboard\View::index');
$routes->get('/home/produk','Home::produk');
