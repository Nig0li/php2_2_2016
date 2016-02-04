<?php

namespace Model\users;

use Model\table\News;

class Admin
{
    public function verify(int $id)
    {
        if (empty($id)) {
            $res = new News();
        } else {
            $res = News::findById($id);
        }
        return $res;
    }

    public function insertNews($mass)
    {
        //var_dump($mass);
        $news = new News();
        $news->title = strip_tags($mass['title']);
        $news->text = strip_tags($mass['text']);
        //var_dump($news);
        return $news->save();
    }

    public function updateNews($mass)
    {
        $id = strip_tags($mass['id']);
        $news = News::findById($id);
        $news->id = $id;
        $news->title = strip_tags($mass['title']);
        $news->text = strip_tags($mass['text']);
        //var_dump($news);
        return $news->save();
    }

    public function deleteNews($id)
    {
        $news = News::findById($id);
        if (false !== $news) {
            $news->delete();
        }
    }
}