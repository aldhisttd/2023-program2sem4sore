<?php
include 'koneksi.php';

if (isset($_GET['sn'])) {
    $sn = $_GET['sn'];

    // Mendapatkan nama gambar sebelum dihapus
    $sql = "SELECT gambar FROM software WHERE sn='$sn'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $gambar = $row['gambar'];

    // Menghapus data dari tabel software
    $sql = "DELETE FROM software WHERE sn='$sn'";

    if ($conn->query($sql) === TRUE) {
        // Menghapus gambar dari folder 'gambar'
        unlink("gambar/" . $gambar);

        header("Location: index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
