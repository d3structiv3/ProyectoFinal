<?php
    use Illuminate\Database\Capsule\Manager as Database;

    $database = new Database();
    //datos de la conexion
    $data=[
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'proyecto',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ];
    //Añadir una la coneccion
    $database->addConnection($data);
    //hacer global la conexion
    $database->setAsGlobal();
    //arrancar la conexion
    $database->bootEloquent();
