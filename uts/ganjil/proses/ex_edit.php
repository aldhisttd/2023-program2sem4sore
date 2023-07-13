<?php 

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl = $_POST['tgl'];

include "koneksi.php";
if($_FILES['Photo']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi,"SELECT Photo FROM seri1 WHERE ID='$id'");
    $ary = mysqli_fetch_array($q);
    $gambar = $ary['gambar'];
    // hapus gambar lama
    unlink("../gambar/".$gambar);
    // upload gambar baru
    $namagbr = basename($_FILES["photo"]["name"]);
    $target_file = "../photo/". basename($_FILES["photo"]["name"]);
    $upload = move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $photobaru = $_FILES["photo"]["name"];
    mysqli_query($koneksi, "UPDATE seri1 SET Photo='$photobaru' WHERE ID='$id'");
}


mysqli_query($koneksi, "UPDATE seri1 SET ID='$id', Nama='$nama', Alamat='$alamat', tgl_lahir='tgl' WHERE ID='$id'");

header('location:../data.php');
