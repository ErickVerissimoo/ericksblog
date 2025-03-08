<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/bootstrap.php';
$template = \Template::instance();
use function Note\Ericksblog\register_class_aliases;
$f3 = Base::instance();
$f3->set('UI', __DIR__.'/../app/views/');
register_class_aliases(__DIR__.'/../app/controllers');
$f3->route('GET /hello', 'HomeController->index');
$f3->run();