<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
require 'connection.php';

use Illuminate\Database\Eloquent\Model;

class Utesteder extends Model {
    protected $table = "utesteder";
}

$utesteder = Utesteder::all();

require 'head.php';
require 'topbox.php';
require 'forsideContentbox.php';
require 'footer.php';