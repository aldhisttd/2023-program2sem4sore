<?php 
session_start();
unset($_SESSION["login"]);
header('location:form_login.php');
?>