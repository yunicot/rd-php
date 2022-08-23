<?php

declare(strict_types=1);

namespace App\Repository;

use App\DI\Container;
use App\Model\ModelInterface;

abstract class BasePdoRepository implements RepositoryInterface
{
    protected \PDO $pdo;

    public function __construct()
    {
        $this->pdo = Container::getInstance()->getPdo();
    }

    public function findAll(): array
    {
        $statement = $this->pdo->query('SELECT * FROM ' . $this->getTableName());
        $results = $statement->fetchAll(\PDO::FETCH_ASSOC);

        $users = [];
        foreach ($results as $dbUser) {
            $users[] = $this->transformToModel($dbUser);
        }

        return $users;
    }

    public function find(int $id): ?ModelInterface
    {
        // TODO: Implement find() method.
    }

    public function create(ModelInterface $model): ?ModelInterface
    {
        // TODO: Implement create() method.
    }

    public function update(ModelInterface $model): ?ModelInterface
    {
        // TODO: Implement update() method.
    }

    public function delete(mixed $id): ?ModelInterface
    {
        // TODO: Implement delete() method.
    }

    abstract protected function transformToDb(ModelInterface $model): array;

    abstract protected function transformToModel(array $data): ModelInterface;

    abstract protected function getTableName(): string;
}