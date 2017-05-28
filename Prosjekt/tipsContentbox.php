<?php

require 'vendor/autoload.php';
require 'connection.php';

use Illuminate\Database\Eloquent\Model;

class Tips extends Model {
    protected $table = "tips";
}

$tips = Tips::all();

?>

<div id="contentBox">
    <div id="cWrap">
        <?php foreach ($tips as $ok) { ?>
        <div id="CT">
            <?= $ok['information'] ?>
        </div>
        <div id="CB">
            <img height="300" width="100%" src="<?= $ok['image'] ?>">
        </div>
        <?php } ?>
    </div>
</div>