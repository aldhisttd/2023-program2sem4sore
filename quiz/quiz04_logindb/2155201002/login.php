<?php

include 'koneksi.php';

session_start();
if (isset($_SESSION['username'])) {
    header('location:halaman.php');
}


if (isset($_POST['masuk'])) {
    $user = $_POST['fusername'];
    $pass = $_POST['fpassword'];

    // $userAdmin = 'admin';
    // $passAdmin = 'admin';

    // $userKaryawan = 'karyawan';
    // $passKaryawan = 'karyawan';

    // $userUmum = 'umum';
    // $passUmum = 'umum';

    // if ($user == $userAdmin && $pass == $passAdmin) {
    //     $_SESSION['masuk'] = $user;
    //     $_SESSION['role'] = 'admin';
    //     header('location:admin.php');
    // }
    // if ($user == $userKaryawan && $pass == $passKaryawan) {
    //     $_SESSION['masuk'] = $user;
    //     $_SESSION['role'] = 'karyawan';
    //     header('location:karyawan.php');
    // }
    // if ($user == $userUmum && $pass == $passUmum) {
    //     $_SESSION['masuk'] = $user;
    //     $_SESSION['role'] = 'umum';
    //     header('location:umum.php');
    // } else {
    //     echo 'user dan sandi salah! cube lagiii!';
    // }
    $sql ="SELECT * From user WHERE username = '$user' AND pass ='$pass'";
    $result = mysqli_query($conn,$sql);
    if($result -> num_rows > 0){
        $row= mysqli_fetch_assoc($result);
        $_SESSION['username']=$row['username'];
        header("location:halaman.php");
    }else{
        echo "username atau password anda salah";
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
                <td><input type="text" name="fusername"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="fpassword"></td>
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