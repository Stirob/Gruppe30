<?php

require 'vendor/autoload.php';
use Illuminate\Database\Eloquent\Model as Model;

class Eksempel extends Model {
    public $timestamps = false;
    protected $table = 'eksempel';
}