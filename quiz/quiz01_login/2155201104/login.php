<?php
session_start();

if (isset($_SESSION['masuk'])) {
    header('location:admin.php');
}

if (isset($_POST['masuk'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $userAdmin = 'admin';
    $passAdmin = 'admin';

    $userUmum = 'umum';
    $passUmum = 'umum';

    if ($user == $userAdmin && $pass == $passAdmin) {
        $_SESSION['masuk'] = $user;
        $_SESSION['role'] = 'admin';
        header('location:admin.php');
    }
    if ($user == $userUmum && $pass == $passUmum) {
        $_SESSION['masuk'] = $user;
        $_SESSION['role'] = 'umum';
        header('location:umum.php');
    } else {
        echo 'user dan sandi salah! cube lagiii!';
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

    <h1>Form Login</h1>
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
                <td><button type="submit" name="masuk">Masuk</button></td>
            </tr>
        </table>
    </form>

</body>

</html>