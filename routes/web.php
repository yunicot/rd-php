<?php
    return [
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