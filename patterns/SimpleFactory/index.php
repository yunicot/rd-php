<?php

use Patterns\SimpleFactory\CoffeeFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$type = 'latte';
$coffeeFactory = new CoffeeFactory();
$coffee = $coffeeFactory->createCoffee($type);
var_export($coffee);