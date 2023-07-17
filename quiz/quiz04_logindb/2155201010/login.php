<?php 
include 'koneksi.php';
    session_start();
    if(isset($_SESSION['username'])){
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>silahkan login</h1>
    <div class="login">
        <form class="from" action="" method="POST">
            <label>Username</label>
            <input type="text" placeholder="masukkan username" name="username"/><br><br>
            <label>Password</label>
            <input type="password" placeholder="masukkan password" name="password" /><br><br>
            <?php if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql ="SELECT * From tb_user WHERE username = '$username' AND password ='$password'";
        $result = mysqli_query($conn,$sql);

        if($result -> num_rows > 0){
            $row= mysqli_fetch_assoc($result);
            $_SESSION['username']=$row['username'];
            header("location:index.php");
       }else{
        echo "email atau password anda salah";
       }
    }
    ?>
            <input class="tombol" type="submit" name="login" value="login"/>
          <a href="daftar.php" class="tombol" >daftar</a>
          <?php
            if(isset($_SESSION['daftar'])){
                header("location:daftar.php");
            }
          ?>
         </form>
    </div>
    
    
</body>
</html>