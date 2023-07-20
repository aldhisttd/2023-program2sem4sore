<?php 

$kdbrg =$_POST['kdbrg'];
$nama =$_POST['namabrg'];
$stn =$_POST['satuan'];
$hrg =$_POST['hrg'];

$namagbr = basename($_FILES["gbr"]["name"]);
$target_file = "../gambar/". basename($_FILES["gbr"]["name"]);

$upload = move_uploaded_file($_FILES["gbr"]["tmp_name"], $target_file);

include "koneksi.php";

$q = "INSERT INTO barang (kode_barang, nama, satuan, harga, gambar) VALUES ('$kdbrg','$nama','$stn','$hrg','$namagbr')";


mysqli_query($koneksi, $q);

header("location:../data.php");

?>