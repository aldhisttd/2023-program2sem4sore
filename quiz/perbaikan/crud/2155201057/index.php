<?php
include "koneksi.php";

if (isset($_POST['tambah'])) {
    $kode = $_POST['kode'];
    $tgl_msk = $_POST['tanggal_masuk'];
    $jenis = $_POST['jenis'];
    $quan = $_POST['quantity'];
    $spek = $_POST['spesifikasi'];

    $gambar = basename($_FILES["gambar"]["name"]);
    $target_file = "img/" . basename($_FILES["gambar"]["name"]);
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

    $tambah = "INSERT INTO laptop (kode, tanggal_masuk, jenis, quantity, spesifikasi, gambar) values ('$kode','$tgl_msk','$jenis','$quan','$spek','$gambar')";
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
                <td><label for="kode">Kode</label></td>
                <td>:</td>
                <td><input type="text" name="kode" id="kode" required></td>
            </tr>
            <tr>
                <td><label for="tanggal_masuk">Tanggal Masuk</label> </td>
                <td>:</td>
                <td><input type="date" name="tanggal_masuk" id="tanggal_masuk" required></td>
            </tr>
            <tr>
                <td><label for="jenis">Jenis</label></td>
                <td>:</td>
                <td>
                    <select name="jenis" id="jenis" required>
                        <option value="" selected>-</option>
                        <option value="office">Office</option>
                        <option value="gaming">Gaming</option>
                        <option value="content creator">Content Creator</option>
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
                <td><label>file</label></td>
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