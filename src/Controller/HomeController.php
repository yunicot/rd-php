<?php

declare(strict_types=1);

namespace App\Controller;

use App\DI\Container;
use App\Repository\UserRepository;

class HomeController extends AbstractController
{
    public function index(): string
    {
        /** @var UserRepository $userRepository */
        $userRepository = Container::getInstance()->getUserRepository();

        return $this->render('index');
    }
}