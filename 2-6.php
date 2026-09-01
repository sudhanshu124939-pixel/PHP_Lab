<!-- 2.6 Write a PHP code to use mysql date and time functions as given bellow:
        1) DAYOFWEEK()
        2) WEEKDAY()
        3) DAYOFMONTH()
        4) DAYOFYEAR()
        5) DAYNAME() -->

<?php
$conn = mysqli_connect("localhost", "root", "", "2-6");

if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT
            DAYOFWEEK(CURDATE()) AS DayOfWeek,
            WEEKDAY(CURDATE()) AS WeekDay,
            DAYOFMONTH(CURDATE()) AS DayOfMonth,
            DAYOFYEAR(CURDATE()) AS DayOfYear,
            DAYNAME(CURDATE()) AS DayName";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>MySQL Date Functions</h2>";
        echo "DAYOFWEEK(): " . $row['DayOfWeek'] . "<br>";
        echo "WEEKDAY(): " . $row['WeekDay'] . "<br>";
        echo "DAYOFMONTH(): " . $row['DayOfMonth'] . "<br>";
        echo "DAYOFYEAR(): " . $row['DayOfYear'] . "<br>";
        echo "DAYNAME(): " . $row['DayName'] . "<br>";
}

mysqli_close($conn);
?>