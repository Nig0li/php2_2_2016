<?php

namespace Model\table;

use Model\Ancestor;
use Model\Db;

class News extends Ancestor
{
    const TABLE = 'news';

    public $id;
    public $title;
    public $text;
    //public $autor;

    public function getId()
    {
        return $this->id;
    }

    public static function getThreeLastRecord(int $limit)
    {
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $limit;
        //var_dump($sql);
        $db = Db::instance();
        return $db->query($sql, static::class);
    }

}