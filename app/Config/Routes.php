<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/material', 'Home::material');

$routes->get('/lesson_plan', 'Home::lesson_plan');
