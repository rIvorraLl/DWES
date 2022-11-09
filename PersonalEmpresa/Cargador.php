<?php

spl_autoload_register(function ($className) {
    $file = 'Clases/' . $className . '.php';
    if (file_exists($file)) {
        include $file;
    }
});

//spl_autoload_register(function ($className) {
//    $file = __DIR__ . '/clases/' . $className . '.php';
//    if (file_exists($file)) {
//        include $file;
//    }
//});


