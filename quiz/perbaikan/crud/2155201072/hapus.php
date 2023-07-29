<?php

$id = $_REQUEST['sn'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi, "SELECT gambar FROM software WHERE sn='$id'");
$ary = mysqli_fetch_array($q);
$gambar = $ary ['gambar'];

unlink("gambar/".$gambar);

mysqli_query($koneksi, "DELETE FROM software WHERE sn='$id'");

header("location:data.php");

?>