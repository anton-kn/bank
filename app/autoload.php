<?php
spl_autoload_register(function($class){
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    require 'app/' . $file;
});

