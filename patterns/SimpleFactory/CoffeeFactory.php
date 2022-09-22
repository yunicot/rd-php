<?php

namespace Patterns\SimpleFactory;

class CoffeeFactory
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