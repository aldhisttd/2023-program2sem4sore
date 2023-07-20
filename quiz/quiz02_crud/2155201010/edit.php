<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>

    

    <?php
    include "koneksi.php";
    $kode = $_REQUEST['kode'];
    $q = mysqli_query($koneksi, "SELECT * FROM buku WHERE isbn='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>

    <form action="ex_edit.php" method="POST" enctype="multipart/form-data">

        <label for="">ISBN</label>
        <input type="text" value="<?php echo $ary['isbn'] ?>" readonly name="isbn">
        <br>

        <label for="">Judul</label>
        <input type="text" name="judul" value="<?php echo $ary['judul'] ?>">
        <br>

        <label for="">Kategori</label>
        <input type="text" name="kategori" value="<?php echo $ary['kategori'] ?>">
        <br>

        <label for="">Stok</label>
        <input type="number" name="stok" value="<?php echo $ary['stok'] ?>">
        <br>

        <label for="">File</label>
        <input type="file" name="doc">
        <br><br>

        <button type="submit" name="simpan">Simpan</button>

    </form>

</body>
</html>