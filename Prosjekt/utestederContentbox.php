<?php

require 'vendor/autoload.php';
require 'connection.php';

use Illuminate\Database\Eloquent\Model;

class Utesteder extends Model {
    protected $table = "utesteder";
}

$utesteder = Utesteder::all();

?>

<div id="contentBox">
    <div id="cWrap">
        <?php foreach ($utesteder as $ok) { ?>
        <div id="CT">
            <?= $ok['information'] ?>
        </div>
        <div id="CB">
            <img height="300" width="100%" src="<?= $ok['image'] ?>">
        </div>
        <?php } ?>
    </div>
</div>