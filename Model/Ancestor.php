<?php

namespace Model;


abstract class Ancestor
{
    const TABLE = '';

    public $id;

    /* -- CREATE -- */

    public function isNews() //Проверяем новая ли у нас модель
    {
        return empty($this->id);
    }

    public function insert() //Добавляем объект в БД
    {
        if (!$this->isNews()) { //Проверяем новый ли объект
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $key => $val) { //Проходим по публичным свойствам объекта
            if ('id' == $key) {
                continue; // Пропускаем поле ID
            }
            $columns[] = $key; // Собираем массив свойств объекта
            $values[':' . $key] = $val; // Собираем массив свойство=значение
        } //var_dump($values); die;

        //Запрос в БД
        $sql = 'INSERT INTO ' . static::TABLE . '(' . implode(',', $columns) . ')
            VALUES (' . implode(',', array_keys($values)) . ')';

        //Выполняем запрос к БД
        $db = Db::instance();
        $res = $db->execute($sql, $values);
        //var_dump($res);
        if (false !== $res) {
            $this->id = $db->lastInsertId();
            return 'Изменение прошло успешно!';
        }
    }

    /* -- READ -- */

    public static function findAll() // Получаем массив всех записей из таблицы
    {
        $sql = 'SELECT * FROM ' . static::TABLE;
        //var_dump($sql);
        $db = Db::instance();
        return $db->query($sql, static::class);
    }

    public static function findById(int $id) // Получаем одну запись по ID
    {                                        //тест метода в /tests/test_lesson1.php - строка 93
        //var_dump($id);
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        //var_dump($sql);
        $mass = [
            ':id' => $id,
        ];
        $db = Db::instance();
        $res = $db->query($sql, static::class, $mass);
        //var_dump($res);
        if (null == $res) {
            return false;
        } else {
            foreach ($res as $record) {
                return $record;
            }
        }
    }

    /* --  UPDATE -- */

    public function update() //Обновляем значение полей модели в БД
    {
        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            $columns[] = $k . '=:' . $k;
            $values[':' . $k] = $v;
        } //var_dump($values); //die;

        $sql = 'UPDATE ' . static::TABLE .
            ' SET ' . implode(',', $columns)
            . ' WHERE id=:id';
        //echo $sql;
        $db = Db::instance();
        $res = $db->execute($sql, $values);
        if (false !== $res) {
            return 'Изменение прошло успешно!';
        }
    }

    public function save() //Сохряем изменения
    {
        if (!$this->isNews()) {
            return $this->update();
        } else {
            return $this->insert();
        }
    }

    /* --  DELETE -- */

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';
        $mass[':id'] = $this->id;
        $db = Db::instance();
        $res = $db->execute($sql, $mass);
        if (false !== $res) {
            return 'Изменение прошло успешно!';
        }
    }
}