<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Patterns\Singleton\App;

$app1 = App::getInstance();
$app2 = App::getInstance();

var_dump(spl_object_id($app1), spl_object_id($app2));