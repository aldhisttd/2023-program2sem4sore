<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Halaman Admin</h1>
    <p>Login sebagai admin
    <p><a href="logout.php">Logout</a></p>
</body>
</html>