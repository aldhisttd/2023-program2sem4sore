<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location:login.php');
}
if ($_SESSION['role'] == 'admin') {
    header('location:admin.php');
}
if ($_SESSION['role'] == 'karyawan') {
    header('location:karyawan.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Adalah Halaman User</title>
</head>

<body>

    <p>Login sebagai : <?= $_SESSION['login']; ?></p>
    <h1>Halaman User</h1>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>