<?php
    return [
        '/' => [
            'get' => [
                'controller' => \App\Controller\HomeController::class,
                'method' => 'index',
            ],
        ],
        '/contact-us' => [
            'get' => [
                'controller' => \App\Controller\ContactController::class,
                'method' => 'getContactPage',
            ],
            'post' => [
                'controller' => \App\Controller\ContactController::class,
                'method' => 'sendContactForm',
            ],
        ],
    ];