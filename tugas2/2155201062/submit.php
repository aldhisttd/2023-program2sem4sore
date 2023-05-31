<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST['input'])){

    $merk = $_POST['merk'];
    $spek = $_POST['spek'];
    $harga = $_POST['harga'];
    echo "Merek : ".$merk;
    echo "<br>";
    echo "Spesifikasi : ".$spek;
    echo "<br>";
    echo "Harga  : ".$harga;
    echo "<br>";
    echo "Foto : ";
    echo "<br>";

}
if ($uploadOk == 0) {
  echo "Foto Laptop Harus Diupload";

} else {
  if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    echo "<img src='$target_file' width='200' height='200'>";
    echo "<br>";
  } 
}

?>
