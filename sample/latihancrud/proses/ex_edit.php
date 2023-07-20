<?php 

$kdbrg = $_POST['kdbrg'];
$nama = $_POST['namabrg'];
$stn = $_POST['satuan'];
$hrg = $_POST['hrg'];

include "koneksi.php";
if($_FILES['gbr']['name'] != ""){
  $q = mysqli_query($koneksi, "SELECT gambar FROM barang WHERE kode_barang='$kdbrg'");
  $ary = mysqli_fetch_array ($q);
  $gambar = $ary['gambar'];

  $namagbr = basename($_FILES["gbr"]["name"]);
  $target_file = "../gambar/". basename($_FILES["gbr"]["name"]);
  $upload = move_uploaded_file($_FILES["gbr"]["tmp_name"], $target_file);
  
  $namaGbrBaru = $_FILES["gbr"]["name"];
  mysqli_query($koneksi, "UPDATE barang SET gambar='$namaGbrBaru' WHERE kode_barang='$kdbrg'");
}

mysqli_query($koneksi, "UPDATE barang SET nama='$nama', satuan='$stn', harga='$hrg' WHERE kode_barang='$kdbrg'");

header ('location:../data.php');


?>