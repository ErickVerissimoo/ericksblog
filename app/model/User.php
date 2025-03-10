<?php

namespace Note\Ericksblog\model;

use DB\SQL\Mapper;

class User extends Mapper
{
    public function __construct() {
    parent::__construct(\Base::instance()->get('DB'), 'users');
    }

public function saveUser(string $email, string $password)
{
if($this->count(['email=?', $email]) >0){
throw new \Exception('Entity already exists');
}

    $this->email=$email;
    $this->password=$password;
    $this->save();
}

}