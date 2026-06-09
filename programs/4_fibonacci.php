<?php

$count = isset($argv[1]) ? (int) $argv[1] : 10;
$first = 0;
$second = 1;

echo "Fibonacci series: ";

for ($i = 0; $i < $count; $i++) {
    echo $first . ($i < $count - 1 ? " " : "\n");
    $next = $first + $second;
    $first = $second;
    $second = $next;
}
