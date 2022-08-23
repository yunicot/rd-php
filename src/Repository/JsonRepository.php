<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;
use App\Model\User;

class JsonRepository implements RepositoryInterface
{
    public function __construct(
        private string $filePath
    ) {
    }

    public function findAll(): array
    {
        $users = json_decode(file_get_contents($this->filePath), true);

        return array_map(
            static fn(array $user) => User::createFromStorage($user),
            $users
        );
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

    public function create(ModelInterface $model): ?ModelInterface
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

    public function update(ModelInterface $model): ModelInterface
    {

    }

    public function delete(mixed $id): ?ModelInterface
    {

    }
}