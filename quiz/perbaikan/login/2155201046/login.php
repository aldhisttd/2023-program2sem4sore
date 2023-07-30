<?php
session_start();


if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $userAdmin = 'admin_genap';
    $passAdmin = 'admin_genap';

    $usergenap = 'user_genap';
    $passgenap = 'user_genap';

    if ($user == $userAdmin && $pass == $passAdmin) {
        $_SESSION['login'] = $user;
        $_SESSION['role'] = 'admingenap';
        header('location:admin.php');
    }
    if ($user == $usergenap && $pass == $passgenap) {
        $_SESSION['login'] = $user;
        $_SESSION['role'] = 'usergenap';
        header('location:user.php');
    } else {
        echo 'user dan sandi salah!';
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
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>

</body>

</html>