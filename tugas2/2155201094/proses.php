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

  echo '<a href="from1.php"></a>';
  echo "Photo :";
  echo '<br>';
} else {
  header("location:from1.php");
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
    <li><img src="asus.jpg" width="220px"></li>
  </ul>
</body>

</html>