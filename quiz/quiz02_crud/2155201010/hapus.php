<?php 
    $kode = $_REQUEST['kode'];

    include "koneksi.php";
    
    $q = mysqli_query($koneksi,"SELECT file_ebook FROM buku WHERE isbn='$kode'");
    $ary = mysqli_fetch_array($q);
    $pdf = $ary['pdf'];
    
    unlink("file/".$pdf);
    
    
    mysqli_query($koneksi, "DELETE FROM buku WHERE isbn='$kode'");
    
    header("location:data.php");

?>