<?php
session_start();

if (isset($_SESSION['masuk'])) {
    header('location:admin.php');
}

$userKosong = '';
$passKosong = '';
$tidakAda = '';

if (isset($_POST['masuk'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $userAdmin = 'admin_ganjil';
    $passAdmin = 'admin_ganjil';

    $userBiasa = 'user_ganjil';
    $passBiasa = 'user_ganjil';

    // cek apakah user atau sandi kosong
    if (empty($user)) {
        $userKosong = 'Username harus diisi!';
    }
    if (empty($pass)) {
        $passKosong = 'Password harus diisi!';
    }

    // proses login jika kolom user dan pass diisi 
    if (!empty($user) && !empty($pass)) {
        // masuk ke admin
        if ($user == $userAdmin && $pass == $passAdmin) {
            $_SESSION['masuk'] = $user;
            $_SESSION['role'] = 'Admin Ganjil';
            header('location:admin.php');
        }
        // masuk ke user
        if ($user == $userBiasa && $pass == $passBiasa) {
            $_SESSION['masuk'] = $user;
            $_SESSION['role'] = 'User Ganjil';
            header('location:user.php');
        }

        // tidak ditemukan user / user dan sandi salah
    } else {
        $tidakAda = 'Tidak ditemukan user / User dan sandi salah!';
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
                <td><?php echo $userKosong; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
                <td><?php echo $passKosong; ?></td>
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