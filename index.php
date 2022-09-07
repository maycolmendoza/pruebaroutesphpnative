<?php 




require_once __DIR__ . '/config/__init.php';
require_once __DIR__ . '/router/index.php';

$router= new Router();
$router->get('/', 'index.php');

$router->get('/abouts', 'about.php');