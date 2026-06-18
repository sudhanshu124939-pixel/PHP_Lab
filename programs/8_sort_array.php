<?php

$numbers = isset($argv[1]) ? array_map('intval', explode(',', $argv[1])) : [9, 2, 7, 1, 5];
sort($numbers);

echo "Sorted array: " . implode(', ', $numbers) . "\n";
