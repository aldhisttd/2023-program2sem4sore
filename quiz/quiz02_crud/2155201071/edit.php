<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php include "componen/menu.php"?>

<?php
include "proses/koneksi.php";
$kode = $_REQUEST['kode'];
$q = mysqli_query($koneksi, "SELECT * FROM buku WHERE isbn='$kode'");
$ary = mysqli_fetch_array($q);
?>

<form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

    <label for="">Isbn</label>
    <input type="text" value="<?php echo $ary['isbn']?>" readonly name="isbn">
    <br>

    <label for="">Judul</label>
    <input type="text" name="judul" value="<?php echo $ary['judul']?>">
    <br>

    <label for="">Kategori</label>
    <select name="kategori" id="">
    <option value="novel" <?php if($ary['kategori']=='novel'){echo 'selected="selected"';} ?>>novel</option>
    <option value="komik" <?php if($ary['kategori']=='komik'){echo 'selected="selected"';} ?>>komik</option>
    <option value="kamus" <?php if($ary['kategori']=='kamus'){echo 'selected="selected"';} ?>>kamus</option>
    </select>
    <br>

    <label for="">Stok</label>
    <input type="number" name="stok" value="<?php echo $ary['stok']?>">
    <br>

    <label for="">file ebook</label>
    <input type="file" name ="file_ebook">
    <br><br>

    <button type="submit" name="btn-submit">Simpan</button>

</form>

</body>
</html>