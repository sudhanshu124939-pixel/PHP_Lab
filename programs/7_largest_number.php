<?php

$numbers = isset($argv[1]) ? array_map('intval', explode(',', $argv[1])) : [12, 7, 23, 4, 18];
$largest = max($numbers);

echo "Largest number is {$largest}\n";
