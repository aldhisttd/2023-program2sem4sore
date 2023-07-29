<?php
// user.php

// Mulai sesi
session_start();

if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'user_genap') {
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
    <P>  <a href="admin.php">Halaman admin & user</a></P>
    <a href="logout.php">Logout</a>
</body>
</html>
