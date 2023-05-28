<?php


if(isset($_POST['btn_submit'])){

    $vMerek = $_POST['Merek'];
    $vSpesifikasi = $_POST['Spesifikasi'];
    $vHarga = $_POST['Harga'];
    $vGambar = $_POST['Gambar'];

    echo "Merek : ".$vMerek;
    echo "<br>";
    echo "Spesifikasi : ".$vSpesifikasi;
    echo "<br>";
    echo "Harga : ".$vHarga;
    echo "<br>";
    echo "Gambar : ";
    echo '<img src="' . $vGambar . '" width="250px" height="150px" alt="Gambar">';


 
}else{
    header("location:index.php");
}


?>