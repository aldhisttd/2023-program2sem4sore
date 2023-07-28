<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl = $_POST['tgl'];

include 'koneksi.php';
if($_FILES['photo']['name'] != "") {

    // ambil nama gambar lama
    $q = mysqli_query($koneksi, "SELECT photo FROM seri1 WHERE id='$id'");
    $ary = mysqli_fetch_array($q);
    $photo = $ary['photo'];

    // hapus gambar lama
    unlink("../photo/".$photo);

    // upload gambar baru
    $namaphoto = basename($_FILES["photo"]["name"]);
    $target_file = "../photo/". basename($_FILES["photo"]["name"],);
    $upload = move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

    //update nama gambar ke gambar baru
    $namaphotobaru = $_FILES["photo"]["name"];
    mysqli_query($koneksi, "UPDATE seri1 SET photo='$namagbrbaru' WHERE id='$id'");
}

mysqli_query($koneksi, "UPDATE seri1 SET nama='$nama', alamat='$alamat', tgl_lahir='$tgl' WHERE id='$id'");

header('location:../data.php');