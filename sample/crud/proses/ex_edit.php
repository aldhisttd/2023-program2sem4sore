<?php 

$kdBrg = $_POST['kdbrg'];
$nama = $_POST['namabrg'];
$stn = $_POST['satuan'];
$hrg = $_POST['hrg'];

include "koneksi.php";
if($_FILES['gbr']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi,"SELECT gambar FROM barang WHERE kode_barang='$kdBrg'");
    $ary = mysqli_fetch_array($q);
    $gambar = $ary['gambar'];
    // hapus gambar lama
    // unlink("../gambar/".$gambar);
    // upload gambar baru
    $namagbr = basename($_FILES["gbr"]["name"]);
    $target_file = "../gambar/". basename($_FILES["gbr"]["name"]);
    $upload = move_uploaded_file($_FILES["gbr"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $namaGbrBaru = $_FILES["gbr"]["name"];
    mysqli_query($koneksi, "UPDATE barang SET gambar='$namaGbrBaru' WHERE kode_barang='$kdBrg'");
}



mysqli_query($koneksi, "UPDATE barang SET nama='$nama', satuan='$stn', harga='$hrg' WHERE kode_barang='$kdBrg'");

header('location:../data.php');
