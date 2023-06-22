<?php
session_start();

if(isset($_SESSION['login_admin'])){
    header('location:admin.php');
}
else{
    if(isset($_SESSION['login_general'])){
        header('location:general.php');
    }
}

if(isset($_POST['login'])){
    $userForm = $_POST['username'];
    $passForm = $_POST['pass'];

    $userAdmin = "admin";
    $passAdmin = "admin";

    $userGeneral = "general";
    $passGeneral = "general";

    if($userForm == $userAdmin && $passForm == $passAdmin){
        // login
        
        $_SESSION['login_admin'] = $userAdmin;
        // redirect ke hal admin
        header('location:admin.php');
    }
    
    if($userForm == $userGeneral && $passForm == $passGeneral){
        // login
        
        $_SESSION['login_general'] = $userGeneral;
        // redirect ke hal admin
        header('location:general.php');
    }

    else{
        echo "Username atau Password Salah";
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