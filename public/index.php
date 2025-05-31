<?php
require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Core/Controller.php';
require_once __DIR__ . '/../app/Core/Functions.php';

$router = new Router();
$router->get('/', 'PageController@show');
$router->get('/web', 'PageController@show');
$router->get('/pc', 'PageController@show');
$router->get('/learn', 'PageController@show');
$router->get('/ueber_mich', 'PageController@show');
$router->get('/kontakt', 'PageController@show');

$router->dispatch();