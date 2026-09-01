<!-- 2.4 Write a that demonstrate the use of following string functions:
            1) strlen() // any string
            2) strpos() //find some specific word,letter
            3) str_word_count()
            4) strrev()
            5) strtolower()
            6) strtoupper() -->

<?php
$text = "WADUP LAB Examples";

echo "<pre>";
echo "<b>Original string:</b> " . $text . "\n\n";

echo "<b>1) strlen():</b> " . strlen($text) . "\n";

$posPHP = strpos($text, 'WADUP');
$posW = strpos($text, 'E');
echo "<b>2) strpos('PHP'):</b> " . ($posPHP === false ? 'not found' : $posPHP) . "\n";
echo "   <b>strpos('w'):</b> " . ($posW === false ? 'not found' : $posW) . "\n";

echo "<b>3) str_word_count():</b> " . str_word_count($text) . "\n";

echo "<b>4) strrev():</b> " . strrev($text) . "\n";

echo "<b>5) strtolower():</b> " . strtolower($text) . "\n";

echo "<b>6) strtoupper():</b> " . strtoupper($text) . "\n";
echo "</pre>";
?>