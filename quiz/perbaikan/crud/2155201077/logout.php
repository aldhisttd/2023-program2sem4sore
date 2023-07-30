<?php 
session_start();

unset($_SESSION['admin_ganjil']);
unset($_SESSION['user_ganjil']);


header('location:login.php')
?>