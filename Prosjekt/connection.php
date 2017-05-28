<?php

use Illuminate\Database\Capsule\Manager as Database;

$port = 2083;
$username = 'strsim16_vulkan';
$password = 'Vulkaner[100%]fErdig$stilt';
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