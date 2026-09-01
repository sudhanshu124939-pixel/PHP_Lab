<!-- 3.4 Write a PHP script to delete a cookie  -->

<?php
setcookie("username", "", time() - 3600);

echo "Cookie deleted successfully.";
?>