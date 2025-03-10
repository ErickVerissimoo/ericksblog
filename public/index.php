<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/bootstrap.php';
$template = \Template::instance();
use function Note\Ericksblog\register_class_aliases;
$f3 = Base::instance();
$f3->set('UI', __DIR__.'/../app/views/');
$f3->set('SESSION.auto_start', true);
register_class_aliases(__DIR__.'/../app/controllers');
$f3->route('GET /cadastro', 'AuthController->getPage');
$f3->route('POST /cadastro', 'AuthController->cadastro');
$f3->route('POST /login', 'AuthController->login');
$f3->route('GET /home', 'HomeController->getPage');
$f3->run();