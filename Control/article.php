<?php
use Model\table\News;

require __DIR__ . '/../autoload.php';

//var_dump($_GET['id']);
$newsOne = News::findById($_GET['id']); //Получили одну новость по id
//var_dump($newsOne);

include __DIR__ . '/../View/templates/article.php'; //подключаем шаблон