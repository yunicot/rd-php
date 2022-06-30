<?php

use App\Model\Location;
use App\Model\Trainer;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/bootstrap.php';

$trainer = new Trainer('Mike Smith');
// 30 07 2022 20:00
// 2022-07-30T20:00:00.000Z
//$training = new Training(
//    'Powerlifting',
//    DateTime::createFromFormat('d.m.Y H:i', '30.07.2022 20:00')
//);
//
//$training->setTrainers([new Category('Category name')]);
//
//echo $training->getTitle();
//echo '<br>';
//echo $training->getStartAt()->format('Y-m-d H:i:s');
//

$location = new Location('Ukraine', 'Kyiv', 'Khreschatyk');
