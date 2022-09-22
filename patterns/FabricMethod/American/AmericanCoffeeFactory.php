<?php

namespace Patterns\FabricMethod\American;

use Patterns\FabricMethod\AbstractCoffeeFactory;
use Patterns\FabricMethod\CoffeeInterface;

class AmericanCoffeeFactory extends AbstractCoffeeFactory
{
    public function createCoffee($type): CoffeeInterface
    {
        switch ($type) {
            case 'americano':
                return new AmericanoCoffee();
            case 'espresso':
                return new EspressoCoffee();
            case 'latte':
                return new LatteCoffee();
            default:
                throw new \Exception('Unknown coffee type');
        }
    }
}