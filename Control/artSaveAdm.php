<?php

require __DIR__ . '/../autoload.php';

$admin = new \Model\users\Admin();
$res = $admin->verify($_POST['id']);
//var_dump($res);
$mass = ['id' => $_POST['id'], 'title' => $_POST['title'], 'text' => $_POST['text']];
$ups = $admin->updateNews($mass);

include __DIR__ . '/../View/templates/admArt.php';