<?php
use Model\table\News;

require __DIR__ . '/autoload.php';

//$news = News::findAll(); //Получили массив ВСЕХ новостей
//var_dump($news);

$news = News::getThreeLastRecord(3); //Получаем массив последних трех новостей
//var_dump($news);
include __DIR__ . '/View/templates/index.php'; //подключаем шаблон
