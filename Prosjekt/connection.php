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

/*$host = "tek.westerdals.no";
$db = "strsim16_yourvulkan";
$port = "3306";
$bruker = "strsim16_test";
$pass = "123456789";

try {
    $database = new PDO("mysql:host=$host;dbname=$db;port=$port", "$bruker", "$pass");
    $database -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "works";
} catch (PDOException $e){
    echo "not";
    exit();
}*/

