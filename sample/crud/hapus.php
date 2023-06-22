<?php 
$kode = $_REQUEST['kode'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi,"SELECT gambar FROM barang WHERE kode_barang='$kode'");
$ary = mysqli_fetch_array($q);
$gambar = $ary['gambar'];

unlink("gambar/".$gambar);


mysqli_query($koneksi, "DELETE FROM barang WHERE kode_barang='$kode'");

header("location:data.php");
