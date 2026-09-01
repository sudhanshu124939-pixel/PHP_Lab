<!-- 2.3 Write a program to perform following array functions: 
1) array_change_key_case($var, CASE_LOWER/CASE_UPPER). 
2) array_chunk($var,size) //array of months 
3) array_count_values() 
4) array_pop() 
5) array_push() 
6) array_unshift() 
7) array_shift() -->

<!DOCTYPE html>
<html>

<head>
    <title>Array Functions</title>
</head>

<body>

    <?php

    echo "<h3>1. array_change_key_case()</h3>";
    $arr1 = ["Name" => "Suman", "City" => "Rajkot"];
    print_r(array_change_key_case($arr1, CASE_LOWER));
    echo "<br><br>";

    echo "<h3>2. array_chunk()</h3>";
    $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    print_r(array_chunk($months, 3));
    echo "<br><br>";

    echo "<h3>3. array_count_values()</h3>";
    $arr2 = ["Apple", "Banana", "Apple", "Mango", "Banana", "Apple"];
    print_r(array_count_values($arr2));
    echo "<br><br>";

    echo "<h3>4. array_pop()</h3>";
    $arr3 = [10, 20, 30, 40];
    array_pop($arr3);
    print_r($arr3);
    echo "<br><br>";

    echo "<h3>5. array_push()</h3>";
    $arr4 = [10, 20, 30];
    array_push($arr4, 40, 50);
    print_r($arr4);
    echo "<br><br>";

    echo "<h3>6. array_unshift()</h3>";
    $arr5 = [20, 30, 40];
    array_unshift($arr5, 10);
    print_r($arr5);
    echo "<br><br>";

    echo "<h3>7. array_shift()</h3>";
    $arr6 = [10, 20, 30, 40];
    array_shift($arr6);
    print_r($arr6);

    ?>

</body>

</html>