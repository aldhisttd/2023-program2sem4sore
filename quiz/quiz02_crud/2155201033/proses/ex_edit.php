<?php 

$nomor_tagihan = $_POST['nomor_tagihan'];
$tanggal = $_POST['tanggal'];
$jenis_tagihan = $_POST['jenis_tagihan'];
$nominal = $_POST['nominal'];

include "koneksi.php";
if($_FILES['bukti_transfer']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi,"SELECT bukti_transfer FROM pembayaran WHERE nomor_tagihan='$nomor_tagihan'");
    $ary = mysqli_fetch_array($q);
    $bukti_transfer = $ary['bukti_transfer'];
    // hapus gambar lama
    unlink("../bukti_transfer/".$bukti_transfer);
    // upload gambar baru
    $namabukti_transfer = basename($_FILES["bukti_transfer"]["name"]);
    $target_file = "../bukti_transfer/". basename($_FILES["bukti_transfer"]["name"]);
    $upload = move_uploaded_file($_FILES["bukti_transfer"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $bukti_transferbaru = $_FILES["bukti_transfer"]["name"];
    mysqli_query($koneksi, "UPDATE pembayaran SET bukti_transfer ='$bukti_transferbaru' WHERE nomor_tagihan='$nomor_tagihan'");
}



mysqli_query($koneksi, "UPDATE pembayaran SET tanggal='$tanggal', jenis_tagihan='$jenis_tagihan', nominal='$nominal' WHERE nomor_tagihan='$nomor_tagihan'");

header('location:../data.php');