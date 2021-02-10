<?php

use Jenssegers\Blade\Blade;

$app            = System\App::instance();
$app->request   = System\Request::instance();
$app->route     = System\Route::instance($app->request);

$route          = $app->route;

$route->get('/registrarse', function() {
    $blade = new Blade('views', 'cache');
    echo $blade->make('register')->render();
});

$route->post('/registerUser', 'Controllers\UserController@registerUser');

$route->end();