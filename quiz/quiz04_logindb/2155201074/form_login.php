<?php


include "koneksi.php";
session_start();
if(isset($_POST['login'])){

    $userForm = $_POST['username'];
    $passForm = $_POST['pass'];

    $data ="SELECT * From login_db WHERE username = '$userForm' AND password ='$passForm'";
    $hasil = mysqli_query($koneksi,$data);

    if($hasil -> num_rows != 0){
        $row= mysqli_fetch_assoc($hasil);
        $_SESSION['username']=$row['username'];
        header("location:index.php");
    }
    
    // if($userForm == $userAdmin && $passForm == $passAdmin){
    //     // login
    //     $_SESSION['login'] = $userAdmin;
    //     $_SESSION['role'] = 'admin';
    //     // redirect ke hal admin
    //     header('location:admin.php');
    // }

    // if($userForm == $userkaryawan && $passForm == $passkaryawan){
    //     // login
    //     $_SESSION['login'] = $userkaryawan;
    //     $_SESSION['role'] = 'karyawan';
    //     // redirect ke hal karyawan
    //     header('location:karyawan.php');
    // }
    
    // if($userForm == $user && $passuser == $passuser){
    //     // login
    //     $_SESSION['login'] = $user;
    //     $_SESSION['role'] = 'user';
    //     // redirect ke hal user
    //     header('location:user.php');
    // }

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
<form action="" method="POST">
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