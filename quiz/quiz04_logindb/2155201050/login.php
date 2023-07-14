<?php 
session_start();
include "koneksi.php";

if(isset($_POST['login'])){
  $username = $_POST["username"];
  $password = $_POST["pass"];


   $q = "SELECT * FROM user WHERE username = '$username' AND PASSWORD = '$password'";
   $r = mysqli_query($koneksi, $q );

   if(mysqli_num_rows($r)==1){
    $row= mysqli_fetch_assoc($r);
    $_SESSION['username']=$row['username'];
    header("location:admin.php");
   }else{
    echo "Email atau password salah!";
   }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
<form action="login.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login" name="login"></td>
            </tr>
        </table>
    </form>  
</body>
</html>