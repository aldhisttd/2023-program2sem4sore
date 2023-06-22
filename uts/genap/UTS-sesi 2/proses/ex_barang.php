<?php

$kode = $_POST['kode'];
$brand = $_POST['brand'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];


$namagbr = basename($_FILES["gambar"]["name"]);
$target_file = "../gambar/" . basename($_FILES["gambar"]["name"]);

$upload = move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

include "koneksi.php";

$q = "INSERT INTO data_laptop (kode, brand, tipe, harga, gambar) VALUES('$kode','$brand','$tipe',$harga,'$namagbr')";

mysqli_query($koneksi, $q);

header("location:../data.php");
