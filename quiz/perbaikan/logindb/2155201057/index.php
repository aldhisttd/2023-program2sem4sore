<?php
include 'koneksi.php';
session_start();

if (isset($_SESSION['masuk'])) {
    header('location:admin.php');
}

$userKosong = '';
$passKosong = '';
$tidakAda = '';

// jika tombol masuk ditekan
if (isset($_POST['masuk'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // cek apakah user atau sandi kosong
    if (empty($user)) {
        $userKosong = 'Username harus diisi!';
    }
    if (empty($pass)) {
        $passKosong = 'Password harus diisi!';
    }

    // proses login jika kolom user dan pass diisi 
    if (!empty($user) && !empty($pass)) {
        $pilih = mysqli_query($conn, "SELECT * FROM logindb WHERE username='$user' AND password='$pass'");
        $cek = mysqli_num_rows($pilih);

        // cek apakah ada user atau tidak
        if ($cek == 1) {
            $row = mysqli_fetch_assoc($pilih);
            // masuk ke admin
            if ($row['role'] == 'Admin Ganjil') {
                $_SESSION['masuk'] = $row['username'];
                $_SESSION['role'] = $row['role'];
                header('location:admin.php');
            }
            // masuk ke user    
            if ($row['role'] == 'User Ganjil') {
                $_SESSION['masuk'] = $row['username'];
                $_SESSION['role'] = $row['role'];
                header('location:user.php');
            }

            // tidak ditemukan user / user dan sandi salah
        } else {
            $tidakAda = 'Tidak ditemukan user / User dan sandi salah!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Database</title>
</head>

<body>
    <h1>Form Login Database</h1>
    <?php echo $tidakAda; ?><br><br>
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