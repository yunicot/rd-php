<?php

require_once __DIR__ . '/Node.php';

$root = new Node(8);

$root->insert(5)
    ->insert(10)
    ->insert(7)
    ->insert(13)
    ->insert(15)
    ->insert(20)
;
var_export($root);