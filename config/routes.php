<?php

use Jenssegers\Blade\Blade;

$app            = System\App::instance();
$app->request   = System\Request::instance();
$app->route     = System\Route::instance($app->request);

$route          = $app->route;

$route->get('/', function() {
    $blade = new Blade('views', 'cache');
    echo $blade->make('login')->render();
});

$route->get('/registrarse', function() {
    $blade = new Blade('views', 'cache');
    echo $blade->make('register')->render();
});

$route->get('/ingreso', function() {
    session_start();
    $blade = new Blade('views', 'cache');
    echo $blade->make('entry', ["users" => $_SESSION["users"], "authenticated" => $_SESSION["authenticated"]])->render();
});

$route->post('/registerUser', 'Controllers\UserController@registerUser');
$route->post('/loginUser', 'Controllers\UserController@login');
$route->get('/logout', 'Controllers\UserController@logout');

$route->get('/service-external-save', 'Controllers\UserController@serviceExternalSave');

$route->end();