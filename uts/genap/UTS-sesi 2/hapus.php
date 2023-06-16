<?php
$kode = $_REQUEST['kode'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi, "SELECT gambar FROM data_laptop WHERE kode='$kode'");
$ary = mysqli_fetch_array($q);
$gambar = $ary['gambar'];

unlink("gambar/" . $gambar);


mysqli_query($koneksi, "DELETE FROM data_laptop WHERE kode='$kode'");

header("location:data.php");
