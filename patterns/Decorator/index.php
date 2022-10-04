<?php

use Patterns\Decorator\LoggerQueryDecorator;
use Patterns\Decorator\UserQuery;

require_once __DIR__ . '/../../vendor/autoload.php';

$query = new UserQuery();
$loggingQuery = new LoggerQueryDecorator($query);
$loggingQuery->getQuery() . "\n";

//echo $query->getQuery();