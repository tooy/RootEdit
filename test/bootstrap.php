<?php

set_include_path(realpath('.') . PATH_SEPARATOR .  get_include_path() );
spl_autoload_register(function ($class) {
    $file = __DIR__.'/../' . str_replace('\\', '/', $class) . '.php';
    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});