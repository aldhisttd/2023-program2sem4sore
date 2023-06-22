<?php 
session_start();
unset($_SESSION["login_admin"]);
unset($_SESSION["login_general"]);
header('location:form_login.php');
?>