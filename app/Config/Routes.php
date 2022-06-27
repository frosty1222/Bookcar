<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->add('welcome', 'Home::index');
$routes->post('notice_store', 'Home::store');
$routes->add('product','Sub::product');
$routes->add('News','Sub::news');
$routes->add('service', 'Sub::service');
$routes->add('product_detail', 'Sub::product_detail');
$routes->add('index', 'Sub::index');
$routes->get('adminview','AdminController::index');
$routes->get('mainview', 'AdminController::mainview');
//product
$routes->get('add_product', 'ProductController::add_product');
$routes->add('product_edit', 'ProductController::edit_product');
$routes->post('store', 'ProductController::store');
$routes->get('product_index', 'ProductController::index');
$routes->add('show_product', 'ProductController::show_product');
$routes->get('update_image', 'ProductController::update_image');
$routes->get('product_delete/(:num)', 'ProductController::delete/$1');
$routes->get('product_edit/(:num)', 'ProductController::edit_product/$1');
$routes->post('product_update/(:num)', 'ProductController::update/$1');
//category Routes
$routes->get('category','CategoryController::index');
$routes->get('category_add', 'CategoryController::category_add');
$routes->add('category_edit', 'CategoryController::category_edit');
$routes->post('category_store','CategoryController::category_store');
$routes->get('category_delete/(:num)', 'CategoryController::category_delete/$1');
$routes->get('category_edit/(:num)', 'CategoryController::category_edit/$1');
$routes->post('update_category/(:num)', 'CategoryController::update/$1');
//Trail Routes
$routes->get('trail','TrailController::index');
$routes->post('trail_store','TrailController::store');
$routes->get('trail_edit','TrailController::edit');
$routes->get('trail_delete/(:num)', 'TrailController::delete/$1');
$routes->get('trail_edit/(:num)', 'TrailController::edit/$1');
$routes->post('trail_update/(:num)', 'TrailController::update/$1');
// User routes
$routes->match(['get','post'],'register','UserController::index');
$routes->get('login', 'UserController::login');
$routes->get('login2', 'UserController::login2');
$routes->post('check', 'UserController::check');
$routes->post('check2', 'UserController::check2');
//dashboard routes
$routes->add('dashboard', 'DashboardController::index');
//filter group 
$routes->get('logout','UserController::logout');
$routes->group('',['filter'=> 'AuthCheck'], function($routes){
   $routes->get('welcome', 'Home::index');
});
//filter for admin auth
$routes->group('',['filter'=> 'AuthCheck2'], function($routes){
    $routes->get('mainview', 'AdminController::mainview');
});
//404 routes
$routes->set404Override(function(){
    echo view('errors/html/error_404.php');
});


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
