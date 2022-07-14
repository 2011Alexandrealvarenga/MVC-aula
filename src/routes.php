<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/nova', 'HomeController@nova');
$router->get('/fotos', 'HomeController@f');
$router->get('/fotos/{id}', 'HomeController@fotos');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');