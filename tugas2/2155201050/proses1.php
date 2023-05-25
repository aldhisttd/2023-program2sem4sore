<?php
if (isset($_POST['btn_submit'])) {

  $vMerek = $_POST['merek'];
  $vSpec = $_POST['spec'];
  $vHarga = $_POST['harga'];

  echo "Merek : " . $vMerek;
  echo "<br>";
  echo "Spec : " . $vSpec;
  echo "<br>";
  echo "Harga : " . $vHarga;
  echo '<br>';

  echo '<a href="index1.php">kembali</a>';
} else {
  header("location:index1.php");
}
