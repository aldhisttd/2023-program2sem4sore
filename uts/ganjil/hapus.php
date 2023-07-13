<?php 
$id = $_REQUEST['id'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi,"SELECT Photo FROM seri1 WHERE ID='$id'");
$ary = mysqli_fetch_array($q);
$photo = $ary['Photo'];

unlink("Photo/".$photo);


mysqli_query($koneksi, "DELETE FROM seri1 WHERE ID='$id'");

header("location:data.php");
