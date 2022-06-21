<?php

declare(strict_types=1);

$a = 0;

function localScope(?float $x): void
{
    echo $x . "\n";
}

localScope((float) $a);