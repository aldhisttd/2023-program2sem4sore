<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location:login.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Halaman User</h1>
    <p>Login sebagai : <?php echo $_SESSION['role'] ?></p>
   
    <p><a href="logout.php">Logout</a></p>

</body>
</html>