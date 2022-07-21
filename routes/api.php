<?php
    return [
        '/api/users' => [
            'get' => [
                'controller' => \App\Controller\Api\UserController::class,
                'method' => 'getList',
            ],
            'post' => [
                'controller' => \App\Controller\Api\UserController::class,
                'method' => 'create',
            ],
        ]
    ];