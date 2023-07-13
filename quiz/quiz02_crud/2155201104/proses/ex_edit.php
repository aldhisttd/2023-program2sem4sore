<?php

$fIsbn = $_POST['fisbn'];
$judul = $_POST['fjudul'];
$kategori = $_POST['fkategori'];
$stok = $_POST['fstok'];

include "koneksi.php";
if ($_FILES['febook']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi, "SELECT file_ebook FROM quiz2 WHERE isbn='$fIsbn'");
    $ary = mysqli_fetch_array($q);
    $gambar = $ary['file_ebook'];
    // hapus gambar lama
    // unlink("../gambar/".$gambar);
    // upload gambar baru
    $namagbr = basename($_FILES["febook"]["name"]);
    $target_file = "../file/" . basename($_FILES["febook"]["name"]);
    $upload = move_uploaded_file($_FILES["febook"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $namaGbrBaru = $_FILES["febook"]["name"];
    mysqli_query($koneksi, "UPDATE buku SET file_ebook='$namaGbrBaru' WHERE isbn='$fIsbn'");
}



mysqli_query($koneksi, "UPDATE quiz2 SET isbn='$fIsbn', judul='$judul', kategori='$kategori' , stok='$stok' WHERE isbn='$fIsbn'");

header('location:../data.php');
