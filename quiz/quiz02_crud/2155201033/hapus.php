<?php 
$kode = $_REQUEST['kode'];

include "proses/koneksi.php";

$q = mysqli_query($koneksi,"SELECT bukti_transfer FROM pembayaran WHERE nomor_tagihan='$kode'");
$ary = mysqli_fetch_array($q);
$bukti_transfer = $ary['bukti_transfer'];

unlink("bukti_transfer/".$bukti_transfer);


mysqli_query($koneksi, "DELETE FROM pembayaran WHERE nomor_tagihan='$kode'");

header("location:data.php");
