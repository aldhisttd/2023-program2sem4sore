<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['merek']) || empty($_POST['spesifikasi']) || empty($_POST['harga']) || empty($_FILES['file']['name'])) {
        echo "Mohon lengkapi semua kolom!";
        echo "<br><br>";
        echo '<a href="index.php">kembali</a>';
        exit;
    }

    $merek = $_POST['merek'];
    $spesifikasi = $_POST['spesifikasi'];
    $harga = $_POST['harga'];
    $file = $_FILES['file'];

    $nama_file = $file['name'];
    $tmp_file = $file['tmp_name'];
    $ukuran_file = $file['size'];
    $error = $file['error'];

    if ($error !== UPLOAD_ERR_OK) {
        echo "Terjadi kesalahan saat mengunggah gambar!";
        exit;
    }

    $direktori = 'gambar/';
    $nama_file_baru = uniqid() . '_' . $nama_file;
    $path_file = $direktori . $nama_file_baru;

    if (!move_uploaded_file($tmp_file, $path_file)) {
        echo "Gagal mengunggah gambar!";
        exit;
    }

    echo "<h2>Hasil Data Laptop Baru:</h2>";
    echo "<div class='data-group'>";
    echo "<span class='data-label'>Merek:</span> <span class='data-value'>$merek</span>";
    echo "</div>";
    echo "<div class='data-group'>";
    echo "<span class='data-label'>Spesifikasi:</span> <span class='data-value'>$spesifikasi</span>";
    echo "</div>";
    echo "<div class='data-group'>";
    echo "<span class='data-label'>Harga:</span> <span class='data-value'>$harga</span>";
    echo "</div>";
    echo "<div class='data-group'>";
    echo "<span class='data-label'>Foto:</span> <br>";
    echo "<img src='$path_file' alt='Gambar Laptop'>";
    echo "</div>";
} else {
    header('Location: form_laptop.php');
    exit;
}
?>
<link rel="stylesheet" href="style.css">