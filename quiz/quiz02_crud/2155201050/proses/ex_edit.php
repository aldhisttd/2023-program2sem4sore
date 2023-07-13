<?php 

$isbn =$_POST['isbn'];
$judul =$_POST['judul'];
$kategori =$_POST['kategori'];
$stok =$_POST['stok'];

include "koneksi.php";
// if($_FILES['file_ebook']['name'] != ""){
//   $q = mysqli_query($koneksi, "SELECT file_ebook FROM buku WHERE isbn='$isbn'");
//   $ary = mysqli_fetch_array ($q);
//   $file_ebook = $ary['file_ebook'];

//   $namafile = basename($_FILES["file_ebook"]["name"]);
//   $target_file = "../file/". basename($_FILES["file_ebook"]["name"]);
//   $upload = move_uploaded_file($_FILES["file_ebook"]["tmp_name"], $target_file);
  
//   $namafileBaru = $_FILES["file_ebook"]["name"];
//   mysqli_query($koneksi, "UPDATE buku SET file_ebook='$namafileBaru' WHERE isbn='$isbn'");
// }
//var_dump($stok);exit();
mysqli_query($koneksi, "UPDATE buku SET isbn='$isbn', judul='$judul', kategori='$kategori', stok=$stok WHERE isbn='$isbn'");

header ('location:../data.php');


?> 