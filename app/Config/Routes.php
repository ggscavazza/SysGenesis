<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Carregar o sistema de rotas de CodeIgniter
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

// Define o namespace para os controllers
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// $routes->get('/', 'Home::index');
$routes->get('/', 'LoginController::index');

$routes->get('login', 'LoginController::index');
$routes->post('login/authenticate', 'LoginController::authenticate');
$routes->get('recover-password', 'LoginController::recoverPassword');

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('tickets', 'TicketsController::index');
    $routes->get('tickets/create', 'TicketsController::create');
    $routes->post('tickets/store', 'TicketsController::store');
    $routes->get('tickets/update/(:num)', 'TicketsController::update/$1');
    $routes->post('tickets/saveUpdate', 'TicketsController::saveUpdate');

    $routes->get('financial', 'FinancialController::index');
    $routes->get('financial/create_charge', 'FinancialController::createCharge');
    $routes->post('financial/store_charge', 'FinancialController::storeCharge');

    $routes->get('profile', 'ProfileController::index');
    $routes->post('profile/update', 'ProfileController::update');

    $routes->get('users', 'UsersController::index');
    $routes->get('users/create', 'UsersController::create');
    $routes->post('users/store', 'UsersController::store');
    $routes->get('users/edit/(:num)', 'UsersController::edit/$1');
    $routes->post('users/update/(:num)', 'UsersController::update/$1');

    $routes->get('access_levels', 'AccessLevelsController::index');
    $routes->get('access_levels/create', 'AccessLevelsController::create');
    $routes->post('access_levels/store', 'AccessLevelsController::store');
    $routes->get('access_levels/edit/(:num)', 'AccessLevelsController::edit/$1');
    $routes->post('access_levels/update/(:num)', 'AccessLevelsController::update/$1');
});
