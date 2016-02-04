<?php

require __DIR__ . '/../autoload.php';

if (empty($_POST['title']) && empty($_POST['text'])) {
    include __DIR__ . '/../View/templates/admNews.php'; die;
} else {
    $mass = ['title' => $_POST['title'], 'text' => $_POST['text']];
    $admin = new \Model\users\Admin();
    $res = $admin->insertNews($mass);
    include __DIR__ . '/../View/templates/admNews.php';
}