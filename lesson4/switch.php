<?php

$i = 1;

//if ($i === 1) {
//    echo '$i = 1';
//} elseif ($i === 2) {
//    echo '$i = 2';
//} elseif ($i === 3) {
//    echo '$i = 3';
//} elseif ($i === 4) {
//    echo '$i = 4';
//}

switch ($i) {
    case 1:
    case 2:
        echo '$i = 2';
    case 3:
        echo '$i = 3';
        break;
    case 4:
        echo '$i = 4';
        break;
    default:
        echo 'Invalid number';
}
