<?php
    include 'koneksi.php';
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
    <label><h1>silahkan daftar pengguna baru</h1></label>
    <div class="daftar">
        <form class="form" action="" method="POST">
            <label> username </label>
            <input type="text" name="username" placeholder="masukkan nama"><br><br>
            <label>password<label>
            <input type="password" name="password" placeholder="masukkan password" ><br><br>
            <input class="tombol" type="submit" name="daftar" value="daftar">
                <?php
                    if(isset($_POST ['daftar'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                            
                        $sql= "INSERT INTO tb_user (username,password) value ('$username','$password')";
                        $result=mysqli_query($conn,$sql); 
                        if($result){
                            header("location:login.php");
                        }else{
                            echo "pendaftaran gagal";
                        }
                     }

                    
                ?>
            <input class="tombol" type="submit" name="login" value="login">
            <?php
            session_start();
            if(isset($_POST['login'])){
                header("location:login.php");
            }
            ?>
         </form>
    </div>
 
</body>
</html>