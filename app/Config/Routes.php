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
 * primer argumento la ruta
 * segundo argumento el controlador y la función asociada
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('principal', 'Home::inicio');
$routes->get('acerca', 'Home::acerca');
$routes->get('quienes', 'Home::quienes');
$routes->get('registrar', 'Home::registrar');
$routes->get('acceder', 'Home::acceder');

/*rutas del Registro de Usuarios. La función create se encuentra en el controler usuario,
 * get sirve para obtener todos los datos que se envían desde el registro
 * */
$routes->get('/registrar', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/*rutas de login*/
$routes->get('/acceder', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'panel_controller::logout');


/*if(is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')){
	require APPPATH . 'Config' . ENVIRONMENT . '/Routes.php'
}*/
