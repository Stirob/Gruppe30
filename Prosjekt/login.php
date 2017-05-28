<?php

require 'vendor/autoload.php';
use Illuminate\Database\Eloquent\Model as Model;

class Login extends Model {
    public $timestamps = false;
    protected $table = 'login';
}