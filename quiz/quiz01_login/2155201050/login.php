<?php
session_start();

if (isset($_SESSION['admin'])) {
  header('location:admin.php');
} 

if (isset($_SESSION['general'])) {
    header('location:general.php');
  
}

if (isset($_POST['login'])) {
  $userForm = $_POST['username'];
  $passForm = $_POST['pass'];

  $useradmin = "admin";
  $passadmin = "admin";

  $usergeneral = "general";
  $usergeneral = "general";

  if ($userForm == $useradmin && $passForm == $passadmin) {
 
    $_SESSION['admin'] = $useradmin;
    
    header('location:admin.php');
  } else {
    if ($userForm == $usergeneral && $passForm == $usergeneral) {
 
      $_SESSION['general'] = $usergeneral;
    
      header('location:general.php');
    }
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
  <form action="login.php" method="POST">
    <table>
      <tr>
        <td>Username </td>
        <td>:</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>Password </td>
        <td>:</td>
        <td><input type="password" name="pass"></td>
      </tr>
      <tr>
        <td><input type="submit" value="Login" name="login"></td>
      </tr>
    </table>
  </form>
</body>

</html>