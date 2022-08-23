<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;
use App\Model\User;

class UserRepository extends BasePdoRepository
{
    public function findByEmail(string $email): ?User
    {
        $statement = $this->pdo->prepare('SELECT * FROM `user` WHERE email = :email');
        $statement->execute(['email' => $email]);

        $user = $statement->fetch(\PDO::FETCH_ASSOC);
        if (empty($user)) {
            return null;
        }

        return $this->transformToModel($user);
    }

    protected function transformToDb(ModelInterface $model): array
    {
        // TODO: Implement transformToDb() method.
    }

    protected function transformToModel(array $data): ModelInterface
    {
        return (new User($data['name'], $data['email']))
            ->setBirthday(isset($data['birthday']) ? (new \DateTime())->setTimestamp($data['birthday']) : null)
            ->setId($data['id'])
            ->setGender($data['gender'])
            ->setPhone($data['phone'])
        ;
    }

    protected function getTableName(): string
    {
        return 'user';
    }
}
