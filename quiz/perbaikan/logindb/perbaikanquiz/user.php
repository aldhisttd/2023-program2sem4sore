<?php
// user.php

// Mulai sesi
session_start();

// Periksa apakah pengguna telah login dan memiliki peran sebagai user_ganjil
if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'user_ganjil') {
    echo "Selamat Datang di Halaman User";
} else {
    header("Location: login.php"); // Redirect ke halaman login jika pengguna belum login atau tidak memiliki peran user_ganjil
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman User</title>
</head>
<body>
    <h1>User Ganjil</h1>

    <a href="logout.php">Logout</a>
</body>
</html>