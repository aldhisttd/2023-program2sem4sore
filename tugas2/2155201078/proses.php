<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST['input'])){
    
    $merk = $_POST['merk'];
    $spek = $_POST['spek'];
    $harga = $_POST['harga'];
    echo "Merk Laptop : ".$merk;
    echo "<br>";
    echo "Spesifikasi : ".$spek;
    echo "<br>";
    echo "Harga Laptop : ".$harga;
    echo "<br>";
    echo "Gambar : ";
    echo "<br>";
    
}
// memastikan ada file yang diupload
if ($uploadOk == 0) {
  echo "Upload File Terlebih Dahulu.";

//upload file
} else {
  if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
    echo "<img src='$target_file' width='200' height='200'>";
    echo "<br>";
  } 
}

?>
