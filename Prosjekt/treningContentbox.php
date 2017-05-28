<?php

require 'vendor/autoload.php';
require 'connection.php';

use Illuminate\Database\Eloquent\Model;

class Trening extends Model {
    protected $table = "trening";
}

$trening = Trening::all();

?>

<div id="contentBox">
    <div id="head">
        <h1>Trening</h1>
    </div>
    <div id="cWrap">
        <?php foreach ($trening as $ok) { ?>
        <div id="CT">
            <?= $ok['information'] ?>
        </div>
        <div id="CB">
            <img height="300" width="100%" src="<?= $ok['image'] ?>">
        </div>
        <?php } ?>
    </div>
</div>