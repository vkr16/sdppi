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
$routes->setDefaultController('Pages');
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
$routes->get('/', 'Pages::index');
$routes->get('/informasi', 'Pages::informasi');
$routes->get('/data-pos', 'Pages::datapos');
$routes->get('/data-telekomunikasi', 'Pages::datatelekomunikasi');
$routes->get('/data-penyiaran', 'Pages::datapenyiaran');
$routes->get('/kontak', 'Pages::kontak');
$routes->get('/faq', 'Pages::faq');



$routes->get('/admin/', 'Admin::index');
$routes->get('/admin/pos', 'Admin::pos');
$routes->get('/admin/telekomunikasi', 'Admin::telekomunikasi');
$routes->get('/admin/penyiaran', 'Admin::penyiaran');
$routes->get('/admin/pengguna', 'Admin::pengguna');
$routes->post('/admin/pengguna/getUser', 'Admin::getUser');
$routes->post('/admin/pengguna/updateUser', 'Admin::updateUser');
$routes->post('/admin/pengguna/deleteUser', 'Admin::deleteUser');
$routes->post('/admin/pengguna/resetPassUser', 'Admin::resetPassUser');



// Authentication
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::authenticate');
$routes->get('/logout', 'Auth::logout');
$routes->post('/register', 'Auth::register');




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
