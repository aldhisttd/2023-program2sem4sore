<?php
// add.php

// Panggil file koneksi.php untuk menghubungkan ke database
require_once('koneksi.php');

// Proses form jika data dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST["kode"];
    $tanggal_masuk = $_POST["tanggal_masuk"];
    $jenis = $_POST["jenis"];
    $quantity = $_POST["quantity"];
    $spesifikasi = $_POST["spesifikasi"];
    $gambar = $_FILES["gambar"]["name"];
    $gambar_temp = $_FILES["gambar"]["tmp_name"];
    
    // Upload gambar ke folder "uploads"
    $upload_dir = "uploads/";
    move_uploaded_file($gambar_temp, $upload_dir . $gambar);

    // Simpan data ke database
    $sql = "INSERT INTO items (kode, tanggal_masuk, jenis, quantity, spesifikasi, gambar) VALUES ('$kode', '$tanggal_masuk', '$jenis', $quantity, '$spesifikasi', '$gambar')";
    $conn->query($sql);
    
    // Redirect ke halaman index setelah data ditambahkan
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Item</title>
</head>
<body>
    <h2>Tambah Item</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <label>Kode:</label>
        <input type="text" name="kode" required><br>

        <label>Tanggal Masuk:</label>
        <input type="date" name="tanggal_masuk" required><br>

        <label>Jenis:</label>
        <select name="jenis">
            <option value="Office">Office</option>
            <option value="Gaming">Gaming</option>
            <option value="Content Creator">Content Creator</option>
        </select><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" required><br>

        <label>Spesifikasi:</label>
        <textarea name="spesifikasi"></textarea><br>

        <label>Gambar:</label>
        <input type="file" name="gambar" accept="image/*" required><br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>
