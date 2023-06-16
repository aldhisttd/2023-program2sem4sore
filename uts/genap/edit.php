<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php include "fitur/menu.php"?>

<?php
include "proses/koneksi.php";
$id = $_REQUEST['id'];
$q = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id='$id'");
$ary = mysqli_fetch_array($q);
?>

<form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

    <label for="">ID</label>
    <input type="text" value="<?php echo $ary['id']?>" readonly name="id">
    <br>

    <label for="">Nama</label>
    <input type="text" name="nama" value="<?php echo $ary['nama']?>">
    <br>

    <label for="">Alamat</label><br>
    <textarea id="" name="alamat" rows="4" cols="50" value="<?php echo $ary['alamat']?>"></textarea>
    
    <br>

    <label for="">Tanggal Lahir</label>
    <input type="date" name="tglhr" value="<?php echo $ary['tanggal_lahir']?>">
    <br>

    <label for="">Photo</label>
    <input type="file" name ="photo">
    <br><br>

    <button type="submit" name="btn-submit">Simpan</button>

</form>

</body>
</html>