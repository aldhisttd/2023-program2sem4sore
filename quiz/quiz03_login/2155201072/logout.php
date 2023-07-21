<?php 
session_start();

unset($_SESSION['admin']);
unset($_SESSION['user']);
unset($_SESSION['karyawan']);

header('location:login.php')
?>