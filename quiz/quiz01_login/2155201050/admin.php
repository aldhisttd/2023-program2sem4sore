<?php 
session_start();

if(!isset($_SESSION['admin'])){
    header('location:login.php');
}
  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman Admin</title>
</head>

<body>

    <h1>Halaman Admin</h1>
    <p>Login sebagai : <?php echo $_SESSION['admin'] ?></p>
    <p><a href="logout.php">Logout</a></p>
    
</body>
</html>