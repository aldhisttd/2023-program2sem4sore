<?php 

$sn = $_POST['sn'];
$tanggal_rilis = $_POST['tanggal_rilis'];
$jenis = $_POST['jenis'];
$quantity = $_POST['quantity'];
$spesifikasi = $_POST['spesifikasi'];
$gambar = basename($_FILES["gambar"]["name"]);
$target_file = "../gambar/". basename($_FILES["gambar"]["name"]);
$upload = move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

include "koneksi.php";
$q = "INSERT INTO software (kode, sn, tanggal_rilis, jenis, quantity, spesifikasi, gambar) VALUES('','$sn','$tanggal_rilis','$jenis', '$quantity','$spesifikasi', '$gambar')";

mysqli_query($conn, $q);

header("location:../software.php");

 ?>