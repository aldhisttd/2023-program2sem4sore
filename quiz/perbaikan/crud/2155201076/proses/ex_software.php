<?php 

$sn =$_POST['sn'];
$tanggal_rilis =$_POST['tanggal_rilis'];
$jenis =$_POST['jenis'];
$quantity =$_POST['quantity'];
$spesifikasi =$_POST['spesifikasi'];

$namafile = basename($_FILES["gambar"]["name"]);
$target_file = "../gambar/". basename($_FILES["gambar"]["name"]);

$upload = move_uploaded_gambar($_FILES["gambar"]["tmp_name"], $target_file);

include "koneksi.php";

$q = "INSERT INTO software (sn, tanggal_rilis, jenis, quantity, spesifikasi, gambar) VALUES ('$sn','$tanggal_rilis','$jenis','$quantity','$spesifikasi','$namafile')";


mysqli_query($koneksi, $q);

header("location:../data.php");

?>