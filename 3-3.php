<!-- 3.3 Write a PHP script to use cookie with header  -->

<?php
setcookie("username", "Suman", time() + 3600);

header("Location: 3-2.php");
exit();
?>