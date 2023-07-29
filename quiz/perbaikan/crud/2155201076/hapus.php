<?php
$kode = $_REQUEST['kode'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi, "SELECT gambar FROM software WHERE sn='$kode'");
$ary = mysqli_fetch_array($q);
$gambar = $ary ['gambar'];

unlink("file/".$gambar);

mysqli_query($koneksi, "DELETE FROM software WHERE sn='$kode'");

header("location:data.php");

?>