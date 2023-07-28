<?php
include "koneksi.php";
session_start();

$pesanusername = "";
$pesanpassword = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        $pesanusername = "Username harus diisi";
    }

    if (empty($password)) {
        $pesanpassword = "Password harus diisi";
    }

    if (!empty($username) && !empty($password)) {
        $admin_query = "SELECT * FROM admin WHERE useradmin = '$username' AND passadmin ='$password'";
        $admin_result = mysqli_query($koneksi, $admin_query);
        $admin_row = mysqli_fetch_assoc($admin_result);

        $user_query = "SELECT * FROM user WHERE username = '$username' AND passuser ='$password'";
        $user_result = mysqli_query($koneksi, $user_query);
        $user_row = mysqli_fetch_assoc($user_result);

        if ($admin_row) {
            $_SESSION['login'] = $admin_row['useradmin'];
            $_SESSION['role'] = 'admin';
            header('location: admin.php');
            exit;
        } elseif ($user_row) {
            $_SESSION['login'] = $user_row['username'];
            $_SESSION['role'] = 'user';
            header('location: user.php');
            exit;
        } else {
            echo "Username atau Password Salah";
        }
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
    <form method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
                <td><?php echo $pesanusername; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
                <td><?php echo $pesanpassword; ?></td>
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
