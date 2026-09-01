<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "lab-13";

// Connect to MySQL server (no DB specified) so we can create the DB if missing
$conn = mysqli_connect($host, $user, $password);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$createDb = "CREATE DATABASE IF NOT EXISTS `" . $database . "` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
if (!mysqli_query($conn, $createDb)) {
    die("Failed to create database: " . mysqli_error($conn));
}

// Select the database
if (!mysqli_select_db($conn, $database)) {
    die("Failed to select database: " . mysqli_error($conn));
}

// Create table if it doesn't exist
$create = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    email VARCHAR(150),
    profile VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

mysqli_query($conn, $create);

// Return the connection for callers
return $conn;
