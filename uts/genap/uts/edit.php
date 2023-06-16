<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'koneksi.php' ?>
<?php
$kode = $_REQUEST['kode'];
    $q = mysqli_query($koneksi, "SELECT * FROM tb_brand WHERE kode='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>
    
    <form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

        <label for="">Kode Barang</label>
        <input type="text" value="<?php echo $ary['kode'] ?>" readonly name="kdbrg">
        <br>

        <label for="">brand</label>
        <select name="brand" id="">
            <option value="brand" <?php if($ary['brand']=='brand'){echo 'selected="selected"';} ?>>brand</option>
            <option value="asus" <?php if($ary['brand']=='asus'){echo 'selected="selected"';} ?>>asus</option>
            <option value="acer" <?php if($ary['brand']=='acer'){echo 'selected="selected"';} ?>>acer</option>
        </select>
        <br>



        <label for="">tipe</label>
        <input type="text" name="tipe" value="<?php echo $ary['tipe'] ?>">
        <br>

        

        <label for="">harga</label>
        <input type="number" name="harga" value="<?php echo $ary['harga'] ?>">
        <br>

        <label for="">Gambar</label>
        <input type="file" name="gbr">
        <br><br>
        
        <button type="submit" name="btn-simpan">Simpan</button>

    </form>









</body>
</html>