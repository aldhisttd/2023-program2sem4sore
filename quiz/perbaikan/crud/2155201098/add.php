<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sn = $_POST["sn"];
    $tanggal_rilis = $_POST["tanggal_rilis"];
    $jenis = $_POST["jenis"];
    $quantity = $_POST["quantity"];
    $spesifikasi = $_POST["spesifikasi"];
    $gambar = $_FILES["gambar"]["name"];
    $temp_file = $_FILES["gambar"]["tmp_name"];

    // Upload gambar ke folder 'gambar'
    move_uploaded_file($temp_file, "gambar/" . $gambar);

    // Menyimpan data ke tabel software
    $sql = "INSERT INTO software (sn, tanggal_rilis, jenis, quantity, spesifikasi, gambar) 
            VALUES ('$sn', '$tanggal_rilis', '$jenis', '$quantity', '$spesifikasi', '$gambar')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Software</title>
</head>

<body>
    <h2>Tambah Data Software</h2>
    <form method="post" enctype="multipart/form-data">
        <label>No. Serial:</label><br>
        <input type="text" name="sn" required><br>

        <label>Tanggal Rilis:</label><br>
        <input type="date" name="tanggal_rilis" required><br>

        <label>Jenis:</label><br>
        <select name="jenis">
            <option value="Editing">Editing</option>
            <option value="Coding">Coding</option>
            <option value="Tools">Tools</option>
        </select><br>

        <label>Quantity:</label><br>
        <input type="number" name="quantity" required><br>

        <label>Spesifikasi:</label><br>
        <textarea name="spesifikasi" required></textarea><br>

        <label>Gambar:</label><br>
        <input type="file" name="gambar" accept="image/*" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>
