<?php 

$nomor_tagihan = $_POST['nomor_tagihan'];
$tanggal = $_POST['tanggal'];
$jenis_tagihan = $_POST['jenis_tagihan'];
$nominal = $_POST['nominal'];

$bukti_transfer = basename($_FILES["bukti_transfer"]["name"]);
$target_file = "../bukti_transfer/". basename($_FILES["bukti_transfer"]["name"]);

$upload = move_uploaded_file($_FILES["bukti_transfer"]["tmp_name"], $target_file);

include "koneksi.php";

$q = "INSERT INTO pembayaran (nomor_tagihan, tanggal, jenis_tagihan, nominal, bukti_transfer) 
VALUES('$nomor_tagihan','$tanggal','$jenis_tagihan',$nominal,'$bukti_transfer')";

mysqli_query($koneksi, $q);

header("location:../data.php");