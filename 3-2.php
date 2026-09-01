<!-- 3.2 Write a PHP script to read the cookie of a form  -->

<?php
if (isset($_COOKIE["username"])) {
    echo "Username: " . $_COOKIE["username"];
} else {
    echo "Cookie not found.";
}
?>