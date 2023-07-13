<?php
session_start();

if (isset($_SESSION['login'])) {
    header('location:admin.php');
}

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $userAdmin = 'admin';
    $passAdmin = 'admin';

    $userKaryawan = 'karyawan';
    $passKaryawan = 'karyawan';

    $userUmum = 'user';
    $passUmum = 'user';

    if ($user == $userAdmin && $pass == $passAdmin) {
        $_SESSION['login'] = $user;
        $_SESSION['role'] = 'admin';
        header('location:admin.php');
    }
    if ($user == $userKaryawan && $pass == $passKaryawan) {
        $_SESSION['login'] = $user;
        $_SESSION['role'] = 'karyawan';
        header('location:karyawan.php');
    }
    if ($user == $userUmum && $pass == $passUmum) {
        $_SESSION['login'] = $user;
        $_SESSION['role'] = 'userumum';
        header('location:user.php');
    } else {
        echo 'Username dan Password Salah';
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
    <form action="" method="post">
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