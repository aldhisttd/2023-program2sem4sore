<?php 

$id =$_POST['id'];
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$tglhr =$_POST['tglhr'];

$namaphoto = basename($_FILES["photo"]["name"]);
$target_file = "../photo/". basename($_FILES["photo"]["name"]);

$upload = move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

include "koneksi.php";

$q = "INSERT INTO biodata (id, nama, alamat, tanggal_lahir, photo) VALUES ('$id','$nama','$alamat','$tglhr','$namaphoto')";


mysqli_query($koneksi, $q);

header("location:../data.php");

?>