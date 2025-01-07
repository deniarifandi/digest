<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/material/(:num)', 'Home::material/$1');

$routes->get('/lesson_plan/(:num)', 'Home::lesson_plan/$1');
