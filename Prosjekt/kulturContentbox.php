<?php

require 'vendor/autoload.php';
require 'connection.php';

use Illuminate\Database\Eloquent\Model;

class Kultur extends Model {
    protected $table = "kultur";
}

$kultur = Kultur::all();

?>

<div id="contentBox">
    <div id="cWrap">
        <?php foreach ($kultur as $ok) { ?>
        <div id="CT">
            <?= $ok['information'] ?>
        </div>
        <div id="CB">
            <img height="300" width="100%" src="<?= $ok['image'] ?>">
        </div>
        <?php } ?>
    </div>
</div>