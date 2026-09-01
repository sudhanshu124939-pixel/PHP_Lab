<!-- 3.5 Write a PHP script to create a session  -->

<?php
session_start();

$_SESSION["username"] = "Suman";
$_SESSION["email"] = "suman@example.com";

echo "Session created successfully.<br>";
echo "Username: " . $_SESSION["username"];
?>