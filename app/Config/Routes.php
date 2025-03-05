<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/material/(:num)', 'Home::material/$1');

$routes->get('/lesson_plan/(:num)', 'Home::lesson_plan/$1');
$routes->get('/case_study/(:num)', 'Home::case_study/$1');
$routes->get('/presentation/(:num)', 'Home::presentation/$1');

$routes->get('/pedagogy', 'Home::pedagogy');

$routes->get('/streaming', 'Home::streaming');

$routes->get('/microcredential', 'Home::microcredential');