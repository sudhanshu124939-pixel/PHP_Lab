<?php

$number = isset($argv[1]) ? (int) $argv[1] : 10;

if ($number % 2 === 0) {
    echo $number . " is even\n";
} else {
    echo $number . " is odd\n";
}
