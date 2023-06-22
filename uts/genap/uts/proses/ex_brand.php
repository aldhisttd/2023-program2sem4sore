<?php 

$kdbrg = $_POST['kdbrg'];
$namabrand = $_POST['brand'];
$tipebrg = $_POST['tipe'];
$hargabrg = $_POST['harga'];

$gbrname = basename($_FILES["gbr"]["name"]);
$target_file = "../gambar/". basename($_FILES["gbr"]["name"]);

$upload = move_uploaded_file($_FILES["gbr"]["tmp_name"], $target_file);

include "../koneksi.php";

$q ="INSERT INTO tb_brand (kode,brand,tipe,harga,brosur) values ('$kdbrg','$namabrand','$tipebrg','$hargabrg','$gbrname')";

mysqli_query($koneksi,$q);
header("location:../data.php");


?>