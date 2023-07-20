<?php
session_start();
include 'koneksi.php';
// if (isset($_SESSION['login'])) {
//     header('location:admin.php');
// }

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $q ="SELECT * From login WHERE username = '$user' AND password ='$pass'";
    $result = mysqli_query($koneksi,$q);

    if($result -> num_rows > 0){
            $row= mysqli_fetch_assoc($result);
            $_SESSION['login']=$row['login'];
            header("location:admin.php");
    }else {
        // echo 'Username dan Password Salah';
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

    <h1>Login Form</h1>
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
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>

</body>

</html>