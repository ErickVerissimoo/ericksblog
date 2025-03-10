<?php

namespace Note\Ericksblog\controllers;

class HomeController
{
    public function getPage(\Base $f3){
        $email = $f3->get('SESSION.email');
        
        if(!$email){
die('emaail não encontrado');
        }
        $f3->set('email', $email);
        echo \Template::instance()->render('home.html');
    } 
}