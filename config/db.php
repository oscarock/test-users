<?php

/*configuracion acceso base de datos*/
use Illuminate\Database\Capsule\Manager as Capsule;

  	$capsule = new Capsule;
    $capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'zinobe_db',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    ]);
    
    $capsule->bootEloquent();
/*fin configuracion acceso base de datos*/