<?php 

$kode = $_POST['kode'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$jenis = $_POST['jenis'];
$quantity = $_POST['quantity'];
$spesifikasi = $_POST['spesifikasi'];

include "koneksi.php";
if($_FILES['gambar']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi,"SELECT gambar FROM laptop WHERE kode='$kode'");
    $ary = mysqli_fetch_array($q);
    $gambar = $ary['gambar'];
    // hapus gambar lama
    // unlink("../gambar/".$gambar);
    // upload gambar baru
    $namagbr = basename($_FILES["gambar"]["name"]);
    $target_file = "../file/". basename($_FILES["gambar"]["name"]);
    $upload = move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $namaGbrBaru = $_FILES["gambar"]["name"];
    mysqli_query($koneksi, "UPDATE laptop SET gambar='$namaGbrBaru' WHERE kode='$kode'");
}



mysqli_query($koneksi, "UPDATE laptop SET kode='$kode', tanggal_masuk='$tanggal_masuk', jenis='$jenis' , quantity='$quantity' WHERE nomor_tagihan='$knomor'");

header('location:../data.php');
