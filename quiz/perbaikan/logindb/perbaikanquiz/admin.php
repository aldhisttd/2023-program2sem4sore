<?php
// admin.php

// Mulai sesi
session_start();

// Periksa apakah pengguna telah login dan memiliki peran sebagai admin_ganjil
if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin_ganjil') {
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
    <h1>Admin Ganjil </h1>

    <a href="logout.php">Logout</a>
</body>
</html>