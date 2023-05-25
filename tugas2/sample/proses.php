<?php


if(isset($_POST['btn_submit'])){

    $vNik = $_POST['nik'];
    $vNama = $_POST['nama'];
    $vJenis = $_POST['jenis'];

    echo "Nik : ".$vNik;
    echo "<br>";
    echo "Nama : ".$vNama;
    echo "<br>";
    echo "Jenis : ".$vJenis;



    // // echo "Pasien dengan NIK: ".$vNik.", namanya ".$vNama.", jenis pasien adalah : ".$vJenis;

    echo '<br><br>';

    echo '<a href="index.php">kembali</a>';



}else{
    header("location:index.php");
}


?>




