<?php
// admin.php

// Mulai sesi
session_start();


if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin_genap') {
    echo "selamat datang di halaman admin & user";
} else {
    header("Location: login.php"); // Redirect ke halaman login jika pengguna belum login atau tidak memiliki peran admin_ganjil
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin & User</title>
</head>
<body>
    <h1>Admin Genap </h1>
    <P>  <a href="user.php">Halaman User</a></P>
    <a href="logout.php">Logout</a>
</body>
</html>
