<?php 
session_start();
unset($_SESSION["admin"]);
unset($_SESSION["general"]);
header('location:login.php');
?>