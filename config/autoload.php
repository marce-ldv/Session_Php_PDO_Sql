<?php

spl_autoload_register(function($class){
    $class = str_replace('\\', '/', $class);
    $class = strtolower($class);
    include $class . '.php';
});
