<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mdashboard/home', 'mdashboard\ProductsController::index');
$routes->get('/mdashboard/register', 'mdashboard\Auth::register');
$routes->post('/register', 'mdashboard\Auth::register');
$routes->get('/mdashboard/login', 'mdashboard\Auth::login');
$routes->post('/login', 'mdashboard\Auth::login');
$routes->get('/mdashboard/cart', 'CartController::cek');
$routes->get('/mdashboard/productdetails', 'mdashboard\ProfileController::productdetails');
$routes->get('/mdashboard/allproducts', 'mdashboard\ProfileController::allproducts');
$routes->get('/mdashboard/ordersummary', 'mdashboard\ProfileController::ordersummary');
$routes->get('/mdashboard/checkout', 'mdashboard\ProfileController::checkout');
