<?php
$conn = require_once __DIR__ . '/db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Invalid Request');
}

$id = (int) $_GET['id'];

$stmt = mysqli_prepare($conn, "SELECT profile FROM users WHERE id = ?");
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($res);
mysqli_stmt_close($stmt);

if ($row && !empty($row['profile']) && file_exists(__DIR__.'/uploads/'.$row['profile'])) {
    @unlink(__DIR__.'/uploads/'.$row['profile']);
}

$del = mysqli_prepare($conn, "DELETE FROM users WHERE id = ?");
mysqli_stmt_bind_param($del, 'i', $id);
mysqli_stmt_execute($del);
mysqli_stmt_close($del);

header('Location: index.php');
exit;
