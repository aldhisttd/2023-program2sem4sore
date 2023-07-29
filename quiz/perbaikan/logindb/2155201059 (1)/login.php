<?php
// login.php

// Mulai sesi
session_start();

// Panggil file koneksi.php untuk menghubungkan ke database
require_once('koneksi.php');

// Fungsi untuk memeriksa kecocokan username dan password
function authenticate($username, $password) {
    global $conn;

    // Melakukan sanitasi terhadap input
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Periksa username dan password
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_role'] = $row['role'];
        return true; // Login berhasil
    } else {
        return false; // Login gagal
    }
}

// Proses form login jika data dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Lakukan autentikasi
    if (authenticate($username, $password)) {
        if ($_SESSION['user_role'] === 'admin_ganjil') {
            header("Location: admin.php"); // Redirect ke halaman admin_ganjil
        } elseif ($_SESSION['user_role'] === 'user_ganjil') {
            header("Location: user.php"); // Redirect ke halaman user_ganjil
        }
    } else {
        echo "Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <h2>Form Login</h2>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        
        <label>Password:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
