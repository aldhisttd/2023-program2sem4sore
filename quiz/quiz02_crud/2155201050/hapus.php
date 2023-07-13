<?php
$kode = $_REQUEST['kode'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi, "SELECT file_ebook FROM buku WHERE isbn='$kode'");
$ary = mysqli_fetch_array($q);
$file_ebook = $ary ['file_ebook'];

unlink("file/".$file_ebook);

mysqli_query($koneksi, "DELETE FROM buku WHERE isbn='$kode'");

header("location:data.php");

?>