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

  <form action="proses.php" method="POST" enctype="multipart/form-data">
    <label for="">Merk</label> <br>
    <input type="text" name="merk">

    <br>

    <label for="">Spec</label> <br>
    <textarea cols="30" name="spec"> </textarea>

    <br>

    <label for="">Harga</label><br>
    <input type="number" name="harga">
    <br>

    <label for="">Photo</label> <br>
    <input type="file" name="photo">

    <br>
    <br>
    <input type="submit" name="btn_submit" value="simpan">
  </form>
</body>

</html>