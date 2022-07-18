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
// Routing to main pages
$routes->get('/', 'Home::login');
$routes->get('/index', 'Home::index');
$routes->get('/basic_elements', 'Home::basic_elements');
$routes->get('/basic_table', 'Home::basic_table');
$routes->get('/blank_page', 'Home::blank_page');
$routes->get('/buttons', 'Home::buttons');
$routes->get('/chartjs', 'Home::chartjs');
$routes->get('/dropdowns', 'Home::dropdowns');
$routes->get('/error_404', 'Home::error_404');
$routes->get('/error_500', 'Home::error_500');
$routes->get('/login', 'Home::login');
$routes->get('/mdi', 'Home::mdi');
$routes->get('/register', 'Home::register');
$routes->get('/typography', 'Home::typography');
// Routing for school
$routes->post('/add', 'Add::add');
$routes->get('/delete', 'Delete::delete');
$routes->get('/upload', 'Home::upload');
$routes->get('/display', 'Home::display');
$routes->post('/update', 'Home::update');
// Routing for school
$routes->post('/stock', 'Add::stock');
// Routing for register and login
$routes->post('/register', 'Register::register');
$routes->post('/login', 'Login::login');
$routes->get('/logout', 'Logout::logout');




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
