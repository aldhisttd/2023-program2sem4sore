<?php
session_start();

if(isset($_SESSION['login'])){
    header('location:admin.php');
}

if(isset($_POST['login'])){
    $userForm = $_POST['username'];
    $useruser_ganjil = $_POST['username'];
    $passForm = $_POST['pass'];
    $passuser_ganjil = $_POST['pass'];


    $userBenar = "admin ganjil";
    $passBenar = "admin ganjil";
    $useruser_ganjil = "user ganjil";
    $passuser_ganjil= "user ganjil";

    if($userForm == $userBenar && $passForm == $passBenar){
        // login
        $_SESSION['login'] = $userBenar;
        // redirect ke hal admin
        header('location:admin_ganjil.php');
    }
    elseif($useruser_ganjil == $useruser_ganjil && $passuser_ganjil == $passuser_ganjil){

        $_SESSION['login'] = $useruser_ganjil;
        // redirect ke hal admin
        header('location:user_ganjil.php');
    }
    else{
        echo "Username dan Password yang anda Masukkan Salah";
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
    <form action="form_login.php" method="POST">
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
                <td></td>
                <td></td>
                <td><input type="submit" value="Login" name="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>