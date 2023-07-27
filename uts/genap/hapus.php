<?php 
$id = $_REQUEST['id'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi,"SELECT photo FROM seri1 WHERE id='$id'");
$ary = mysqli_fetch_array($q);
$photo = $ary['photo'];

unlink("photo/".$gambar);


mysqli_query($koneksi, "DELETE FROM seri1 WHERE id='$id'");

header("location:data.php");
