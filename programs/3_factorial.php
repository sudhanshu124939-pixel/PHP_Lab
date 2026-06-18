<?php

$number = isset($argv[1]) ? (int) $argv[1] : 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Factorial of {$number} is {$factorial}\n";
