<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl = $_POST['tanggal'];

$namaphoto = basename($_FILES["photo"]["name"]);
$target_file = "../photo/". basename($_FILES["photo"]["name"]);

$upload = move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

include 'koneksi.php';

$q = "INSERT INTO seri1 (id, nama, alamat, tgl_lahir, photo) VALUES ('$id', '$nama', '$alamat', '$tgl', '$namaphoto')";

mysqli_query($koneksi, $q);

header("location:../data.php");