<?php
session_start();

if(isset($_POST['login'])){
    $userForm = $_POST['username'];
    $passForm = $_POST['pass'];

    $useradmin = "admin";
    $passadmin = "admin";

    $user = "user";
    $passuser = "user";

    $userkaryawan = "karyawan";
    $passkaryawan = "karyawan";


    if($userForm == $useradmin && $passForm == $passadmin){
        $_SESSION['login'] = $useradmin;
        $_SESSION['role'] = 'admin';
   
        header('location:admin.php');
    }

    if($userForm == $user && $passuser == $passuser){
        $_SESSION['login'] = $user;
        $_SESSION['role'] = 'user';

        header('location:user.php');
    }

    if($userForm == $userkaryawan && $passForm == $passkaryawan){
      $_SESSION['login'] = $userkaryawan;
      $_SESSION['role'] = 'karyawan';

      header('location:karyawan.php');
  }
  
    else{
        echo "Username atau Password Salah !!"; 
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