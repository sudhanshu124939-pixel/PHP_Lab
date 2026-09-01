<!-- 1.3 Write a PHP program for operators in PHP. -->

<?php
    $a = 10;
    $b = 5;

    echo "<b>Arithmetic Operators:</b><br>";
    echo "Addition: " . ($a + $b) . "<br>";
    echo "Subtraction: " . ($a - $b) . "<br>";
    echo "Multiplication: " . ($a * $b) . "<br>";
    echo "Division: " . ($a / $b) . "<br>";
    echo "Modulus: " . ($a % $b) . "<br>";

    echo "<br>";
    echo "<b>Comparison Operators:</b><br>";
    echo "Is a equal to b? " . ($a == $b ? 'Yes' : 'No') . "<br>";
    echo "Is a not equal to b? " . ($a != $b ? 'Yes' : 'No') . "<br>";
    echo "Is a greater than b? " . ($a > $b ? 'Yes' : 'No') . "<br>";
    echo "Is a less than b? " . ($a < $b ? 'Yes' : 'No') . "<br>";

    echo "<br>";
    echo "<b>Logical Operators:</b><br>";
    $x = true;
    $y = false;

    echo "Logical AND (x && y): " . ($x && $y ? 'True' : 'False') . "<br>";
    echo "Logical OR (x || y): " . ($x || $y ? 'True' : 'False') . "<br>";
    echo "Logical NOT (!x): " . (!$x ? 'True' : 'False') . "<br>";

?>