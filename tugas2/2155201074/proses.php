<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST['btn_submit'])){
    $vMerek = $_POST['merek'];
    $vSpek = $_POST['spek'];
    $vHarga = $_POST['harga'];

    echo "Merek Laptop : ".$vMerek;
    echo "<br>";
    echo "Spesifikasi Laptop : ".$vSpek;
    echo "<br>";
    echo "Harga Laptop : Rp. ".$vHarga;
    echo "<br>";
    echo "Gambar Laptop : ";
    echo "<br>";
    echo "<img src='$target_file' width='400' height='250'>";
    echo "<br>";
    echo '<a href="index.php">Kembali ke form laptop</a>';
    echo "<br>";
}
else{
    header("location:index.php");
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Maaf, File kamu tidak terupload.";
  
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
    echo "Gambar ". htmlspecialchars( basename( $_FILES["gambar"]["name"])). " Telah Terupload.";
  } else {
    echo "Maaf, ada masalah dalam mengupload file kamu.";
  }
}
?>
