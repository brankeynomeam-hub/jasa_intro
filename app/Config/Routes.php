<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('order', 'Order::index');
$routes->post('order/proses', 'Order::proses');

// Auth Routes - TANPA filter (akses bebas untuk halaman login)
$routes->get('admin/login', 'Auth::loginPage');
$routes->post('admin/login/proses', 'Auth::loginProcess');
$routes->get('admin/logout', 'Auth::logout');

// Admin Routes - WAJIB login (pakai filter adminAuth)
$routes->get('admin', 'Admin::index', ['filter' => 'adminAuth']);
$routes->get('admin/products', 'Admin::products', ['filter' => 'adminAuth']);
$routes->get('admin/products/create', 'Admin::product_create', ['filter' => 'adminAuth']);
$routes->post('admin/products/store', 'Admin::product_store', ['filter' => 'adminAuth']);
$routes->get('admin/products/delete/(:num)', 'Admin::product_delete/$1', ['filter' => 'adminAuth']);

// AI Tool Routes
$routes->get('ai-tool', 'AiTool::index');
$routes->post('ai-tool/proses', 'AiTool::proses');
$routes->get('ai-tool/download/(:any)', 'AiTool::download/$1');

return $routes;
