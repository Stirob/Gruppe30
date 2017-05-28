<?php

require 'vendor/autoload.php';
require 'connection.php';

use Illuminate\Database\Eloquent\Model;

class Transport extends Model {
    protected $table = "transport";
}

$transport = Transport::all();

?>

<div id="contentBox">
    <div id="head">
        <h1>Transport</h1>
    </div>
    <div id="cWrap">
        <?php foreach ($transport as $ok) { ?>
        <div id="CT">
            <?= $ok['information'] ?>
        </div>
        <div id="CB">
            <img height="300" width="100%" src="<?= $ok['image'] ?>">
        </div>
        <?php } ?>
    </div>
</div>