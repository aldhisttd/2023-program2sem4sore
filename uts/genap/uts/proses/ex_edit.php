<?php 

$kdbrg = $_POST['kdbrg'];
$namabrand = $_POST['brand'];
$tipebrg = $_POST['tipe'];
$hargabrg = $_POST['harga'];

include "../koneksi.php";
if($_FILES['gbr']['name'] != "") {
 
    $q = mysqli_query($koneksi,"SELECT brosur FROM tb_brand WHERE kode='$kdbrg'");
    $ary = mysqli_fetch_array($q);
    $gambar = $ary['gambar'];
   
    $namagbr = basename($_FILES["gbr"]["name"]);
    $target_file = "../gambar/". basename($_FILES["gbr"]["name"]);
    $upload = move_uploaded_file($_FILES["gbr"]["tmp_name"], $target_file);
  
    $namaGbrBaru = $_FILES["gbr"]["name"];
    mysqli_query($koneksi, "UPDATE tb_brand SET brosur='$namaGbrBaru' WHERE kode='$kdbrg'");
}



mysqli_query($koneksi, "UPDATE tb_brand SET brand='$namabrand', tipe='$tipebrg', harga='$hargabrg' WHERE kode='$kdbrg'");

header('location:../data.php');
