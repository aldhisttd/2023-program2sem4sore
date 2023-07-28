<?php
include "koneksi.php";
$kode = $_GET['kode'];

// hapus gambar
$pilih = mysqli_query($conn, "SELECT gambar FROM laptop WHERE kode='$kode'");
$gambar = mysqli_fetch_array($pilih);
$namaGambar = $gambar['gambar'];
unlink("img/" . $namaGambar);

mysqli_query($conn, "DELETE FROM laptop WHERE kode='$kode'");
header("location:data.php");
