<?php 
$isbn = $_REQUEST['kode'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi,"SELECT file_ebook FROM buku WHERE isbn='$isbn'");
$ary = mysqli_fetch_array($q);
$file = $ary['file_ebook'];

unlink("file/".$file);


mysqli_query($koneksi, "DELETE FROM buku WHERE isbn='$isbn'");

header("location:data.php");

?>