<?php 

$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];

include "koneksi.php";
if($_FILES['pdf']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi,"SELECT file_ebook FROM buku WHERE isbn='$isbn'");
    $ary = mysqli_fetch_array($q);
    $gambar = $ary['pdf'];
    // hapus gambar lama
     unlink("../gambar/".$gambar);
    // upload gambar baru
    $namapdf = basename($_FILES["pdf"]["name"]);
    $target_file = "../file/". basename($_FILES["pdf"]["name"]);
    $upload = move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $namapdfBaru = $_FILES["pdf"]["name"];
    mysqli_query($koneksi, "UPDATE buku SET file_ebook='$namapdfBaru' WHERE isbn='$isbn'");
}



mysqli_query($koneksi, "UPDATE buku SET judul='$judul', kategori='$kategori', stok='$stok' WHERE isbn='$isbn'");

header('location:../data.php');
