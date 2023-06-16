<?php

$kode = $_POST['kode'];
$brand = $_POST['brand'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];


include "koneksi.php";
if ($_FILES['gambar']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi, "SELECT gambar FROM  WHERE kode_brand='$kode'");
    $ary = mysqli_fetch_array($q);
    $gambar = $ary['gambar'];
    // hapus gambar lama
    // unlink("../gambar/".$gambar);
    // upload gambar baru
    $namagbr = basename($_FILES["gambar"]["name"]);
    $target_file = "../gambar/" . basename($_FILES["gambar"]["name"]);
    $upload = move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $namaGbrBaru = $_FILES["gambar"]["name"];
    mysqli_query($koneksi, "UPDATE data_laptop SET gambar='$namaGbrBaru' WHERE kode='$kode'");
}



mysqli_query($koneksi, "UPDATE data_laptop SET brand='$brand', tipe='$tipe', harga='$harga' WHERE kode='$kode'");

header('location:../data.php');
