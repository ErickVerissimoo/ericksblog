<?php

namespace Note\Ericksblog\controllers;
use Note\Ericksblog\model\Postagem;
class HomeController
{

    public function beforeroute(\Base $f3)
    {
        $f3->get('SESSION.email') ?? $f3->error("404", 'email not founded');
    }
    public function getPage(\Base $f3){
        $email = $f3->get('SESSION.email');
        
        $f3->set('email', $email);
        $f3->set('posts', Postagem::getAll());
        echo \Template::instance()->render('home.html');
    } 
}