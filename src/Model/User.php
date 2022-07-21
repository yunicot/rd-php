<?php

declare(strict_types=1);

namespace App\Model;

use App\Util\Str;

class User implements ModelInterface, \JsonSerializable
{
    private ?int $id = null;
    private ?\DateTime $birthday = null;
    private ?int $gender = null;
    private ?string $phone = null;

    private ?string $password = null;
    private ?string $salt = null;

    public function __construct(
        private string $name,
        private string $email,
    ) {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBirthday(): ?\DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTime $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(?int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $plainPassword): self
    {
        if ($this->salt === null) {
            $this->setSalt(Str::random(32));
        }

        $this->password = md5($plainPassword . $this->getSalt());

        var_dump($this->password, $plainPassword, $this->salt);
        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(?string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function toStorage(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'birthday' => $this->birthday?->getTimestamp(),
            'gender' => $this->gender,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => $this->password,
            'salt' => $this->salt,
        ];
    }

    public static function createFromStorage(array $data): self
    {
        $user = new User($data['name'], $data['email'] ?? '');
        $user->setGender($data['gender'] ?? null)
            ->setId($data['id'] ?? null)
            ->setEmail($data['email'])
            ->setPhone($data['phone'] ?? null)
            ->setSalt($data['salt'] ?? null)
        ;

        $user->password = $data['password'] ?? null;
        if (($data['birthday'] ?? null) !== null) {
            $user->setBirthday((new \DateTime())->setTimezone($data['birthday']));
        }

        return $user;
    }

    public function jsonSerialize(): array
    {
        return $this->toStorage();
    }
}
