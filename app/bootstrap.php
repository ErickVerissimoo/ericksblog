<?php
namespace Note\Ericksblog;

use DB\SQL;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
require __DIR__.'/../vendor/autoload.php';

function register_class_aliases($dir) {
    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    
    foreach ($files as $file) {
        if ($file->getExtension() == 'php') {
            require_once $file->getRealPath();
            
            $declaredClasses = get_declared_classes();
            
            $class = end($declaredClasses);
            
            $classNameWithoutNamespace = substr(strrchr($class, '\\'), 1);
            
            class_alias($class, $classNameWithoutNamespace);
            
        }
    }
}
$f3 = \Base::instance();
$sql = new SQL(
'mysql:host=localhost;port=3306;dbname=fat',
    'root',
    'erick'

);
if(!$sql ->exists("users")){
$sql->exec('CREATE TABLE users(
id int auto_increment primary key,
email varchar(190),
password varchar(100)
);');
}
$f3->set('DB', $sql);
