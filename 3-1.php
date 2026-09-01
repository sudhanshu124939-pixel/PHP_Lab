<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    setcookie("username", $username, time() + 3600);

    echo "Cookie created successfully.<br>";
    echo "<a href='3-2.php'>Read Cookie</a>";
}
