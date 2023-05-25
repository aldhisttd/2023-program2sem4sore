<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Form Data Laptop Baru</h1>

  <form action="proses1.php" method="POST">
    <label for="">Merek</label> <br>
    <input type="text" name="merek">

    <br>

    <label for="">Spec</label> <br>
    <input type="textarea" name="spec">

    <br>

    <label for="">Harga</label><br>
    <select name="harga">
      <option value="-">0</option>
      <option value="10.000.000">10.000.000</option>
      <option value="10.300.000">10.300.000</option>
      <option value="10.500.000">10.500.000</option>
    </select>
    <br>

    <label for="">Photo</label> <br>
    <input type="file" name="photo">

    <br>
    <br>
    <input type="submit" name="btn_submit" value="simpan">
  </form>
</body>

</html>