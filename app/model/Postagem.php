<?php

namespace Note\Ericksblog\model;

use DB\SQL\Mapper;

class Postagem extends Mapper
{
    public function __construct() {
        $f3 = \Base::instance();
        parent::__construct($f3->get('DB'), 'posts');
    }

    public function savePost(string $title, string $description):void
    {
        $this->title=$title;
        $this->description=$description;
        $this->createdAt=time();
        $this->save();
    }
    public static function getAll(): array
    {
        $f3 = \Base::instance();
        $all = new Mapper($f3->get('DB'),'posts');
        return $all->find();
    }

}