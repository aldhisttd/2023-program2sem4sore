<?php 
$sn = $_REQUEST['kode'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi,"SELECT gambar FROM software WHERE sn='$sn'");
$ary = mysqli_fetch_array($q);
$file = $ary['gambar'];

unlink("file/".$file);


mysqli_query($koneksi, "DELETE FROM software WHERE sn='$sn'");

header("location:data.php");

?>