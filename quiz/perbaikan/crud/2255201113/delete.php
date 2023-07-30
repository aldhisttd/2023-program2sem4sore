<?php
// delete.php

// Panggil file koneksi.php untuk menghubungkan ke database
require_once('koneksi.php');

// Mendapatkan ID item dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Hapus data dari database
    $sql = "SELECT gambar FROM items WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $gambar_path = "uploads/" . $row['gambar'];

    if (file_exists($gambar_path)) {
        unlink($gambar_path); // Hapus file gambar dari folder "uploads"
    }

    $sql = "DELETE FROM items WHERE id = $id";
    $conn->query($sql);

    // Redirect kembali ke halaman index setelah data dihapus
    header("Location: index.php");
}
?>
