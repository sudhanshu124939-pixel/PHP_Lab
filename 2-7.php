<!-- 2.7 Write a PHP code to use mysql date and time functions as given bellow:
        1) HOUR()
        2) MINUTE()
        3) SECOND()
        4) DATE_FORMAT(). -->

<?php
$conn = mysqli_connect("localhost", "root", "", "2-7");

if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT
            HOUR(CURTIME()) AS Hour,
            MINUTE(CURTIME()) AS Minute,
            SECOND(CURTIME()) AS Second,
            DATE_FORMAT(NOW(), '%d-%m-%Y %H:%i:%s') AS FormattedDateTime";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>MySQL Date and Time Functions</h2>";
        echo "HOUR(): " . $row['Hour'] . "<br>";
        echo "MINUTE(): " . $row['Minute'] . "<br>";
        echo "SECOND(): " . $row['Second'] . "<br>";
        echo "DATE_FORMAT(): " . $row['FormattedDateTime'] . "<br>";
}

mysqli_close($conn);
?>