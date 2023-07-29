<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sn = $_POST["sn"];
    $tanggal_rilis = $_POST["tanggal_rilis"];
    $jenis = $_POST["jenis"];
    $quantity = $_POST["quantity"];
    $spesifikasi = $_POST["spesifikasi"];

    // Jika ada gambar yang diunggah, update juga gambarnya
    if (!empty($_FILES["gambar"]["name"])) {
        $gambar = $_FILES["gambar"]["name"];
        $temp_file = $_FILES["gambar"]["tmp_name"];

        // Upload gambar ke folder 'gambar'
        move_uploaded_file($temp_file, "gambar/" . $gambar);

        // Mengupdate data ke tabel software
        $sql = "UPDATE software 
                SET tanggal_rilis='$tanggal_rilis', jenis='$jenis', quantity='$quantity', spesifikasi='$spesifikasi', gambar='$gambar'
                WHERE sn='$sn'";
    } else {
        // Jika tidak ada gambar yang diunggah, update data tanpa mengubah gambar
        $sql = "UPDATE software 
                SET tanggal_rilis='$tanggal_rilis', jenis='$jenis', quantity='$quantity', spesifikasi='$spesifikasi'
                WHERE sn='$sn'";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Mendapatkan data yang akan di-edit
if (isset($_GET['sn'])) {
    $sn = $_GET['sn'];
    $sql = "SELECT * FROM software WHERE sn='$sn'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $tanggal_rilis = $row['tanggal_rilis'];
        $jenis = $row['jenis'];
        $quantity = $row['quantity'];
        $spesifikasi = $row['spesifikasi'];
    } else {
        echo "Data tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Software</title>
</head>

<body>
    <h2>Edit Data Software</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="sn" value="<?php echo $sn; ?>">

        <label>Tanggal Rilis:</label><br>
        <input type="date" name="tanggal_rilis" value="<?php echo $tanggal_rilis; ?>" required><br>

        <label>Jenis:</label><br>
        <select name="jenis">
            <option value="Editing" <?php echo ($jenis == 'Editing') ? 'selected' : ''; ?>>Editing</option>
            <option value="Coding" <?php echo ($jenis == 'Coding') ? 'selected' : ''; ?>>Coding</option>
            <option value="Tools" <?php echo ($jenis == 'Tools') ? 'selected' : ''; ?>>Tools</option>
        </select><br>

        <label>Quantity:</label><br>
        <input type="number" name="quantity" value="<?php echo $quantity; ?>" required><br>

        <label>Spesifikasi:</label><br>
        <textarea name="spesifikasi" required><?php echo $spesifikasi; ?></textarea><br>

        <label>Gambar:</label><br>
        <input type="file" name="gambar" accept="image/*"><br>

        <input type="submit" value="Update">
    </form>
</body>

</html>
