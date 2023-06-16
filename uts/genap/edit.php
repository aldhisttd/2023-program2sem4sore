<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include "component/menu.php" ?>

    <?php
    include "proses/koneksi.php";
    $kode = $_REQUEST['kode'];
    $q = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_brand='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>
    
    <form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

        <label for="">Kode Brand</label>
        <input type="text" value="<?php echo $ary['kode_brand'] ?>" readonly name="kdbrand">
        <br>

        <label for="">Nama Brand</label>
        <select name="namabrand" id="">
            <option value="asus" <?php if($ary['brand']=='asus'){echo 'selected="selected"';} ?>>ASUS</option>
            <option value="hp" <?php if($ary['brand']=='hp'){echo 'selected="selected"';} ?>>HP</option>
            <option value="lenovo" <?php if($ary['brand']=='lenovo'){echo 'selected="selected"';} ?>>LENOVO</option>
        </select>
        <br>

        <label for="">Tipe Brand</label>
        <input type="text" name="tipe" value="<?php echo $ary['tipe'] ?>">
        <br>


        <label for="">Harga</label>
        <input type="number" name="hrg" value="<?php echo $ary['harga'] ?>">
        <br>

        <label for="">Gambar</label>
        <input type="file" name="gbr">
        <br><br>
        
        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>
</html>