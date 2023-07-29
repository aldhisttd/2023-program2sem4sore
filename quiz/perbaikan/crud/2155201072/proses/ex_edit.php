<?php 

$sn = $_POST['sn'];
$tgl = $_POST['tgl'];
$jenis = $_POST['jenis'];
$quantity = $_POST['quantity'];
$spesifikasi = $_POST['spesifikasi'];

include "koneksi.php";
if($_FILES['gambar']['name'] != ""){
  $q = mysqli_query($koneksi, "SELECT gambar FROM software WHERE sn='$sn'");
  $ary = mysqli_fetch_array ($q);
  $gambar = $ary['gambar'];

  $namagbr = basename($_FILES["gambar"]["name"]);
  $target_file = "../gambar/". basename($_FILES["gambar"]["name"]);
  $upload = move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

  $gambarbaru = $_FILES["gambar"]["name"];
  mysqli_query($koneksi, "UPDATE software SET gambar='$gambarbaru' WHERE sn='$sn'");
}


mysqli_query($koneksi, "UPDATE software SET sn='$sn', tanggal_rilis='$tgl', jenis='$jenis', quantity='$quantity', spesifikasi='$spesifikasi', gambar='$gambarbaru' WHERE sn='$sn'");

header ('location:../data.php');