<?php
session_start();

if(isset($_SESSION['login'])){
    header('location:admin.php');
}

if(isset($_POST['login'])){
    $userForm = $_POST['username'];
    $passForm = $_POST['pass'];

    $userBenar = "admin";
    $passBenar = "admin";

    if($userForm == $userBenar && $passForm == $passBenar){
        // login
        
        $_SESSION['login'] = $userBenar;
        // redirect ke hal admin
        header('location:admin.php');
    }else{
        // buat pesan salah
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