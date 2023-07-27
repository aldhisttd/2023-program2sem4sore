<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>

    <?php include 'component/menu.php' ?>

    <?php
    include 'proses/koneksi.php';
    $id = $_REQUEST['id'];
    $q = mysqli_query($koneksi, "SELECT * FROM seri1 WHERE id='$id'");
    $ary = mysqli_fetch_array($q);
    ?>

    <form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">
        <label for="">ID</label>
        <input type="text" value="<?php echo $ary['id'] ?>" readonly name="id">
        <br><br>
        
        <label for="">Nama</label>
        <input type="text" value="<?php echo $ary['nama'] ?>"name="nama">
        <br><br>

        <label for="">Alamat</label>
        <br>
        <textarea name="alamat" id="alamat" value="<?php echo $ary['alamat'] ?>"  cols="30" rows="10"></textarea>
        <br><br>

        <label for="">Tanggal Lahir</label>
        <input type="date" value="<?php echo $ary['tgl_lahir'] ?>"name="tanggal">
        <br><br>

        <label for="">Photo</label>
        <input type="file" name="photo">
        <br><br>

        <button type="submit" name="btn-simpan">Simpan</button>
    </form>
</body>
</html>