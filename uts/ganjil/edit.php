<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <?php include "component/menu.php" ?> -->

    <?php
    include "proses/koneksi.php";
    $id = $_REQUEST['id'];
    $q = mysqli_query($koneksi, "SELECT * FROM seri1 WHERE ID='$id'");
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

    <label for="">ID</label>
    <input type="text" value="<?php echo $ary['ID'] ?>" readonly name="id">
    <br>

    <label for="">Nama</label>
    <input type="text" name="nama" value="<?php echo $ary['Nama'] ?>">
    <br>

    <label for="">Alamat</label>
    <input type="text area" name="alamat" value="<?php echo $ary['Alamat'] ?>">
    <br>

    <label for="">tgl_lahir</label>
    <input type="date" name="tgl" value="<?php echo $ary['tgl_lahir'] ?>">
    <br>

    <label for="">Photo</label>
    <input type="file" name="photo">
    <br><br>

    <button type="submit" name="btn-simpan" >Simpan</button>


</body>
</html>