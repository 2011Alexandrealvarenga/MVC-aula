<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/nova', 'HomeController@nova');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');