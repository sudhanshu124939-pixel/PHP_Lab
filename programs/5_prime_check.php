<?php

$number = isset($argv[1]) ? (int) $argv[1] : 29;
$isPrime = $number > 1;

for ($i = 2; $i * $i <= $number; $i++) {
    if ($number % $i === 0) {
        $isPrime = false;
        break;
    }
}

echo $number . ($isPrime ? " is prime\n" : " is not prime\n");
