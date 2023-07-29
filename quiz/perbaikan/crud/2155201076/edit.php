<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>perbaikan</title>
</head>
<body>

<?php include "componen/menu.php"?>

<?php
include "proses/koneksi.php";
$kode = $_REQUEST['kode'];
$q = mysqli_query($koneksi, "SELECT * FROM software WHERE sn='$kode'");
$ary = mysqli_fetch_array($q);
?>

<form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

    <label for="">sn</label>
    <input type="text" value="<?php echo $ary['sn']?>" readonly name="sn">
    <br>

    <label for="">tanggal_rilis</label>
    <input type="date" name="tanggal_rilis" value="<?php echo $ary['tanggal_rilis']?>">
    <br>

    <label for="">$jenis</label>
    <select name="jenis" id="">
    <option value="editing" <?php if($ary['jenis']=='editing'){echo 'selected="selected"';} ?>>editing</option>
    <option value="coding" <?php if($ary['jenis']=='coding'){echo 'selected="selected"';} ?>>coding</option>
    <option value="tools" <?php if($ary['jenis']=='tools'){echo 'selected="selected"';} ?>>tools</option>
    </select>
    <br>

    <label for="">quantity</label>
    <input type="number" name="quantity" value="<?php echo $ary['quantity']?>">
    <br>

    <label for="">spesifikasi</label>
    <input type="text" name="spesifikasi" value="<?php echo $ary['spesifikasi']?>">
    <br>

    <label for="">gambar</label>
    <input type="file" name ="gambar">
    <br><br>

    <button type="submit" name="btn-submit">Simpan</button>

</form>

</body>
</html>