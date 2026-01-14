<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new PHOENIX\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "HomeController@accueil");
$router->get('/catalogue', "HomeController@catalogue");
$router->get('/reservation', "HomeController@reservation");
$router->get('/confirmation', "HomeController@confirmation");


$router->get('/auth/login/', "UserController@showLogin");
$router->get('/auth/register/', "UserController@showRegister");
$router->get('/auth/logout/', "UserController@logout");

$router->post('/auth/login/', "UserController@login");
$router->post('/auth/register/', "UserController@register");

$router->run();
