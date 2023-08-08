<?php
include "koneksi.php";
$sn = $_GET['sn'];

// hapus gambar
$pilih = mysqli_query($conn, "SELECT gambar FROM software WHERE sn='$sn'");
$gambar = mysqli_fetch_array($pilih);
$namaGambar = $gambar['gambar'];
unlink("img/" . $namaGambar);

mysqli_query($conn, "DELETE FROM software WHERE sn='$sn'");
header("location:data.php");
