<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'login.php';
require 'vendor/autoload.php';
require 'connection.php';

$login = new Login();
$login->setAttribute('brukernavn', $_POST['brukernavn']);
$login->setAttribute('passord', $_POST['passord']);
$login->save();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=http://tek.westerdals.no/~strsim16/Prosjekt/index.php" />
        
        <title>Din Vulkan</title> 
    
    </head>
    
    <body>
    </body>
</html>