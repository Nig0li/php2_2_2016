<?php

require __DIR__ . '/../autoload.php';

$admin = new \Model\users\Admin();
$res = $admin->verify($_GET['id']);
//var_dump($res);
include __DIR__ . '/../View/templates/admArt.php';