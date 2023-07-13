<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembayaran</title>
</head>
<body>

    <?php
    include "proses/koneksi.php";
    $kode = $_REQUEST['kode'];
    $q = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE nomor_tagihan='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>
    
    <form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

        <label for="">nomor_tagihan</label>
        <input type="text" value="<?php echo $ary['nomor_tagihan'] ?>" readonly name="nomor_tagihan">
        <br>

        <label for="">tanggal</label>
        <input type="date" name="tanggal" value="<?php echo $ary['tanggal'] ?>">
        <br>

        <label for="">jenis_tagihan</label>
        <select name="jenis_tagihan" id="">
            <option value="listrik" <?php if($ary['jenis_tagihan']=='listrik'){echo 'selected="selected"';} ?>>listrik</option>
            <option value="internet" <?php if($ary['jenis_tagihan']=='internet'){echo 'selected="selected"';} ?>>internet</option>
            <option value="pajak" <?php if($ary['jenis_tagihan']=='pajak'){echo 'selected="selected"';} ?>>pajak</option>
        </select>
        <br>

        <label for="">nominal</label>
        <input type="number" name="nominal" value="<?php echo $ary['nominal'] ?>">
        <br>

        <label for="">bukti_transfer</label>
        <input type="file" name="bukti_transfer">
        <br><br>
        
        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>
</html>