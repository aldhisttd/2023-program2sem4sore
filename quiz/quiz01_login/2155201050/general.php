<?php 
session_start();

if(!isset($_SESSION['general'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman General</title>
</head>
<body>

    <h1>Halaman General</h1>
    <p>Login sebagai : <?php echo $_SESSION['general'] ?></p>
    <p><a href="logout.php">Logout</a></p>
   
</body>
</html>