<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php include "proses/menu.php"?>

<?php
include "proses/koneksi.php";

$id = $_REQUEST['kode'];
$q = mysqli_query($koneksi, "SELECT * FROM laptop WHERE kode='$id'");
$ary = mysqli_fetch_array($q);
?>

<form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Kode</td>
        <td>:</td>
        <td><input type="text" name="kode" value="<?php echo $ary['kode']?>" readonly></td>
      </tr>
      <tr>
        <td>Tanggal Masuk</td>
        <td>:</td>
        <td><input type="date" name="tgl" value="<?php echo $ary['tanggal_masuk']?>"></td>
      </tr>
      <tr>
        <td>Jenis</td>
        <td>:</td>
        <td>
          <select name="jenis" id="">
            <option value="office" <?php if($ary['jenis']=='office') echo 'selected="selected"'; ?>>Office</option>
            <option value="gaming" <?php if($ary['jenis']=='gaming') echo 'selected="selected"'; ?>>Gaming</option>
            <option value="contentcreator" <?php if($ary['jenis']=='contentcreator') echo 'selected="selected"'; ?>>Content Creator</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Quantity</td>
        <td>:</td>
        <td><input type="number" name="quantity" value="<?php echo $ary['quantity'] ?>"></td>
      </tr>
      <tr>
        <td>Spesifikasi</td>
        <td>:</td>
        <td><textarea name="spesifikasi" rows="4" cols="50" value="<?php echo $ary['quantity'] ?>"></textarea>
      </tr>
      <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input type="file" name="gambar" value="<?php echo $ary['gambar'] ?>"></td>
      </tr>
      <tr>

        <td><button type="submit" name="simpan">Simpan</button></td>

      </tr>
    </table>

  </form>
</body>
</html>