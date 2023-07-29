<?php 

$sn = $_POST['fsn'];
$tanggal = $_POST['ftanggal'];
$jenis = $_POST['fjenis'];
$quantity = $_POST['fquantity'];
$spesifikasi = $_POST['fspesifikasi'];

include "koneksi.php";
if($_FILES['fgambar']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi,"SELECT gambar FROM software WHERE sn='$sn'");
    $ary = mysqli_fetch_array($q);
    $gambar = $ary['gambar'];
    // hapus gambar lama
    unlink("../file/".$gambar);
    // upload gambar baru
    $namagbr = basename($_FILES["fgambar"]["name"]);
    $target_file = "../file/". basename($_FILES["fgambar"]["name"]);
    $upload = move_uploaded_file($_FILES["fgambar"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $namaGbrBaru = $_FILES["fgambar"]["name"];
    mysqli_query($koneksi, "UPDATE software SET gambar='$namaGbrBaru' WHERE sn='$sn'");
}



mysqli_query($koneksi, "UPDATE software SET sn='$sn', tanggal_rilis='$tanggal', jenis='$jenis' , quantity='$quantity' , spesifikasi='$spesifikasi' WHERE sn='$sn'");

header('location:../data.php');
