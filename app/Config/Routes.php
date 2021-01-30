<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pro');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pro::login');
$routes->get('/inicio', 'Pro::inicio');
$routes->get('/obtenerDatos/(:any)','Pro::obtenerDatos/$1');
$routes->get('/eliminar/(:any)','Pro::eliminar/$1');
$routes->post('/crear', 'Pro::crear');
$routes->post('/actualizar', 'Pro::actualizar');
$routes->post('/validar', 'Pro::validar');
$routes->get('/tabla', 'Pro::tabla', ['filter' => 'SesionAdmin']);
$routes->get('/login', 'Pro::login', ['filter' => 'SesionAdmin']);
$routes->get('/salir', 'Pro::salir', ['filter' => 'SesionAdmin']);
$routes->get('/nuevo', 'Pro::nuevo');
$routes->post('/nuevoUsuario', 'Pro::nuevoUsuario');
$routes->get('/vacio', 'Pro::vacio');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}