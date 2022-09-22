<?php

use Patterns\FabricMethod\AbstractCoffeeFactory;
use Patterns\FabricMethod\American\AmericanCoffeeFactory;
use Patterns\FabricMethod\Spain\SpainCoffeeFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$type = 'latte';
$coffeeFactory = AbstractCoffeeFactory::createFactory('spain');
$coffee = $coffeeFactory->createCoffee($type);
var_export($coffee);