<!-- 3.6 Write a PHP script to destroy a session -->

<?php
session_start();
session_unset();
session_destroy();
echo "Session destroyed successfully.";
?>