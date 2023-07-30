<?php
session_start();
include "koneksi.php";
$pesanuser = "";
$pesanpass = "";
$pesan = "";

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];


    if (empty($user) && empty($pass)) {
        $pesanuser = "Username harus diisi";
        $pesanpass = "Password harus diisi";
    } elseif (empty($user)) {
        $pesanuser = "Username harus diisi";
    } elseif (empty($pass)) {
        $pesanpass = "Password harus diisi";
    } else {
        $check_query = "SELECT * FROM login WHERE username  = '$user' AND password ='$pass'";
        $check_result = mysqli_query($koneksi, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $row = mysqli_fetch_assoc($check_result);
            if ($user == $row['username'] && $pass == $row['password']) {
                if ($row['role'] == "admin_ganjil") {
                    $_SESSION['login'] = $user;
                    $_SESSION['role'] = "admin_ganjil";
                    header("Location: admin.php");
                }
                    if ($row['role'] == "user_ganjil") {
                        $_SESSION['login'] = $user;
                        $_SESSION['role'] = "user_ganjil";
                        header("Location: user.php");
                    }
                 else {
                    $pesan = "Username atau Password Salah!";
                }
            }
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

    <h1>Form Login</h1>
    <form action="login.php" method="POST">
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
                <td><button type="submit" value="login" name="login">Login</button></td>
            </tr>
        </table>
    </form>

</body>

</html>