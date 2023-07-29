<?php 

$sn = $_POST['fsn'];
$tanggal = $_POST['ftanggal'];
$jenis = $_POST['fjenis'];
$quantity = $_POST['fquantity'];
$spesifikasi = $_POST['fspesifikasi'];


$namafile = basename($_FILES["fgambar"]["name"]);
$target_file = "../file/". basename($_FILES["fgambar"]["name"]);

$upload = move_uploaded_file($_FILES["fgambar"]["tmp_name"], $target_file);

include "koneksi.php";
global $koneksi;
$q = "INSERT INTO software (sn, tanggal_rilis, jenis, quantity, spesifikasi, gambar) VALUES
('$sn','$tanggal','$jenis','$quantity','$spesifikasi','$namafile')";
mysqli_query($koneksi, $q);

header("location:../data.php");

