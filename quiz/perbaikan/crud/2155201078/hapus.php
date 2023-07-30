<?php 
$kode = $_REQUEST['kode'];

include "proses/koneksi.php";

$q = mysqli_query($conn,"SELECT gambar FROM software WHERE kode='$kode'");
$ary = mysqli_fetch_array($q);
$gambar = $ary['gambar'];
unlink("gambar/".$gambar);
mysqli_query($conn, "DELETE FROM software WHERE kode='$kode'");


header("location:software.php");