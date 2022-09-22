<?php

namespace Patterns\FabricMethod\Spain;

use Patterns\FabricMethod\AbstractCoffeeFactory;
use Patterns\FabricMethod\CoffeeInterface;

class SpainCoffeeFactory extends AbstractCoffeeFactory
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