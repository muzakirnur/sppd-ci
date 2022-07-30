<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->post('/login', 'Login::login');
$routes->get('/logout', 'Logout::index');
$routes->get('/dashboard', 'DashboardController::index');


$routes->get('/pangkat', 'PangkatController::index');
$routes->get('/pangkat/tambah', 'PangkatController::create');
$routes->post('/pangkat/tambah', 'PangkatController::store');
$routes->get('/pangkat/edit/(:num)', 'PangkatController::edit/$1');
$routes->post('/pangkat/edit/(:num)', 'PangkatController::update/$1');
$routes->get('/pangkat/delete/(:num)', 'PangkatController::delete/$1');


$routes->get('/jabatan', 'JabatanController::index');
$routes->get('/jabatan/tambah', 'JabatanController::create');
$routes->post('/jabatan/tambah', 'JabatanController::store');
$routes->get('/jabatan/edit/(:num)', 'JabatanController::edit/$1');
$routes->post('/jabatan/edit/(:num)', 'JabatanController::update/$1');
$routes->get('/jabatan/delete/(:num)', 'JabatanController::delete/$1');



$routes->get('/alat', 'AlatAngkutController::index');
$routes->get('/alat/tambah', 'AlatAngkutController::create');
$routes->post('/alat/tambah', 'AlatAngkutController::store');
$routes->get('/alat/edit/(:num)', 'AlatAngkutController::edit/$1');
$routes->post('/alat/edit/(:num)', 'AlatAngkutController::update/$1');
$routes->get('/alat/delete/(:num)', 'AlatAngkutController::delete/$1');


$routes->get('/pegawai', 'PegawaiController::index');
$routes->get('/pegawai/tambah', 'PegawaiController::create');
$routes->post('/pegawai/tambah', 'PegawaiController::store');
$routes->get('/pegawai/edit/(:num)', 'PegawaiController::edit/$1');
$routes->post('/pegawai/edit/(:num)', 'PegawaiController::update/$1');
$routes->get('/pegawai/delete/(:num)', 'PegawaiController::delete/$1');

// $routes->get('/register', 'Register::index');
// $routes->post('/register', 'Register::register');


/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
