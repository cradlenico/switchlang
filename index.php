<?php
use \App\Autoloader;

require 'app/class/Autoloader.php';
Autoloader::register();
$lang = new App\Lang();
$json = $lang->expose();
require 'app/inc/_header.php';
require 'app/inc/_nav.php';
?>

    <div class="container">
        <h1><?= $json->homeTitle; ?></h1>
    </div>

<?php require 'app/inc/_footer.php'; ?>