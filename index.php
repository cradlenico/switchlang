<?php
use \App\Autoloader;

require 'app/class/Autoloader.php';
Autoloader::register();
$lang = new App\Lang();
$json = $lang->expose();
require 'app/inc/_header.php';
?>

    <div class="container">
        <div class="starter-template">
            <h1><?= $json->homeTitle; ?></h1>
        </div>
    </div>

<?php require 'app/inc/_footer.php'; ?>