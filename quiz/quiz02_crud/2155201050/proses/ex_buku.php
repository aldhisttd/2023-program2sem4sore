<?php 

$isbn =$_POST['isbn'];
$judul =$_POST['judul'];
$kategori =$_POST['kategori'];
$stok =$_POST['stok'];

$namafile = basename($_FILES["file_ebook"]["name"]);
$target_file = "../file/". basename($_FILES["file_ebook"]["name"]);

$upload = move_uploaded_file($_FILES["file_ebook"]["tmp_name"], $target_file);

include "koneksi.php";

$q = "INSERT INTO buku (isbn, judul, kategori, stok, file_ebook) VALUES ('$isbn','$judul','$kategori','$stok','$namafile')";


mysqli_query($koneksi, $q);

header("location:../data.php");

?>