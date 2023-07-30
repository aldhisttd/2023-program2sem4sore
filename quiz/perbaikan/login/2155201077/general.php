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
    <title>General</title>
</head>
<body>
    <p>Login sebagai : <?php echo $_SESSION['login'] ?></p>
    <p><a href="logout.php">Logout</a></p>
    <h1>Halaman General</h1>
</body>
</html>