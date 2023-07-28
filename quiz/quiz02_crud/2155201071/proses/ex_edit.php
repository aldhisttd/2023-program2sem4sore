<?php 

$nomor_tagihan =$_POST['nomor_tagihan'];
$tanggal =$_POST['tanggal'];
$jenis_tagihan =$_POST['jenis_tagihan'];
$nominal =$_POST['nominal'];

include "koneksi.php";
// if($_FILES['bukti_transfer']['name'] != ""){
//   $q = mysqli_query($koneksi, "SELECT bukti_trnasfer FROM pembayaran WHERE nomor_tagihan='$nomor_tagihan'");
//   $ary = mysqli_fetch_array ($q);
//   $bukti_transfer = $ary['bukti_transfer'];

//   $namafile = basename($_FILES["bukti_transfer"]["name"]);
//   $target_file = "../file/". basename($_FILES["bukti_transfer"]["name"]);
//   $upload = move_uploaded_file($_FILES["bukti_transfer"]["tmp_name"], $target_file);
  
//   $namafileBaru = $_FILES["bukti_transfer"]["name"];
//   mysqli_query($koneksi, "UPDATE pembayaran SET bukti_transfer='$namafileBaru' WHERE nomor_tagihan='$nomor_tagihan'");
// }
//var_dump($nominal);exit();
mysqli_query($koneksi, "UPDATE pembayaran SET nomor_tagihan='$nomor_tagihan', tanggal='$tanggal', jenis_tagihan='$jenis_tagihan', nominal=$nominal WHERE nomor_tagihan='$nomor_tagihan'");

header ('location:../data.php');


?> 