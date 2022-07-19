<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;
use App\Model\User;

class JsonRepository
{
    public function __construct(
        private string $filePath
    ) {
    }

    public function find(int $id): ?ModelInterface
    {
        $users = json_decode(file_get_contents($this->filePath), true);
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                return User::createFromStorage($user);
            }
        }
        return null;
    }

    public function create(ModelInterface $model): object
    {
        $users = file_get_contents($this->filePath);
        $oldUsers = json_decode($users, true);
        $lastUser = array_pop($oldUsers);
        if (empty($lastUser)) {
            $model->setId(1);
        } else {
            $oldUsers[] = $lastUser;
            $model->setId($lastUser['id'] + 1);
        }

        $oldUsers[] = $model->toStorage();
        file_put_contents($this->filePath, json_encode($oldUsers));

        return $model;
    }

    public function update(object $model): object
    {

    }

    public function delete(mixed $id): mixed
    {

    }
}