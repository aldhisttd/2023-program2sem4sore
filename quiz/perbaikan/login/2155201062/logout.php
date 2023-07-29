<?php 
session_start();

unset($_SESSION['admingenap']);
unset($_SESSION['usergenap']);


header('location:login.php')
?>