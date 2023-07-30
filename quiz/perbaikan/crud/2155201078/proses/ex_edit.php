<?php 
$kode = $_GET['kode'];
$sn = $_POST['sn'];
$tanggal_rilis = $_POST['tanggal_rilis'];
$jenis = $_POST['jenis'];
$quantity = $_POST['quantity'];
$spesifikasi = $_POST['spesifikasi'];


include "koneksi.php";
if($_FILES['gambar']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($conn,"SELECT gambar FROM software WHERE kode='$kode'");
    $ary = mysqli_fetch_array($q);
    $gambar = $ary['gambar'];
    // hapus gambar lama
    unlink("../gambar/".$gambar);
    // upload gambar baru
    $namagbr = basename($_FILES["gambar"]["name"]);
    $target_file = "../gambar/". basename($_FILES["gambar"]["name"]);
    $upload = move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $namaGbrBaru = $_FILES["gambar"]["name"];
    mysqli_query($conn, "UPDATE software SET gambar='$namaGbrBaru' WHERE kode='$kode'");
}


mysqli_query($conn, "UPDATE software SET sn='$sn', tanggal_rilis='$tanggal_rilis', jenis='$jenis', quantity='$quantity', spesifikasi='$spesifikasi' WHERE kode='$kode'");

header('location:../software.php');

 ?>