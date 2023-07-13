<?php

$fIsbn = $_POST['fisbn'];
$judul = $_POST['fjudul'];
$kategori = $_POST['fkategori'];
$stok = $_POST['fstok'];


$namafile = basename($_FILES["febook"]["name"]);
$target_file = "../file/" . basename($_FILES["febook"]["name"]);

$upload = move_uploaded_file($_FILES["febook"]["tmp_name"], $target_file);

include "koneksi.php";
global $koneksi;
$q = "INSERT INTO quiz2 (isbn, judul, kategori, stok, file_ebook) VALUES('$fIsbn','$judul','$kategori',$stok,'$namafile')";
mysqli_query($koneksi, $q);

header("location:../data.php");
