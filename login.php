<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 2 | Login Page</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $valid_username = 'admin';
        $valid_password = 'password';

        if ($username === $valid_username && $password === $valid_password) {
            header('Location: home.php');
            exit();
        } else {
            echo "Invalid username or password.";
        }
    }
?>