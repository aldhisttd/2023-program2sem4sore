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
    $q = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_barang='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>
    
    <form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

        <label for="">Kode Barang</label>
        <input type="text" value="<?php echo $ary['kode_barang'] ?>" readonly name="kdbrg">
        <br>

        <label for="">Nama Barang</label>
        <input type="text" name="namabrg" value="<?php echo $ary['nama'] ?>">
        <br>

        <label for="">Satuan</label>
        <select name="satuan" id="">
            <option value="box" <?php if($ary['satuan']=='box'){echo 'selected="selected"';} ?>>Box</option>
            <option value="lusin" <?php if($ary['satuan']=='lusin'){echo 'selected="selected"';} ?>>Lusing</option>
            <option value="kg" <?php if($ary['satuan']=='kg'){echo 'selected="selected"';} ?>>Kg</option>
        </select>
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