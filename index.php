<?php

use App\Repository\JsonRepository;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/bootstrap.php';

function auth(int $id, string $password): bool
{
    $repository = new JsonRepository(__DIR__ . '/db/users.json');
    /** @var \App\Model\User $user */
    $user = $repository->find($id);
    var_dump($user);
    if ($user === null) {
        return false;
    }

    return $user->getPassword() === md5($password . $user->getSalt());
}

$repository = new JsonRepository(__DIR__ . '/db/users.json');
//$user = new \App\Model\User('Viacheslav', 'test@test.com');
//$user->setPassword('qwerty123');
//$user = $repository->create($user);

if (auth(1, 'qwerty123')) {
    echo 'You passed correct creds';
} else {
    echo 'Incorrect password';
}