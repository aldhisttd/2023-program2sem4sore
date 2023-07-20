<?php 
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];

$filebuku = basename($_FILES["doc"]["name"]);
// var_dump($filebuku);exit();
$target_file ="file/". basename($_FILES["doc"]["name"]);
$upload = move_uploaded_file($_FILES["doc"]["tmp_name"],$target_file);
include "koneksi.php";

$q =" INSERT INTO buku (isbn,judul,kategori,stok,file_ebook) values ('$isbn','$judul','$kategori','$stok','$filebuku')";
mysqli_query($koneksi,$q);
header("location:data.php");
?>