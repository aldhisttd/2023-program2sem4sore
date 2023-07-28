<?php
include "koneksi.php";

if (isset($_POST['tambah'])) {
    $sn = $_POST['sn'];
    $tgl_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $quan = $_POST['quantity'];
    $spek = $_POST['spesifikasi'];

    $gambar = basename($_FILES["gambar"]["name"]);
    $target_file = "img/" . basename($_FILES["gambar"]["name"]);
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

    $tambah = "INSERT INTO software (sn, tanggal_rilis, jenis, quantity, spesifikasi, gambar) values ('$sn','$tgl_rilis','$jenis','$quan','$spek','$gambar')";
    mysqli_query($conn, $tambah);
    header("location:data.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <a href="data.php">Lihat Data</a><br><br>

    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="sn">SN</label></td>
                <td>:</td>
                <td><input type="text" name="sn" id="sn" required></td>
            </tr>
            <tr>
                <td><label for="tanggal_rilis">Tanggal Rilis</label> </td>
                <td>:</td>
                <td><input type="date" name="tanggal_rilis" id="tanggal_rilis" required></td>
            </tr>
            <tr>
                <td><label for="jenis">Jenis</label></td>
                <td>:</td>
                <td>
                    <select name="jenis" id="jenis" required>
                        <option value="" selected>-</option>
                        <option value="editing">Editing</option>
                        <option value="coding">Coding</option>
                        <option value="tools">Tools</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="quantity">Quantity</label></td>
                <td>:</td>
                <td><input type="number" name="quantity" required></td>
            </tr>
            <tr>
                <td><label for="spesifikasi">Spesifikasi</label></td>
                <td>:</td>
                <td><textarea name="spesifikasi" id="spesifikasi" cols="30" rows="10" style="resize:none;"></textarea></td>
            </tr>
            <tr>
                <td><label>Gambar</label></td>
                <td>:</td>
                <td><input type="file" name="gambar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="tambah">Tambah</button></td>
            </tr>
        </table>
    </form>
</body>

</html>