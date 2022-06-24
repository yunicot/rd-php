<?php

declare(strict_types=1);

class Ship {
    private string $name;
    private int $weapon = 0;
    private int $health = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {

        if (mb_strlen($name) <= 5) {
            throw new Exception('Length should be more than 5');
        }
        $this->name = $name;
        return $this;
    }

    public function getWeapon(): int
    {
        return $this->weapon;
    }

    public function setWeapon(int $weapon): self
    {
        if ($weapon < 0) {
            throw new Exception('Weapon should not be less than 0');
        }

        $this->weapon = $weapon;
        return $this;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth(int $health): self
    {
        if ($health < 0) {
            throw new Exception('Weapon should not be less than 0');
        }

        $this->health = $health;
        return $this;
    }

    public function shortInfo(): string
    {
        return sprintf(
            'n: %s, w: %d, h: %d',
            $this->name,
            $this->weapon,
            $this->health
        );
    }
}

$ship1 = new Ship('Megaship');
//$ship1->setHealth(30);
//$ship1->setWeapon(15);
var_dump($ship1->shortInfo());
