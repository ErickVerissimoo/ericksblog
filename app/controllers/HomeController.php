<?php

namespace Note\Ericksblog\controllers;
require __DIR__.'/../../vendor/autoload.php';


class HomeController
{
    public function index(\Base $f3)
    {
     $f3->set('ugue', 'ugue vuxe disse');   
       echo \Template::instance()->render('ola.html');
    }
}