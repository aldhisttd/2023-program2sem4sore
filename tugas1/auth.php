<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "tugas");
$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
        // login sukses
        echo "Login sukses!";
    } else {
        // password salah
        echo "Password salah!";
    }
} else {
    // username tidak ditemukan
    echo "Username tidak ditemukan!";
}
mysqli_close($conn);
?>
