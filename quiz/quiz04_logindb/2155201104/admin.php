<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <p>Login sebagai : <?= $_SESSION['username']; ?></p>
    <h1>Halaman Admin</h1>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>