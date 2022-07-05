<?php

require_once __DIR__ . '/Node.php';
require_once __DIR__ . '/LinkedList.php';

$list = new LinkedList();
$list
    ->insert(3)
    ->insert(5)
    ->insert(1)
    ->insert(2)
    ->insert(7)
    ->insert(9)
    ->insert(2)
    ->insert(1)
;
// 8->1->9->7->2->1->5->3
$after = $list->search(7);
$list->insert(13, $after);
$list->delete($list->search(9));
$list->print();