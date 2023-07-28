<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['masuk'])) {
    header('location:index.php');
}
if ($_SESSION['role'] == 'User Genap') {
    header('location:user.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin Database</title>
</head>

<body>
    <h1>Halaman Admin Database</h1>
    <h3>Login sebagai : <?php echo $_SESSION['role']; ?></h3>
    <p>Selamat datang <?php echo $_SESSION['masuk']; ?></p>

    <p><a href="logout.php">Logout</a></p>
</body>

</html>