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
  echo "Photo :";
  echo '<br>';
} else {
  header("location:index1.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>proses</title>
</head>

<body>
  <ul>
    <li><img src="image/laptop.jpg" width="120px"></li>
  </ul>
</body>

</html>