<?php 
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];

include "koneksi.php";

if($_FILES['doc']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi,"SELECT file_ebook FROM buku WHERE isbn='$isbn'");
    $ary = mysqli_fetch_array($q);
    $gambar = $ary['doc'];
    // hapus gambar lama
     unlink("gambar/".$gambar);
    // upload gambar baru
    $namapdf = basename($_FILES["doc"]["name"]);
    $target_file = "file/". basename($_FILES["doc"]["name"]);
    $upload = move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $namapdfBaru = $_FILES["doc"]["name"];
    mysqli_query($koneksi, "UPDATE buku SET file_ebook='$namapdfBaru' WHERE isbn='$isbn'");
}



mysqli_query($koneksi, "UPDATE buku SET judul='$judul', kategori='$kategori', stok='$stok' WHERE isbn='$isbn'");

header('location:data.php');

// if($_FILES['doc']['name'] != ""){

//     $q = mysqli_query($koneksi,"SELECT gambar FROM buku WHERE kode_barang='$kdBrg'");
//     $ary = mysqli_fetch_array($q);
//     $gambar = $ary['gambar'];
//     // hapus gambar lama
//     // unlink("../gambar/".$gambar);
//     // upload gambar baru
//     $namagbr = basename($_FILES["gbr"]["name"]);
//     $target_file = "../gambar/". basename($_FILES["gbr"]["name"]);
//     $upload = move_uploaded_file($_FILES["gbr"]["tmp_name"], $target_file);
//     // update nama gambar ke gambar baru
//     $namaGbrBaru = $_FILES["gbr"]["name"];
//     mysqli_query($koneksi, "UPDATE barang SET gambar='$namaGbrBaru' WHERE kode_barang='$kdBrg'");
// }
// $namagbr = basename($_FILES["gbr"]["name"]);
// $target_file = "../gambar/". basename($_FILES["gbr"]["name"]);

// $upload = move_uploaded_file($_FILES["gbr"]["tmp_name"], $target_file);



?>