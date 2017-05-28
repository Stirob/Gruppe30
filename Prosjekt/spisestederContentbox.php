<?php

require 'vendor/autoload.php';
require 'connection.php';

use Illuminate\Database\Eloquent\Model;

class Spisesteder extends Model {
    protected $table = "spisesteder";
}

$spisesteder = Spisesteder::all();

?>

<div id="contentBox">
    <div id="cWrap">
        <?php foreach ($spisesteder as $ok) { ?>
        <div id="CT">
            <?= $ok['information'] ?>
        </div>
        <div id="CB">
            <img height="300" width="100%" src="<?= $ok['image'] ?>">
        </div>
        <?php } ?>
    </div>
</div>