<?php 
include "koneksi.php";
$sn = $_POST['sn'];
$tgl = $_POST['tgl'];
$jenis = $_POST['jenis'];
$quantity = $_POST['quantity'];
$spesifikasi = $_POST['spesifikasi'];


$namagbr = basename($_FILES["gambar"]["name"]);
$target_file = "../gambar/". basename($_FILES["gambar"]["name"]);

$upload = move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);



$q = "INSERT INTO software (sn, tanggal_rilis, jenis, quantity, spesifikasi, gambar) VALUES('$sn','$tgl','$jenis','$quantity', '$spesifikasi','$namagbr')";

mysqli_query($koneksi, $q);

header("location:../data.php");

