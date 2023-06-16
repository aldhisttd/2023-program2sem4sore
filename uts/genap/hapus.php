<?php
$id = $_REQUEST['id'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi, "SELECT photo FROM biodata WHERE id='$id'");
$ary = mysqli_fetch_array($q);
$photo = $ary ['photo'];

unlink("photo/".$photo);

mysqli_query($koneksi, "DELETE FROM biodata WHERE id='$id'");

header("location:data.php");

?>