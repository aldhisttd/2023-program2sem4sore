<?php
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadok = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST['btn_submit'])) {

  $vMerk = $_POST['merk'];
  $vSpec = $_POST['spec'];
  $vHarga = $_POST['harga'];

  echo "Merk : " . $vMerk;
  echo "<br>";
  echo "Spec : " . $vSpec;
  echo "<br>";
  echo "Harga : " . $vHarga;
  echo '<br>';
  echo "Gambar : ";
  echo "<br>";
}

if ($uploadok == 0) {
  echo "Upload file terlebih dahulu";
} else {
  if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    echo "<img src='$target_file' width='200' height='200'>";
    echo "<br>";
  }
}
