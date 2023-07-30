<?php 
$sn = $_REQUEST['sn'];

include "proses/koneksi.php";

$q = mysqli_query($conn,"SELECT gambar FROM software WHERE sn='$sn'");
$ary = mysqli_fetch_array($q);
$gambar = $ary['gambar'];

unlink("gambar/".$gambar);
mysqli_query($conn, "DELETE FROM software WHERE sn='$sn'");


header("location:software.php");