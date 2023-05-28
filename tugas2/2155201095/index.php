<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Laptop</title>
    <style>
    <div class="container">
  <div class="child"></div>
</div>
.container {
  font-family: arial;
  font-size: 24px;
  margin: 25px;
  width: 350px;
  height: 200px;
  outline: dashed 1px black;
  /* Pusatkan secara vertikal dan horizontal */
  display: flex;
  justify-content: center;
  align-items: center;
}

.child {
  width: 50px;
  height: 50px;
  background-color: red;
}
    </style>
</head>
<body>

    <h1>Form Data Laptop</h1>

    <form action="proses.php" method="POST">

        <label for="">Merk</label><br>
        <input type="text" name="merk">

        <br><br>
        <label for="">Spesifikasi</label> <br>
        <textarea id="spesifikasi" name="spek" rows="4" cols="50"></textarea>

        <br><br>

        <label for="">Harga</label> <br>
        <input type="number" id="" name="harga">

        <br><br>

        <label for="">Gambar</label> <br>
        <input type="file" id="" name="Gambar">

        <br><br>

        <input type="submit" name="input" value="input">
    </form>
</body>
</html>