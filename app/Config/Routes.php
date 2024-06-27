<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('vista_login/vista1', 'Home::ReturnVista1');
$routes->get('vista_login/vista2', 'Home::ReturnVista2');
$routes->get('vista_login/vista3', 'Home::ReturnVista3');
// esta es la ruta con variable 

$routes->get('vista_login/vista4/(:num)', 'Home::ReturnVista4/$1');

//esta va a ser la ruta catalogo

//$routes->get('/catalogo/(:any)', 'Home::ReturnCatalogo/$1');

$routes->get('/catalogo/zapatos', 'Home::ReturnZapatos');
//$routes->get('/catalogo/vestido', 'Home::ReturnVestido');

//ruta base de datos
$routes->get('/testbase', 'Home::testdb');

// ruta de base de datos 

$routes->get('/testdb', 'cBdd::testbdd');
$routes->get('/selecInventario', 'cBdd::Select_Modelo_Bdd');