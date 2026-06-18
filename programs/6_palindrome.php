<?php

$text = isset($argv[1]) ? $argv[1] : "madam";
$normalized = strtolower(preg_replace('/[^a-z0-9]/i', '', $text));
$isPalindrome = $normalized === strrev($normalized);

echo "\"{$text}\" is " . ($isPalindrome ? "" : "not ") . "a palindrome\n";
