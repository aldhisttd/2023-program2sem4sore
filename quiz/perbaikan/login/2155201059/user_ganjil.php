<?php 
session_start();

if(!isset($_SESSION['login'])){
    header('location:form_login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User Ganjil</title>
    <a href="admin_ganjil.php">Halaman admin & User</a>
</head>
<body>
    <p>Login sebagai : <?php echo $_SESSION['login'] ?></p>
    <p><a href="logout.php">Logout</a></p>
    <h1>Halaman User Ganjil</h1>
</body>
</html>