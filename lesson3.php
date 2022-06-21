<?php

$name = '3,3Viacheslav';
$kb = 22.7 * pow(10, -3);

$order = [
    'product' => 'Macbook',
    'amount' => 1100,
    'seller' => 'Apple',
    'shipment' => null,
];

//echo var_export($order, true);
$order['shipment'] = 'Free Delivery';
var_dump($order);
//echo "Hello, World!\n";
//echo "Hello, World new!\n";