<!-- 1.5 Write a PHP program to print 5 to 10 using For and For Each.  -->

<?php
    echo "<b>Using For loop:</b><br>";
    for ($i = 5; $i <= 10; $i++) {
        echo $i . "<br>";
    }

    echo "<br><b>Using For Each loop:</b><br>";
    $numbers = range(5, 10);
    foreach ($numbers as $number) {
        echo $number . "<br>";
    }
?>