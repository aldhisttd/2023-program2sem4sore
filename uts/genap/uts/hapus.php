<?php 
$kode = $_REQUEST['kode'];

include "koneksi.php";

$q = mysqli_query($koneksi,"SELECT brosur FROM tb_brand WHERE kode='$kode'");
$ary = mysqli_fetch_array($q);
$gambar = $ary['gambar'];

unlink("gambar/".$brosur);


mysqli_query($koneksi, "DELETE FROM tb_brand WHERE kode='$kode'");

header("location:data.php");
