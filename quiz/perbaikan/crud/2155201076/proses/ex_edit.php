<?php 

$sn =$_POST['sn'];
$tanggal_rilis =$_POST['tanggal_rilis'];
$jenis =$_POST['jenis'];
$quantity =$_POST['quantity'];
$spesifikasi =$_POST['spesifikasi'];

include "koneksi.php";
// if($_FILES['gambar']['name'] != ""){
//   $q = mysqli_query($koneksi, "SELECT gambar FROM software WHERE sn='$sn'");
//   $ary = mysqli_fetch_array ($q);
//   $gambar = $ary['gambar'];

//   $namafile = basename($_FILES["gambar"]["name"]);
//   $target_file = "../file/". basename($_FILES["gambar"]["name"]);
//   $upload = move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
  
//   $namafileBaru = $_FILES["gambar"]["name"];
//   mysqli_query($koneksi, "UPDATE software SET gambar='$namafileBaru' WHERE sn='$sn'");
// }
//var_dump($stok);exit();
mysqli_query($koneksi, "UPDATE software SET sn='$sn', tanggal_rilis='$tanggal_rilis', jenis='$jenis', quantity='$quantity', spesifikasi=$spesifikasi WHERE sn='$sn'");

header ('location:../data.php');


?> 