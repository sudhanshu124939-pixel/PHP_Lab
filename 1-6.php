<!-- 1.6 Write a PHP program to print 15 to 20 using While and Do While. -->

<?php
    echo "<b>Using While loop:</b><br>";
    $i = 15;
    while ($i <= 20) {
        echo $i . "<br>";
        $i++;
    }

    echo "<br><b>Using Do While loop:</b><br>";
    $j = 15;
    do {
        echo $j . "<br>";
        $j++;
    } while ($j <= 20);
?>