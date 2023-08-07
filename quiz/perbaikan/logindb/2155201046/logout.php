<?php 
session_start();

unset($_SESSION['admin_genap']);
unset($_SESSION['user_genap']);


header('location:login.php')
?>