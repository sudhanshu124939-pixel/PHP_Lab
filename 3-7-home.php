<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: 3-7.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>

    <h2>Welcome <?php echo $_SESSION["username"]; ?></h2>

    <p>You have successfully logged in.</p>

    <a href="3-7-logout.php">Logout</a>

</body>

</html>