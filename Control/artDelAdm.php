<?php

require __DIR__ . '/../autoload.php';

$admin = new \Model\users\Admin();
$admin->deleteNews($_GET['id']);
header('Location: /../index.php'); exit(0);