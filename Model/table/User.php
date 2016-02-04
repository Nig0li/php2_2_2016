<?php

namespace Model\table;

use Model\Ancestor;

class User extends Ancestor
    implements HastEmail
{
    const TABLE = 'users';

    public $email;
    public $name;

    public function getEmail()
    {
        return $this->email;
    }
}