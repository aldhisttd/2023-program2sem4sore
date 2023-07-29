<?php
// edit.php

// Panggil file koneksi.php untuk menghubungkan ke database
require_once('koneksi.php');

// Mendapatkan data item berdasarkan ID
function getItemById($id) {
    global $conn;
    $sql = "SELECT * FROM items WHERE id = $id";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

// Proses form jika data dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $kode = $_POST["kode"];
    $tanggal_masuk = $_POST["tanggal_masuk"];
    $jenis = $_POST["jenis"];
    $quantity = $_POST["quantity"];
    $spesifikasi = $_POST["spesifikasi"];
    $gambar = $_FILES["gambar"]["name"];
    $gambar_temp = $_FILES["gambar"]["tmp_name"];

    // Mendapatkan data item berdasarkan ID
    $item = getItemById($id);

    // Jika gambar diubah, upload gambar ke folder "uploads"
    if (!empty($gambar)) {
        $upload_dir = "uploads/";
        move_uploaded_file($gambar_temp, $upload_dir . $gambar);
        $gambar_path = $upload_dir . $gambar;
    } else {
        $gambar_path = $item['gambar'];
    }

    // Update data ke database
    $sql = "UPDATE items SET kode='$kode', tanggal_masuk='$tanggal_masuk', jenis='$jenis', quantity=$quantity, spesifikasi='$spesifikasi', gambar='$gambar_path' WHERE id = $id";
    $conn->query($sql);

    // Redirect ke halaman index setelah data diupdate
    header("Location: index.php");
}

// Mendapatkan ID item dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $item = getItemById($id);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h2>Edit Item</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">

        <label>Kode:</label>
        <input type="text" name="kode" value="<?php echo $item['kode']; ?>" required><br>

        <label>Tanggal Masuk:</label>
        <input type="date" name="tanggal_masuk" value="<?php echo $item['tanggal_masuk']; ?>" required><br>

        <label>Jenis:</label>
        <select name="jenis">
            <option value="Office" <?php if ($item['jenis'] == 'Office') echo 'selected'; ?>>Office</option>
            <option value="Gaming" <?php if ($item['jenis'] == 'Gaming') echo 'selected'; ?>>Gaming</option>
            <option value="Content Creator" <?php if ($item['jenis'] == 'Content Creator') echo 'selected'; ?>>Content Creator</option>
        </select><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" required><br>

        <label>Spesifikasi:</label>
        <textarea name="spesifikasi"><?php echo $item['spesifikasi']; ?></textarea><br>

        <label>Gambar:</label>
        <input type="file" name="gambar" accept="image/*"><br>
        <img src="<?php echo $item['gambar']; ?>" height="50"><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
