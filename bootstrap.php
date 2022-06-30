<?php

require_once __DIR__ . '/vendor/autoload.php';

//spl_autoload_register(function ($class) {
//    if (!str_starts_with($class, 'App\\')) {
//        return;
//    }
//
//    $srcNamespace = str_replace('App\\', '', $class);
//    $filePath = __DIR__ . '/src/' . str_replace('\\', DIRECTORY_SEPARATOR, $srcNamespace) . '.php';
//    if (!file_exists($filePath)) {
//        return;
//    }
//
//    require_once $filePath;
//});


//
//require_once __DIR__ . '/src/Model/Category.php';
//require_once __DIR__ . '/src/Model/Gym.php';
//require_once __DIR__ . '/src/Model/User.php';
//require_once __DIR__ . '/src/Model/Trainer.php';
//require_once __DIR__ . '/src/Model/Training.php';
