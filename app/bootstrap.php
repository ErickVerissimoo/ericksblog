<?php
namespace Note\Ericksblog;

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