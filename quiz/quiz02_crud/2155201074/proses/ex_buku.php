<?php 

$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];


$namapdf = basename($_FILES["pdf"]["name"]);
$target_file = "../file/". basename($_FILES["pdf"]["name"]);

$upload = move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file);

include "koneksi.php";

$q = "INSERT INTO buku (isbn, judul, kategori, stok, file_ebook) VALUES('$isbn','$judul','$kategori',$stok,'$namapdf')";

mysqli_query($koneksi, $q);

header("location:../data.php");

