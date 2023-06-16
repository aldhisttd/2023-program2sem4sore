<?php 

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tglhr = $_POST['tglhr'];

include "koneksi.php";
if($_FILES['photo']['name'] != ""){
  $q = mysqli_query($koneksi, "SELECT photo FROM biodata WHERE id='$id'");
  $ary = mysqli_fetch_array ($q);
  $gambar = $ary['photo'];

  $namaphoto = basename($_FILES["photo"]["name"]);
  $target_file = "../photo/". basename($_FILES["photo"]["name"]);
  $upload = move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
  
  $photobaru = $_FILES["photo"]["name"];
  mysqli_query($koneksi, "UPDATE biodata SET photo='$photobaru' WHERE id='$id'");
}

mysqli_query($koneksi, "UPDATE biodata SET nama='$nama', alamat='$alamat', tanggal_lahir='$tglhr' WHERE id='$id'");

header ('location:../data.php');


?>