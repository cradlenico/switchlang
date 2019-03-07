<?php
	require 'vendor/autoload.php';
	$lang = new \App\Lang();
	$json = $lang->expose();
	require 'app/inc/_header.php';
?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="display-4">
                <h1><?= $json->homeTitle; ?></h1>                   
            </div>         
        </div>
    </div>
    <div class="container">
        <p><?= $json->textArea; ?></p>
    </div>
<?php require 'app/inc/_footer.php'; ?>
