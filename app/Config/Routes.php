<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/**
 * --------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------
 * get("valor del atributo href en navbar", Controlador::Método)
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('principal', 'Home::inicio');
$routes->get('acerca', 'Home::acerca');
$routes->get('quienes', 'Home::quienes');
$routes->get('registrar', 'Home::registrar');
$routes->get('acceder', 'Home::acceder');
