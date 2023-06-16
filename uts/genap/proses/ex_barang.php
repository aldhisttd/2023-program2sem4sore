<?php 

$kdBrn = $_POST['kdbrand'];
$nama = $_POST['namabrand'];
$tp = $_POST['tipe'];
$hrg = $_POST['hrg'];


$namagbr = basename($_FILES["gbr"]["name"]);
$target_file = "../gambar/". basename($_FILES["gbr"]["name"]);

$upload = move_uploaded_file($_FILES["gbr"]["tmp_name"], $target_file);

include "koneksi.php";

$q = "INSERT INTO barang (kode_brand, brand, tipe, harga, gambar) VALUES('$kdBrn','$nama','$tp',$hrg,'$namagbr')";

mysqli_query($koneksi, $q);

header("location:../data.php");

