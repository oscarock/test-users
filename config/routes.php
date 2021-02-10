<?php

$app            = System\App::instance();
$app->request   = System\Request::instance();
$app->route     = System\Route::instance($app->request);

$route          = $app->route;

$route->get('/', function() {
    echo "prueba ruta";
});

$route->end();