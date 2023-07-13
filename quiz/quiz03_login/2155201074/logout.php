<?php 
session_start();
session_unset();
header('location:form_login.php');
?>