<?php

function __autoload($className)
{
    //var_dump($className);
    require __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
}