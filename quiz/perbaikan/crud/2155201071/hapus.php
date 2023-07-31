<?php

$id = $_REQUEST['kode'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi, "SELECT gambar FROM laptop WHERE kode='$id'");
$ary = mysqli_fetch_array($q);
$gambar = $ary ['gambar'];

unlink("gambar/".$gambar);

mysqli_query($koneksi, "DELETE FROM laptop WHERE kode='$id'");

header("location:data.php");

?>