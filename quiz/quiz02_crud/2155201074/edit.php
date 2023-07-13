<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>

    <?php include "component/menu.php" ?>

    <?php
    include "proses/koneksi.php";
    $kode = $_REQUEST['kode'];
    $q = mysqli_query($koneksi, "SELECT * FROM buku WHERE isbn='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>
    
    <form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

        <label for="">ISBN</label>
        <input type="text" value="<?php echo $ary['isbn'] ?>" readonly name="isbn">
        <br>

        <label for="">Judul</label>
        <input type="text" name="judul" value="<?php echo $ary['judul'] ?>">
        <br>

        <label for="">Kategori</label>
        <select name="kategori" id="">
            <option value="novel" <?php if($ary['kategori']=='box'){echo 'selected="selected"';} ?>>Novel</option>
            <option value="komik" <?php if($ary['kategori']=='lusin'){echo 'selected="selected"';} ?>>Komik</option>
            <option value="kamus" <?php if($ary['kategori']=='kg'){echo 'selected="selected"';} ?>>Kamus</option>
        </select>
        <br>

        <label for="">Stok</label>
        <input type="number" name="stok" value="<?php echo $ary['stok'] ?>">
        <br>

        <label for="">File</label>
        <input type="file" name="pdf">
        <br><br>
        
        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>
</html>