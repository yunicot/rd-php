<?php

require_once __DIR__ . '/Node.php';
require_once __DIR__ . '/LinkedList.php';

$list = new LinkedList();
$n = 100000;
$list->insert(20000);
for($i = 0; $i < $n; $i++) {
    $list->insert(random_int(1, 10000));
}

$startAt = microtime(true);
$list->search(20000);

echo microtime(true) - $startAt . "\n";

// 8->1->9->7->2->1->5->3
//$after = $list->search(7);
//$list->insert(13, $after);
//$list->delete($list->search(9));
//$list->print();