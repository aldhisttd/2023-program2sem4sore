<?php


if(isset($_POST['input'])){

    $vMerk = $_POST['merk'];
    $vSpesifikasi = $_POST['spek'];
    $vHarga = $_POST['harga'];
    $vGambar = $_POST['gambar'];

    echo "Merk : ".$vMerk;
    echo "<br>";
    echo "Spesifikasi : ".$vSpesifikasi;
    echo "<br>";
    echo "Harga : ".$vHarga;
    echo "<br>";
    echo "Gambar : ";
    echo '<img src="' . $vGambar . '" width="300px" height="200px" alt="Gambar">'; 


}else{
    header("location:index.php");
}


?>