<?php
session_start();

$pesanusername = "";
$pesanpassword = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin = "admin_genap";
    $passadmin = "admin_genap";

    $user = "user_genap";
    $passuser = "user_genap";

    // Periksa apakah sudah di isi
    if (empty($username)) {
        $pesanusername = "Username harus diisi";
    }

    if (empty($password)) {
        $pesanpassword = "Password harus diisi";
    }

    // Jika keduanya telah diisi, lanjutkan untuk memeriksa username dan password
    if (!empty($username) && !empty($password)) {
        if ($username == $admin && $password == $passadmin) {
            // login
            $_SESSION['login'] = $admin;
            $_SESSION['role'] = 'admin_genap';
            // masuk ke halaman admin
            header('location: admin.php');
            exit;
        }

        if ($username == $user && $password == $passuser) {
            // login
            $_SESSION['login'] = $user;
            $_SESSION['role'] = 'user_genap';
            // masuk ke halaman user
            header('location: user.php');
            exit; 
        }

        // Jika jika username atau salah, menampilkan pesan
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
