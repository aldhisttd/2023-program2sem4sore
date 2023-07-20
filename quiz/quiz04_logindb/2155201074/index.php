<?php
session_start();

    if(!isset($_SESSION['username'])){
        header("location:form_login.php");
    }

    include "koneksi.php";
    // $a = $_SESSION['username'];
    // $data = mysqli_query($koneksi, "SELECT * FROM login_db WHERE username ='$a'");
    // $row = mysqli_fetch_array($data);
    // while($row = mysqli_fetch_array($data)){

// if (!isset($_SESSION['login'])) {
//     header('location:form_login.php');
// }

// if ($_SESSION['role'] == 'karyawan') {
//     header('location:karyawan.php');
// }

// if ($_SESSION['role'] == 'user') {
//     header('location:user.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Halaman Index</h1>
    <p>Login sebagai : <?php echo $_SESSION['username'] ?></p>
    <p><a href="logout.php">Logout</a></p>
    <?php
    
    ?>
</body>
</html>