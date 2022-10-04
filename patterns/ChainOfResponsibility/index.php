<?php

use Patterns\ChainOfResponsibility\Authentication;
use Patterns\ChainOfResponsibility\Authorization;
use Patterns\ChainOfResponsibility\Validation;

require_once __DIR__ . '/../../vendor/autoload.php';

$authentication = new Authentication();
$authorization = new Authorization();
$validation = new Validation();
// authentication -> authorization -> validation
$authentication->setNext($authorization);
$authorization->setNext($validation);
echo $authentication->handle('Start') . "\n";

echo "Chain of Responsibility" . "\n";