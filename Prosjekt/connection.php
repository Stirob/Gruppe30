<?php

use Illuminate\Database\Capsule\Manager as Database;

$port = 3306;
$username = 'strsim16_test';
$password = '123456789';
$name = 'strsim16_yourvulkan';

$database = new Database();
$database->addConnection([
    'driver' => 'mysql',
    'host' => 'tek.westerdals.no',
    'port' => $port,
    'username' => $username,
    'password' => $password,
    'database' => $name,
    'collation' => 'utf8_general_ci'
]);
$database->bootEloquent();
