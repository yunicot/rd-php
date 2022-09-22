<?php

namespace Patterns\FabricMethod;

use Patterns\FabricMethod\American\AmericanCoffeeFactory;
use Patterns\FabricMethod\Spain\SpainCoffeeFactory;

abstract class AbstractCoffeeFactory
{
    abstract public function createCoffee($type): CoffeeInterface;

    public static function createFactory(string $type): static
    {
        switch ($type) {
            case 'american':
                return new AmericanCoffeeFactory();
            case 'spain':
                return new SpainCoffeeFactory();
            default:
                throw new \InvalidArgumentException('Unknown factory type');
        }
    }
}